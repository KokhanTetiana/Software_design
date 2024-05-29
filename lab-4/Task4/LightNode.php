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

class LightImageNode extends LightNode
{
    private $src;
    private $strategy;
    private $altText;

    public function __construct($href, ImageLoadingStrategy $strategy, $altText = "")
    {
        $this->strategy = $strategy;
        $this->src = $this->strategy->getImageSrc($href);
        $this->altText = $altText;
    }

    public function getOuterHTML()
    {
        return '<img src="' . $this->src . '" alt="' . $this->altText . '"/>';
    }

    public function getInnerHTML()
    {
        return '';
    }
}
