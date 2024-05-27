<?php


interface Hero {
    public function getDescription(): string;
}


class BaseHero implements Hero {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getDescription(): string {
        return $this->name;
    }

}


class Warrior extends BaseHero {
    public function __construct() {
        parent::__construct("Warrior");
    }
}

class Mage extends BaseHero {
    public function __construct() {
        parent::__construct("Mage");
    }
}

class Paladin extends BaseHero {
    public function __construct() {
        parent::__construct("Paladin");
    }
}