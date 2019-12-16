<?php

spl_autoload_register('autoloader');

function autoloader($className)
{
    include(getenv('PWD') . "/" .
        str_replace("\\", "/", strtolower($className)) . ".php");
}

$a = new drawing();
$b = new dancing();
$c = new beadwork();

$name = new person();

$things = [$a, $b, $c];

foreach ($things as $thing)
{
    $name->take_something($thing)->writeHobby();

}