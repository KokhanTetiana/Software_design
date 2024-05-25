<?php

class Virus
{
    private $name;
    private $species;
    private $children = [];

    public function __construct($name, $species) {
        $this->name = $name;
        $this->species = $species;
    }


    public function addChild(Virus $child) {
        $this->children[] = $child;
    }


    public function clone() {
        return clone $this;
    }

    public function getName() {
        return $this->name;
    }

    public function getSpecies() {
        return $this->species;
    }

    public function getChildren() {
        return $this->children;
    }
}