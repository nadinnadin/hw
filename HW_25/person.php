<?php

class person
{
    private $thing;

    function take_something($thing) {
        if(!is_object($thing)) return false;
        $this->thing = $thing;
        return $this;
    }

    function writeHobby(){
        if(method_exists($this->thing, 'writeHobby')
            && is_subclass_of($this->thing, "hobbies"))
        {
            $this->thing->writeHobby();
        } else echo "Nothing to use".PHP_EOL;
    }

}