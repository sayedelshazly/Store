<?php


include __DIR__ . './person.php';

$person = new Person;

echo $person->name = 'sayed';

echo Person::$country = 'giza';

$message = $person->setAge('20');
return $message;

$const = $person::FEMALE;
$const = Person::FEMALE;
echo $const;
