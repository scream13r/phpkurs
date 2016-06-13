<?php

class Model_Portfolio extends Model {

    public function get_data()
    {
        return array(
            array(
                "year" => "2014",
                "site" => "http://localhost/",
                "name" => "Мой первый сайт",
                "description" => "Сайт который я сделал впервые"
            ),
            array(
                "year" => "2015",
                "site" => "http://localhost1/",
                "name" => "Мой второй сайт",
                "description" => "Сайт который я сделал второй раз"
            ),
            array(
                "year" => "2016",
                "site" => "http://localhost2/",
                "name" => "Мой третий сайт",
                "description" => "Сайт который я сделал третий раз"
            )
        );
    }

}