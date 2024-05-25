<?php

class Character
{
    private $height;
    private $build;
    private $hairColor;
    private $eyeColor;
    private $clothing;
    private $inventory;
    private $actions = [];

    public function setHeight($height) {
        $this->height = $height;
    }

    public function setBuild($build) {
        $this->build = $build;
    }

    public function setHairColor($hairColor) {
        $this->hairColor = $hairColor;
    }

    public function setEyeColor($eyeColor) {
        $this->eyeColor = $eyeColor;
    }

    public function setClothing($clothing) {
        $this->clothing = $clothing;
    }

    public function setInventory($inventory) {
        $this->inventory = $inventory;
    }

    public function setActions($actions) {
        if (is_array($actions)) {
            $this->actions = $actions;
        } else {
            $this->actions = [$actions];
        }
    }

    public function describe() {
        echo "Зріст: {$this->height}<br>";
        echo "Статура: {$this->build}<br>";
        echo "Колір волосся: {$this->hairColor}<br>";
        echo "Колір очей: {$this->eyeColor}<br>";
        echo "Одяг, який любить носити: {$this->clothing}<br>";
        echo "Знаряддя, яке використовує: {$this->inventory}<br>";
        echo "Сила: " . implode(", ", $this->actions) . "<br>";
    }
}