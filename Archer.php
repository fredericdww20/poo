<?php

class Archer extends Character
{
    public $power;

    public function __construct($name, $cri_instance, $pouv_instance)
    {
        parent:: __construct($name, $cri_instance,);
        $this->power = $pouv_instance;
    }

    public function rangeAttak($target)
    {
        $target->hp -= $this->power;
    }
}