<?php
namespace Components;

class Component {
    public $name;
    function __construct($name)
    {
        return $this->name = $name;
    }
}