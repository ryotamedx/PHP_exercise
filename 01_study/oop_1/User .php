<?php

class User 
{
    public $name = 'Bob';
    public $age = 21;

    public function __construct()
    {
    }

    public function greet($to)
    {
        return 'こんにちは' . $to . 'さん<br>';
    }

    public function selfIntroduction()
    {
        return '私の名前は' . $this->name . 'です<br>';
                 '年齢は' . $this->age . 'です';
    }
}
