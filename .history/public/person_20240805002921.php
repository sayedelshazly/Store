<?php

class person{
    const MALE = 'm';
    const FEMALE = 'f';

    public $name;
    protected $gender;
    private $age;

    public static $country;

    public function __construct(){

    }
    public function setAge($age){
        echo ' '
    }
    public static function country($country){
        self::$country = $country;
        self::FEMALE;
        self::MALE;
    }
}