<?php

namespace B;
class person{
    const MALE = 'm';
    const FEMALE = 'f';

    public $name;
    protected $gender;
    private $age;

    public static $country;

    public function __construct(){
        echo __CLASS__;
    }
    public function setAge($age){
        echo 'iam a age method = ' . $age  ;
    }
    public static function country($country){
        self::$country = $country;
        self::FEMALE;
        self::MALE;
    }
}