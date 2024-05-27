<?php
interface Renderer {
    public function renderCircle();
    public function renderSquare();
    public function renderTriangle();
}

class VectorRenderer implements Renderer {
    public function renderCircle() {
        echo "Drawing Circle as vector\n";
    }

    public function renderSquare() {
        echo "Drawing Square as vector\n";
    }

    public function renderTriangle() {
        echo "Drawing Triangle as vector\n";
    }
}

class RasterRenderer implements Renderer {
    public function renderCircle() {
        echo "Drawing Circle as pixels\n";
    }

    public function renderSquare() {
        echo "Drawing Square as pixels\n";
    }

    public function renderTriangle() {
        echo "Drawing Triangle as pixels\n";
    }
}