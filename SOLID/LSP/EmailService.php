/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Lucas Oliveira 
* DATA: 13/06/2024
*/ 
<?php
// lsp_example.php

// Classe base que representa uma forma geométrica
class Shape {
    protected $width;
    protected $height;

    public function setWidth($width) {
        $this->width = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

// Classe derivada que representa um retângulo
class Rectangle extends Shape {
    // Nada mais precisa ser alterado aqui
}

// Classe derivada que representa um quadrado
class Square extends Shape {
    public function setWidth($width) {
        $this->width = $width;
        $this->height = $width;
    }

    public function setHeight($height) {
        $this->width = $height;
        $this->height = $height;
    }
}

// Função para calcular a área de qualquer forma
function calculateArea(Shape $shape) {
    return $shape->area();
}

// Utilização
$rectangle = new Rectangle();
$rectangle->setWidth(5);
$rectangle->setHeight(10);
echo "Area of rectangle: " . calculateArea($rectangle) . "\n";

$square = new Square();
$square->setWidth(5);
echo "Area of square: " . calculateArea($square) . "\n";
?>
