<?php

abstract class Figure{
    private $color = 'black';
    private $outline_thickness = 1.0;

    public function get_color(){
        return $this->color;
    }

    public function set_color($new_color){
        $this->color = $new_color;
    }

    public function get_outline_thickness(){
        return $this->outline_thickness;
    }

    public function set_outline_thickness($new_thickness){
        if (is_numeric($new_thickness)){
            $this->outline_thickness = floatval($new_thickness);
        }
    }
}
abstract class Polygon extends Figure
{
    protected $number_of_sides = 0;
    public function set_number_of_sides($number_of_sides)
    {
        if (is_int($number_of_sides)) {
            $this->number_of_sides = $number_of_sides;
        }
    }
    public function get_number_of_sides()
    {
        return $this->number_of_sides;
    }
    public abstract function get_perimeter();
    public abstract function get_square();
}

class Triangle extends Polygon
{
    protected $a;
    protected $b;
    protected $c;
    function __construct()
    {
        $this->number_of_sides = 3;
        $this->a = 3;
        $this->b = 4;
        $this->c = 5;
    }
    public function get_perimeter()
    {
        return $this->a + $this->b + $this->c;
    }
    public function get_square()
    {
        $p = $this->get_perimeter() / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }
    public function get_a()
    {
        return $this->a;
    }
    public function set_a($new_val)
    {
        if (is_numeric($new_val)) {
            $this->a = $new_val;
        }
    }
    public function get_b()
    {
        return $this->b;
    }
    public function set_b($new_val)
    {
        if (is_numeric($new_val)) {
            $this->b = $new_val;
        }
    }
    public function get_c()
    {
        return $this->c;
    }
    public function set_c($new_val)
    {
        if (is_numeric($new_val)) {
            $this->c = $new_val;
        }
    }
}
class Circle extends Figure
{
    private $radius = 0;
    const PI = 3.1416;
    public function get_radius()
    {
        return $this->radius;
    }
    public function set_radius($new_val)
    {
        if (is_numeric($new_val)) {
            $this->radius = $new_val;
        }
    }
    public function get_diameter()
    {
        return 2 * $this->radius;
    }
    public function get_square()
    {
        return self::PI * $this->radius * $this->radius;
    }
    public function get_circumference()
    {
        return 2 * self::PI * $this->radius;
    }
}
class Rectangle extends Polygon
{
    protected  $a;
    protected $b;
    function __construct()
    {
        $this->number_of_sides = 4;
        $this->a = 5;
        $this->b = 2;
    }
    public function get_perimeter()
    {
        return 2*($this->a + $this->b);
    }
    public function get_square()
    {
        return  ($this->a) * ($this->b);
    }
    public function get_a()
    {
        return $this->a;
    }
    public function set_a($new_val)
    {
        if (is_numeric($new_val)) {
            $this->a = $new_val;
        }
    }
    private function get_b()
    {
        return $this->b;
    }
    private function set_b($new_val)
    {
        if (is_numeric($new_val)) {
            $this->b = $new_val;
        }
    }

}
class Square extends Rectangle
{
    protected $a;

    function __construct()
    {
        $this->number_of_sides =4;
        $this->a = 5;
        parent::__construct();

    }
    public function get_perimeter()
    {
        return 4*($this->a);
    }
    public function get_square()
    {
        return  pow($this->a,2);
    }

}
