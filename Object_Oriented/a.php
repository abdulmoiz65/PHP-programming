<?php

class A{
    public $a = 10 ;
   
    function __construct() {
        echo "default constructor\n";
    }

    function __destruct(){
        echo "\ndestructor\n";
    }
}

$obj = new A();
echo $obj -> a;


?>