<?php
interface CharacterBuilder {
    public function setActions($actions);
    public function setHeight($height);
    public function setBuild($build);
    public function setHairColor($hairColor);
    public function setEyeColor($eyeColor);
    public function setClothing($clothing);
    public function setInventory($inventory);
    public function buildCharacter();
}
