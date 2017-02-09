<?php

class Tamago
{
    private $name;
    private $fed;
    private $attention;
    private $rest;

    function __construct($name)
    {
        $this->name = $name;
        $this->fed = 5;
        $this->attention = 5;
        $this->rest = 5;
    }

    function getName()
    {
        return $this->name;
    }

    function getFed()
    {
        return $this->fed;
    }

    function setFed()
    {
        $this->fed = $fed + 3;
    }

    function setattention()
    {
        $this->attention = $attention + 3;
    }

    function setRest()
    {
        $this->rest = $rest + 3;
    }

    function passTime()
    {
        $this->fed = $fed - 1;
        $this->attention = $attention - 1;
        $this->rest = $rest - 1;
    }




}

?>
