<?php


include __DIR__ . './person.php';

$person = new Person;

// echo $person->name = 'sayed';

// echo Person::$country = 'giza';
$message = $person->setAge('20');
return $message;  //when use the return it will stop the ex

$f = $person::FEMALE . '<br>';
$m = Person::MALE  . '<br>';
echo $f . ' ' . $m . '<br>';


