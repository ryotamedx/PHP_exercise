<?php

require_once __DIR__.'/User.php';

$bob = new User('Bob', 21);
$tom = new User('Tom', 22);
$ken = new User('Ken', 23);

echo $bob->selfIntroduction();
echo $tom->selfIntroduction();
echo $ken->selfIntroduction();