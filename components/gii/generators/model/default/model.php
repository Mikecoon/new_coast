<?php
/**
 * This is the template for generating the model class of a specified table.
 */

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\model\Generator */
/* @var $tableName string full table name */
/* @var $className string class name */
/* @var $queryClassName string query class name */
/* @var $tableSchema yii\db\TableSchema */
/* @var $labels string[] list of attribute labels (name => label) */
/* @var $rules string[] list of validation rules */
/* @var $behaviors string[] list of validation rules */
/* @var $attachedBehaviors string[] list of validation rules */
/* @var $relations array list of relations (name => relation declaration) */


echo "<?php\n";
?>

namespace <?= $generator->ns ?>;

use Yii;
use <?= ltrim($generator->baseClass, '\\') ?>;
<?= count($attachedBehaviors)? "use ". implode("; \nuse ",$attachedBehaviors).";" : "";?>

/**
 * Модель для таблицы "<?= $generator->generateTableName($tableName) ?>".
 *
<?php foreach ($tableSchema->columns as $column): ?>
 * @property <?= "{$column->phpType} \${$column->name}\n" ?>
<?php endforeach; ?>
<?php if (!empty($relations)): ?>
 *
<?php foreach ($relations as $name => $relation): ?>
 * @property <?= $relation[1] . ($relation[2] ? '[]' : '') . ' $' . lcfirst($name) . "\n" ?>
<?php endforeach; ?>
<?php endif; ?>
 */
class <?= $className ?> extends <?= \yii\helpers\StringHelper::basename($generator->baseClass) ?> {

    /**
    * Название модели
    */
    public static $modelName = "<?=$generator->modelName?>";

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '<?= $generator->generateTableName($tableName) ?>';
    }
<?php if ($generator->db !== 'db'): ?>

    /**
     * @return \yii\db\Connection соединение с базой для этой модели.
     */
    public static function getDb() {
        return Yii::$app->get('<?= $generator->db ?>');
    }
<?php endif; ?>

<? if ($generator->generateBehaviors): ?>
    /**
    * @inheritdoc
    */
    public function behaviors() {
        return array_merge(parent::behaviors(), [<?=implode(", ",$behaviors); echo "\n       "?>]);
    }

<? endif; ?>

    /**
     * @inheritdoc
     */
    public function rules() {
        return [<?= "\n            " . implode(",\n            ", $rules) . "\n        " ?>];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
<?php foreach ($labels as $name => $label): ?>
            <?= "'$name' => " . $generator->generateString($label) . ",\n" ?>
<?php endforeach; ?>
        ];
    }
<?php foreach ($relations as $name => $relation): ?>

    /**
     * @return \yii\db\ActiveQuery
     */
    public function get<?= $name ?>() {
        <?= $relation[0] . "\n" ?>
    }
<?php endforeach; ?>
<?php if ($queryClassName): ?>
<?php
    $queryClassFullName = ($generator->ns === $generator->queryNs) ? $queryClassName : '\\' . $generator->queryNs . '\\' . $queryClassName;
    echo "\n";
?>
    /**
     * @inheritdoc
     * @return <?= $queryClassFullName ?> модель для поиска ActiveQuery.
     */
    public static function find() {
        return new <?= $queryClassFullName ?>(get_called_class());
    }
<?php endif; ?>
}
