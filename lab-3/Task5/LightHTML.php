<?php

abstract class LightNode
{
    abstract public function getOuterHTML();

    abstract public function getInnerHTML();
}

class LightTextNode extends LightNode
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getOuterHTML()
    {
        return $this->text;
    }

    public function getInnerHTML()
    {
        return $this->text;
    }
}


class LightElementNode extends LightNode
{
    private $tag;
    private $displayType;
    private $closingType;
    private $cssClasses = array();
    private $childNodes = array();

    public function __construct($tag, $displayType, $closingType, $cssClasses, $childNodes)
    {
        $this->tag = $tag;
        $this->displayType = $displayType;
        $this->closingType = $closingType;
        $this->cssClasses = $cssClasses;
        $this->childNodes = $childNodes;
    }

    public function addChild($childNode)
    {
        $this->childNodes[] = $childNode;
    }

    public function getOuterHTML()
    {
        $html = "<{$this->tag}";

        if (!empty($this->cssClasses)) {
            $html .= ' class="' . implode(' ', $this->cssClasses) . '"';
        }

        if ($this->closingType === 'single') {
            $html .= '/>';
        } else {
            $html .= '>';
            foreach ($this->childNodes as $child) {
                $html .= $child->getOuterHTML();
            }
            $html .= "</{$this->tag}>";
        }

        return $html;
    }

    public function getInnerHTML()
    {
        $html = '';
        foreach ($this->childNodes as $child) {
            $html .= $child->getOuterHTML();
        }
        return $html;
    }
}


