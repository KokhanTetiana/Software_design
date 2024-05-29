<?php

namespace Task5;


class TextEditor
{
    private $document;
    private $caretaker;

    public function __construct()
    {
        $this->document = new TextDocument();
        $this->caretaker = new Caretaker();
    }

    public function setText($content)
    {
        $this->caretaker->saveMemento($this->document->createMemento());
        $this->document->setContent($content);
    }

    public function undo()
    {
        $memento = $this->caretaker->getLastMemento();
        if ($memento !== null) {
            $this->document->restoreFromMemento($memento);
        }
    }

    public function getText()
    {
        return $this->document->getContent();
    }
}

