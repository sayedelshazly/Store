<?php


include __DIR__ . './person.php';

$person = new Person;

echo $person->name = 'sayed';

echo Person::set = 'giza';