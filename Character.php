<?php

class Character
{
    public $name;

    public $hp = 100;

    public $warcry;

    public function __construct($name, $cri_instance)
    {
        $this->name = $name;
        $this->warcry = $cri_instance;
    }
}