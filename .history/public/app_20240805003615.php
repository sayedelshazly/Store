<?php


include __DIR__ . './person.php';

$person = new Person;

// echo $person->name = 'sayed';

// echo Person::$country = 'giza';

$f = $person::FEMALE;
$m = Person::MALE;
echo '<br>';
echo $f . ' ' . $m;
$message = $person->setAge('20');
return $message;

