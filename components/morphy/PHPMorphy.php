<?php

namespace app\components\morphy;

require_once(__DIR__."/vendors/src/common.php");
use phpMorphy as Morphy;
use yii\base\Exception;

class PHPMorphy {

    private $morphy;
    private $language = 'ru';
    private $dictionaries = array('ru' => 'ru_RU', 'en' => 'en_EN');

    public function __construct($language = 'ru')
    {
        if (!empty($this->dictionaries[$language])) {
            $this->language = $language;
        }
        else{
            throw new PHPMorphyException('No such dictionary');
        }

        $this->morphy = new Morphy(__DIR__ . '/vendors/dicts',
                $this->dictionaries[$this->language],
                array('storage' => PHPMORPHY_STORAGE_FILE)
            );
    }
/*
    public function allForms($text) {
        return $this->morphy->getAllFormsWithGramInfo($text);
    }*/

    public function __call($name, $params){


        if (method_exists($this->morphy, $name)) {

            return call_user_func_array([$this->morphy,$name], $params);
        } else {
            throw new Exception("Метод $name не найден в ".get_class($this->morphy));
        }

    }

    public function normalize($text, $source_unless_normalized = true)
    {
        $normal_text = array();

        $text = trim($text);
        $text = preg_replace('/[^A-Za-zА-Яа-яЁё\']/u', ' ', $text);
        $text = preg_replace('/\s+/', ' ', $text);
        $text = mb_strtoupper($text, 'UTF-8');
        $text = trim($text);
        $text = explode(' ', $text);

        if (empty($text)) {
            return $normal_text;
        }

        $normal_text = array();

        return $this->morphy->lemmatize($text);


        /*if (is_array($result)) {
            $stopwords = $this->stopwords();
            foreach ($result as $source => $word) {
                if (is_array($word)) {
                    foreach ($word as $form) {
                        if (!in_array($form, $stopwords)) {
                            $normal_text[$form] = $form;
                        }
                    }
                } else {
                    if ($source_unless_normalized && !in_array($source, $stopwords)) {
                        $normal_text[$source] = $source;
                    }
                }
            }
        }

        return $normal_text;*/
    }

