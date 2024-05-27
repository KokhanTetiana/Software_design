<?php

abstract class Shape {
    protected $renderer;

    public function __construct(Renderer $renderer) {
        $this->renderer = $renderer;
    }

    abstract public function draw();
}


class Circle extends Shape {
    public function draw() {
        $this->renderer->renderCircle();
    }
}

class Square extends Shape {
    public function draw() {
        $this->renderer->renderSquare();
    }
}

class Triangle extends Shape
{
    public function draw()
    {
        $this->renderer->renderTriangle();
    }
}