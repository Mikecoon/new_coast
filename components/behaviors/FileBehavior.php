<?php


/**
 * Поведение для работы с файлами
 */
namespace app\components\behaviors;

use yii\db\ActiveRecord;
use yii\base\Behavior;
use yii\web\UploadedFile;
use Yii;

/**
 * @property $owner app\components\Model;
 */
class FileBehavior extends Behavior {

    private $savePath = "@webroot";
    private $folder = "uploads";
    private $thumbnailPostfix = "_thumb.jpg";
    public $attributes = [];

    public function events() {
        return [
            ActiveRecord::EVENT_BEFORE_VALIDATE => 'beforeValidate',
            ActiveRecord::EVENT_BEFORE_INSERT => 'insert',
            ActiveRecord::EVENT_BEFORE_UPDATE => 'insert',
        ];
    }

    private function getAttributesByRules() {
        foreach ($this->owner->rules() as $rule) {
            if ($rule[1] == "file" || $rule[1] == "image") {
                foreach ($rule[0] as $attr) {
                    $this->attributes[$attr] = [];
                }
            }
        }
    }

    public function beforeValidate() {
        if (empty($this->attributes)) $this->getAttributesByRules();

        foreach($this->attributes as $name => $type) {
            // Атрибут, который должен быть файлов
            $attr = $this->owner->attributes[$name];

            $file = UploadedFile::getInstance($this->owner, $name);

            if ($file) {
                //$this->owner->attributes[$name] = $file;
                $this->owner->setAttribute($name, $file);
            }
        }
    }

    // Прежде чем добавлять запись
    public function Insert() {

        foreach($this->attributes as $name => $attr) {

            $file = $this->owner->attributes[$name];

            if ($file instanceof UploadedFile) {
                $fileName = DIRECTORY_SEPARATOR.$this->folder.DIRECTORY_SEPARATOR.uniqid().".".$file->extension;
                $file->saveAs(Yii::getAlias($this->savePath).$fileName);

                $this->owner->setAttribute($name, $fileName);

                if (isset($attr['type'])) {
                    switch($attr['type']) {
                        case "image":
                            $this->checkImage($fileName, $attr);
                            break;
                    }
                }
            } else {
                $this->owner->setAttribute($name, $this->owner->oldAttributes[$name]);


            }
        }
    }

    // Подгоняем изображение
    public function checkImage($fileName, $attr) {
        $image = new \Imagick();
        $image->setBackgroundColor(new \ImagickPixel('#ffffff'));
        $image->readImage(Yii::getAlias("@webroot").$fileName);

        // resize and crop image
        if (isset($attr['size'])) {
            $image->cropThumbnailImage($attr['size'][0], $attr['size'][1]);
        }

        // generate thumbnail
        if (isset($attr['thumbnail'])) {
            $thumbnail = new \Imagick(Yii::getAlias("@webroot").$fileName);
            $thumbnail->cropThumbnailImage($attr['thumbnail'][0], $attr['thumbnail'][1]);
            $thumbnail->setImageFormat("jpg");
            $thumbnail->writeImage(Yii::getAlias("@webroot").$fileName.$this->thumbnailPostfix);
        }

        $image->writeImage(Yii::getAlias("@webroot").$fileName);
    }

    /**
     * Returns thumbnailed image, if it exists. In case of not - returns original image
     * @param null $attr
     * @return string
     */
    public function getThumbnail($attr = null) {
        if (!$attr) $attr = array_keys($this->attributes)[0];
        $photo = $this->owner->getAttribute($attr);

        if (file_exists(Yii::getAlias("@webroot").$photo.$this->thumbnailPostfix)) {
            return $photo.$this->thumbnailPostfix;
        } else {
            return $photo;
        }
    }
}