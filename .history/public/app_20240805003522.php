<?php


include __DIR__ . './person.php';

$person = new Person;

echo $person->name = 'sayed';

echo Person::$country = 'giza';

// $message = $person->setAge('20');
// return $message;

$f = $person::FEMALE;
$m = Person::MALE;

echo $f . ' ' . $m;
