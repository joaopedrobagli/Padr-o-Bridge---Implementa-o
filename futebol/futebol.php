<?php


abstract class futebol{

    protected $time;

    function __construct($time){
        $this->time = $time;
    }
    abstract function contratacao();
}



?>