    public function stopwords()
    {
        $stopwords = array(
            'ru' => array(
                'А',
                'Б',
                'В',
                'Г',
                'Д',
                'Е',
                'Ё',
                'Ж',
                'З',
                'И',
                'Й',
                'К',
                'Л',
                'М',
                'Н',
                'О',
                'П',
                'Р',
                'С',
                'Т',
                'У',
                'Ф',
                'Х',
                'Ц',
                'Ч',
                'Ш',
                'Щ',
                'Ъ',
                'Ы',
                'Ь',
                'Э',
                'Ю',
                'Я',
                'БЕЗ',
                'БОЛЕЕ',
                'БЫ',
                'БЫЛ',
                'БЫЛА',
                'БЫЛИ',
                'БЫЛО',
                'БЫТЬ',
                'В',
                'ВАМ',
                'ВАС',
                'ВЕСЬ',
                'ВО',
                'ВОТ',
                'ВСЕ',
                'ВСЕГО',
                'ВСЕХ',
                'ВЫ',
                'ГДЕ',
                'ДА',
                'ДАЖЕ',
                'ДЛЯ',
                'ДО',
                'ЕГО',
                'ЕЕ',
                'ЕСЛИ',
                'ЕСТЬ',
                'ЕЩЕ',
                'ЖЕ',
                'ЗА',
                'ЗДЕСЬ',
                'И',
                'ИЗ',
                'ИЛИ',
                'ИМ',
                'ИХ',
                'К',
                'КАК',
                'КО',
                'КОГДА',
                'КТО',
                'ЛИ',
                'ЛИБО',
                'МНЕ',
                'МОЖЕТ',
                'МЫ',
                'НА',
                'НАДО',
                'НАШ',
                'НЕ',
                'НЕГО',
                'НЕЕ',
                'НЕТ',
                'НИ',
                'НИХ',
                'НО',
                'НУ',
                'О',
                'ОБ',
                'ОДНАКО',
                'ОН',
                'ОНА',
                'ОНИ',
                'ОНО',
                'ОТ',
                'ОЧЕНЬ',
                'ПО',
                'ПОД',
                'ПРИ',
                'С',
                'СО',
                'ТАК',
                'ТАКЖЕ',
                'ТАКОЙ',
                'ТАМ',
                'ТЕ',
                'ТЕМ',
                'ТО',
                'ТОГО',
                'ТОЖЕ',
                'ТОЙ',
                'ТОЛЬКО',
                'ТОМ',
                'ТЫ',
                'У',
                'УЖЕ',
                'ХОТЯ',
                'ЧЕГО',
                'ЧЕЙ',
                'ЧЕМ',
                'ЧТО',
                'ЧТОБЫ',
                'ЧЬЕ',
                'ЧЬЯ',
                'ЭТА',
                'ЭТИ',
                'ЭТО',
                'ЯА',
                'БЕЗ',
                'БОЛЕЕ',
                'БЫ',
                'БЫЛ',
                'БЫЛА',
                'БЫЛИ',
                'БЫЛО',
                'БЫТЬ',
                'В',
                'ВАМ',
                'ВАС',
                'ВАШ',
                'ВЕДЬ',
                'ВЕСЬ',
                'ВО',
                'ВОТ',
                'ВСЕ',
                'ВСЕГО',
                'ВСЕХ',
                'ВЫ',
                'ГДЕ',
                'ДА',
                'ДАЖЕ',
                'ДЛИТЬ',
                'ДЛЯ',
                'ДО',
                'ЕГО',
                'ЕЕ',
                'ЕМУ',
                'ЕСЛИ',
                'ЕСТЬ',
                'ЕЩЕ',
                'ЕЙ',
                'ЖЕ',
                'ЗА',
                'ЗДЕСЬ',
                'И',
                'ИЗ',
                'ИЛИ',
                'ИМ',
                'ИМИ',
                'ИХ',
                'К',
                'КАК',
                'КО',
                'КОГДА',
                'КОТОРЫЙ',
                'КТО',
                'ЛИ',
                'ЛИБО',
                'МНЕ',
                'МОЖЕТ',
                'МОЖНО',
                'МЫ',
                'НА',
                'НАДО',
                'НАШ',
                'НЕ',
                'НЕГО',
                'НЕЕ',
                'НЕТ',
                'НИ',
                'НИХ',
                'НО',
                'НУ',
                'О',
                'ОБ',
                'ОДНАКО',
                'ОН',
                'ОНА',
                'ОНИ',
                'ОНО',
                'ОТ',
                'ОЧЕНЬ',
                'ПО',
                'ПОД',
                'ПОКА',
                'ПРИ',
                'РУБ',
                'С',
                'САМЫЙ',
                'СВОЕЙ',
                'СВОЕ',
                'СВОЁ',
                'СВОЙ',
                'СВОИМ',
                'СВОЮ',
                'СВОЯ',
                'СО',
                'ТАК',
                'ТАКЖЕ',
                'ТАКОЙ',
                'ТАМ',
                'ТЕ',
                'ТЕМ',
                'ТИП',
                'ТО',
                'ТОТ',
                'ТОГО',
                'ТОЖЕ',
                'ТОЙ',
                'ТОЛЬКО',
                'ТОМ',
                'ТЫ',
                'У',
                'УЖЕ',
                'ХОТЯ',
                'ЧЕГО',
                'ЧЕЙ',
                'ЧЕМ',
                'ЧТО',
                'ЧТОБЫ',
                'ЧЬЕ',
                'ЧЬЯ',
                'ЭТА',
                'ЭТОТ',
                'ЭТИ',
                'ЭТИМ',
                'ЭТО',
                'ЭТОТ',
                'Я',
                'ИЗА',
            ),
            'en' => array(
                "A",
                "ABLE",
                "ABOUT",
                "ACROSS",
                "AFTER",
                "ALL",
                "ALMOST",
                "ALSO",
                "AM",
                "AMONG",
                "AN",
                "AND",
                "ANY",
                "ARE",
                "AS",
                "AT",
                "BE",
                "BECAUSE",
                "BEEN",
                "BUT",
                "BY",
                "CAN",
                "CANNOT",
                "COULD",
                "DEAR",
                "DID",
                "DO",
                "DOES",
                "EITHER",
                "ELSE",
                "EVER",
                "EVERY",
                "FOR",
                "FROM",
                "GET",
                "GOT",
                "HAD",
                "HAS",
                "HAVE",
                "HE",
                "HER",
                "HERS",
                "HIM",
                "HIS",
                "HOW",
                "HOWEVER",
                "I",
                "IF",
                "IN",
                "INTO",
                "IS",
                "IT",
                "ITS",
                "JUST",
                "LEAST",
                "LET",
                "LIKE",
                "LIKELY",
                "MAY",
                "ME",
                "MIGHT",
                "MOST",
                "MUST",
                "MY",
                "NEITHER",
                "NO",
                "NOR",
                "NOT",
                "OF",
                "OFF",
                "OFTEN",
                "ON",
                "ONLY",
                "OR",
                "OTHER",
                "OUR",
                "OWN",
                "RATHER",
                "SAID",
                "SAY",
                "SAYS",
                "SHE",
                "SHOULD",
                "SINCE",
                "SO",
                "SOME",
                "THAN",
                "THAT",
                "THE",
                "THEIR",
                "THEM",
                "THEN",
                "THERE",
                "THESE",
                "THEY",
                "THIS",
                "TIS",
                "TO",
                "TOO",
                "TWAS",
                "US",
                "WANTS",
                "WAS",
                "WE",
                "WERE",
                "WHAT",
                "WHEN",
                "WHERE",
                "WHICH",
                "WHILE",
                "WHO",
                "WHOM",
                "WHY",
                "WILL",
                "WITH",
                "WOULD",
                "YET",
                "YOU",
                "YOUR",
                "AIN'T",
                "AREN'T",
                "CAN'T",
                "COULD'VE",
                "COULDN'T",
                "DIDN'T",
                "DOESN'T",
                "DON'T",
                "HASN'T",
                "HE'D",
                "HE'LL",
                "HE'S",
                "HOW'D",
                "HOW'LL",
                "HOW'S",
                "I'D",
                "I'LL",
                "I'M",
                "I'VE",
                "ISN'T",
                "IT'S",
                "MIGHT'VE",
                "MIGHTN'T",
                "MUST'VE",
                "MUSTN'T",
                "SHAN'T",
                "SHE'D",
                "SHE'LL",
                "SHE'S",
                "SHOULD'VE",
                "SHOULDN'T",
                "THAT'LL",
                "THAT'S",
                "THERE'S",
                "THEY'D",
                "THEY'LL",
                "THEY'RE",
                "THEY'VE",
                "WASN'T",
                "WE'D",
                "WE'LL",
                "WE'RE",
                "WEREN'T",
                "WHAT'D",
                "WHAT'S",
                "WHEN'D",
                "WHEN'LL",
                "WHEN'S",
                "WHERE'D",
                "WHERE'LL",
                "WHERE'S",
                "WHO'D",
                "WHO'LL",
                "WHO'S",
                "WHY'D",
                "WHY'LL",
                "WHY'S",
                "WON'T",
                "WOULD'VE",
                "WOULDN'T",
                "YOU'D",
                "YOU'LL",
                "YOU'RE",
                "YOU'VE"
            )
        );

        return $stopwords[$this->language];
    }

}
