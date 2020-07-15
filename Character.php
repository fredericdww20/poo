<?php

class Character 
{
    public $name;
    public $vie = 100;
    private $warcry; 

    public function __construct($name, $warcry)
    {
        $this->name = $name;
        $this->warcry = $warcry;
    }

    public function getWarcry()
    {
        return $this->warcry;
    }
}