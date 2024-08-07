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
        $this->age = 20;
        return $this;
    }
}