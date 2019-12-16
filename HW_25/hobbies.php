<?php

abstract class hobbies{

    function writeHobby(){
        echo "I have a hobby ".strtolower(get_class($this))." \n";
        echo $this->additionalInfo() ."\n";
    }

    abstract protected function additionalInfo();

}