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
    private $eventManager;

    public function __construct($tag, $displayType, $closingType, $cssClasses = array(), $childNodes = array())
    {
        $this->tag = $tag;
        $this->displayType = $displayType;
        $this->closingType = $closingType;
        $this->cssClasses = $cssClasses;
        $this->childNodes = $childNodes;
        $this->eventManager = new EventManager();
    }

    public function addChild($childNode)
    {
        $this->childNodes[] = $childNode;
    }

    public function addEventListener($event, $handler)
    {
        $this->eventManager->subscribe($event, $handler);
    }

    public function triggerEvent($event, $data = null)
    {
        $this->eventManager->notify($event, $data);
    }

    public function getOuterHTML()
    {
        $html = "<{$this->tag}";

        if (!empty($this->cssClasses)) {
            $html .= ' class="' . implode(' ', $this->cssClasses) . '"';
        }

        // Для кліків та наведень додамо атрибути
        if ($this->eventManager->listeners) {
            $html .= " onclick=\"handleClick()\"";
            $html .= " onmouseover=\"handleMouseOver()\"";
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
