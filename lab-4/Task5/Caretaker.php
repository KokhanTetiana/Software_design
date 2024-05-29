<?php

namespace Task5;


class Caretaker
{
    private $mementos = [];

    public function saveMemento(Memento $memento)
    {
        $this->mementos[] = $memento;
    }

    public function getLastMemento()
    {
        if (count($this->mementos) > 0) {
            return array_pop($this->mementos);
        }
        return null;
    }
}

