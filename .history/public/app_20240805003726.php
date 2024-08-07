<?php


include __DIR__ . './person.php';

$person = new Person;

// echo $person->name = 'sayed';

// echo Person::$country = 'giza';

$f = $person::FEMALE . '<br>';
$m = Person::MALE  . '<br>';
echo $f . ' ' . $m . '<br>';

$message = $person->setAge('20');
return $message;

