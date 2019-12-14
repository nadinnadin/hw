<?php

abstract class Hobbies{

    function writeHobby(){
        echo "i have a hobby ".strtolower(get_class($this))." \n";
        echo $this->additionalInfo() ."\n";
    }

    abstract protected function additionalInfo();

}


class Drawing extends Hobbies {
    protected function additionalInfo(){
        return "Hope I have talent.";
    }
}

class Dancing extends Hobbies{
    protected function additionalInfo(){
        return "I like to feel the rhythm when I dance.";
    }
}

class Beadwork extends Hobbies{
    protected function additionalInfo(){
        return "I like to do something with my own hands.";
    }
}




class Person {


    private $thing;

    function take_something($thing) {
        if(!is_object($thing)) return false;
        $this->thing = $thing;
        return $this;
    }

    function writeHobby(){
        if(method_exists($this->thing, 'writeHobby')
            && is_subclass_of($this->thing, "Hobbies"))
        {
            $this->thing->writeHobby();
        } else echo "Nothing to use".PHP_EOL;
    }

}

$a = new Drawing();
$b = new Dancing();
$c = new Beadwork();

$name = new Person();

$things = [$a, $b, $c];

foreach ($things as $thing)
{
    $name->take_something($thing)->writeHobby();

}