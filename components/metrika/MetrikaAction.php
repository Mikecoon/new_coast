<?php



namespace app\components\metrika;
use yii\base\Action;

class MetrikaAction extends Action {


    public $token;
    public $counter;
    private $dateFrom;
    public $dateFormat = "d.m.Y";
    private $dateTo;
    private $url = "https://api-metrika.yandex.ru/stat/v1/data/bytime?";

    public function init() {
        $this->dateFrom = date("Y-m-d", strtotime("-1 week"));
        $this->dateTo = date("Y-m-d");
    }

    public function run($dateFrom = null, $dateTo = null) {

        // Параметры, с которыми будет обращаться к Яндексу
        $params = [
            "oauth_token" => $this->token,
            "ids" => $this->counter,
            'metrics' => "ym:s:pageviews",
            "date1" => $dateFrom? $this->dateToYandexFormat($dateFrom) : $this->dateFrom,
            "date2" => $dateTo? $this->dateToYandexFormat($dateTo) : $this->dateTo,
            "group" => "day"
        ];


        $this->dateFrom = $dateFrom? $this->dateToYandexFormat($dateFrom) : $this->dateFrom;
        $this->dateTo = $dateTo? $this->dateToYandexFormat($dateTo) : $this->dateTo;



        $data = $this->request($params);

        if (!empty($data->errors)) {
            return json_encode($data->errors[0], JSON_UNESCAPED_UNICODE);
        }

        $visits = $this->parseVisits($data);

        return json_encode($visits);

    }

    // Осуществляет запрос к API Yandex
    private function request($params) {

        $curl = curl_init($this->url.http_build_query($params));
        curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);

        $data = json_decode(curl_exec($curl));
        curl_close($curl);
        return $data;
    }

    // Парсит данные из того, что отдает Yandex
    private function parseVisits($data) {
        $metrics = $data->data[0]->metrics[0];
        $dateStart = date("d.m.Y", strtotime($this->dateFrom));

        $visits = [];

        foreach ($metrics as $item) {
            $visits[$dateStart] = $item;
            $dateStart = date("d.m.Y", strtotime("+1 day", strtotime($dateStart)));
        }
        return $visits;
    }

    private function dateToYandexFormat($date) {
        $date = \DateTime::createFromFormat('d.m.Y', $date);
        return $date->format("Y-m-d");
    }


}