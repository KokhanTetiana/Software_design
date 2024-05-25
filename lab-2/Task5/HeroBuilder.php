<?php

require_once 'Character.php';
require_once 'CharacterBuilder.php';


class HeroBuilder implements CharacterBuilder {
    private $character;
    private $actions = [];

    public function __construct() {
        $this->character = new Character();
    }

    public function setActions($actions) {
        $this->actions = (array) $actions; // Перетворюємо в масив, якщо це не масив
        return $this;
    }

    public function setHeight($height) {
        $this->character->setHeight($height);
        return $this;
    }

    public function setBuild($build) {
        $this->character->setBuild($build);
        return $this;
    }

    public function setHairColor($hairColor) {
        $this->character->setHairColor($hairColor);
        return $this;
    }

    public function setEyeColor($eyeColor) {
        $this->character->setEyeColor($eyeColor);
        return $this;
    }

    public function setClothing($clothing) {
        $this->character->setClothing($clothing);
        return $this;
    }

    public function setInventory($inventory) {
        $this->character->setInventory($inventory);
        return $this;
    }

    public function buildCharacter() {
        $this->character->setActions($this->actions);
        return $this->character;
    }
}
