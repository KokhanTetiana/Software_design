<?php

namespace Task5;


class TextDocument
{
    private $content;

    public function __construct($content = "")
    {
        $this->content = $content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function createMemento()
    {
        return new Memento($this->content);
    }

    public function restoreFromMemento(Memento $memento)
    {
        $this->content = $memento->getContent();
    }
}

