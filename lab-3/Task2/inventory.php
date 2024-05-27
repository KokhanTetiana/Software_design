<?php


interface Inventory extends Hero {
}


abstract class InventoryDecorator implements Inventory {
    protected $hero;

    public function __construct(Hero $hero) {
        $this->hero = $hero;
    }

    public function getDescription(): string {
        return $this->hero->getDescription();
    }
}


class Weapon extends InventoryDecorator {
    public function getDescription(): string {
        return parent::getDescription() . ", Weapon";
    }
}


class Armor extends InventoryDecorator {
    public function getDescription(): string {
        return parent::getDescription() . ", Armor";
    }
}


class Artifact extends InventoryDecorator {
    public function getDescription(): string {
        return parent::getDescription() . ", Artifact";
    }
}

