<?php

require_once __DIR__.'/User.php';
require_once __DIR__.'/Person.php';

$bob = new User('Bob', 21);
$tom = new User('Tom', 22);
$ken = new Person('Ken', 23);

echo $bob->selfIntroduction();
echo $bob->greet('ためだ');
echo $tom->selfIntroduction();
echo $tom->greet('ためだ');
echo $ken->selfIntroduction();
echo $ken->greet('ためだ');