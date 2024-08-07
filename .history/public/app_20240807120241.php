<?php

namespace A\Person;
namespace B\Person;

include __DIR__ . '/Aperson.php';
include __DIR__ . '/B/person.php';

$person = new A\Person;
$person2 = new B\Person;

echo $person->name = 'sayed';
echo \B\Person::$country = 'giza';

$message = $person->setAge('20');
return $message;  //when use the return it will stop the execution and print only $message
                // when we use echo the execution dose not stop and it print $f and $m

$f = $person::FEMALE . '<br>';
$m = Person::MALE  . '<br>';
echo $f . ' ' . $m . '<br>';


