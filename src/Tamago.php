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
        $this->fed += 3;
    }

    function getAttention()
    {
        return $this->attention;
    }

    function setattention()
    {
        $this->attention += 3;
    }

    function getRest()
    {
        return $this->rest;
    }

    function setRest()
    {
        $this->rest += 3;
    }

    function passTime()
    {
        $this->fed += -1;
        $this->attention += -1;
        $this->rest += -1;
    }

    static function getAll()
    {
        return $_SESSION['tamagotchi'];
    }

    function save()
    {
      array_push($_SESSION['tamagotchi'], $this);
    }



}

?>
