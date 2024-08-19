<?php

class person {
    protected string $name;
    protected string $address;
    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }
    public function setName() {
        $this->name = $name;
    }
    public function getName():string {
        return $this->name;
    }
    public function setAddress() {
        $this->address = $address;
    }
    public function getAddress():string {
        return $this->address;
    }

    public function __toString() {
        return "Person [name=$this->name, address=$this->address]";
    }
}

class student extends person {
    protected string $program;
    protected int $year;
    protected float $fee;
    public function __construct($name , $address, $program, $year, $fee) {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }
    public function setProgram() {
        $this->program = $program;
    }
    public function getProgram():string {
        return $this->program;
    }
    public function setYear() {
        $this->year = $year;
    }
    public function getYear():int {
        return $this->year;
    }
    public function setFee() {
        $this->fee = $fee;
    }
    public function getFee():float {
        return $this->fee;
    }
    public function __toString() {
        return "Student [Person [name=$this->name, address=$this->address], program=$this->program, year=$this->year, fee=$this->fee]";
    }
}

class staff extends person {
    protected string $school;
    protected float $pay;
    public function __construct($name, $address, $school, $pay) {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }
    public function setSchool() {
        $this->school = $school;
    }
    public function getSchool():string {
        return $this->school;
    }
    public function setPay() {
        $this->pay = $pay;
    }
    public function getPay():float {
        return $this->pay;
    }
    public function __toString() {
        return "Staff [Person [name=$this->name, address=$this->address], school=$this->school, pay=$this->pay]";
    }
}

?>

<?php

class Shape {
    protected string $color;

    public function __construct(string $color) {
        $this->color = $color;
    }
    public function getColor(): string{
        return $this->color;
    }

    public function setColor(string $color); void{
        $this->color = $color;
    }

    public function getArea(): float;
    public function getPerimeter(): float;
    public function __toString(): string;
}

class Circle extends Shape {
    protected float $radius;
    public function __construct(string $color, float $radius) {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }
    public function __toString(): string {
        return "Circle [color=$this->color, radius=$this->radius, area=". $this->getArea(). ", perimeter=". $this->getPerimeter(). "]";
    }
}

class Rectangle extends Shape {
    protected float $length;
    protected float $width;
    public function __construct(string $color, float $length, float $width) {
        parent::__construct($color);
        $this->length = $length;
        $this->width = $width;
    }
    public function setLength(float $length): void {
        $this->length = $length;
    }
    public function getLength(): float {
        return $this->length;
    }
    public function setWidth(float $width): void {
        $this->width = $width;
    }
    public function getWidth(): float {
        return $this->width;
    }
    public function getArea(): float {
        return $this->length * $this->width;
    }
    public function getPerimeter(): float {
        return 2 * ($this->length + $this->width);
    }
    public function __toString(): string {
        return "Rectangle [color=$this->color, length=$this->length, width=$this->width, area=". $this->getArea(). ", perimeter=". $this->getPerimeter(). "]";
    }
}

class Square extends Rectangle {
    protected float $side;
    public function __construct(string $color, float $side) {
        parent::__construct($color);
        $this->side = $side;
    }
    public function setSide(float $side): void {
        $this->side = $side;
    }
    public function getSide(): float {
        return $this->side;
    }
    public function getArea(): float {
        return pow($this->side, 2);
    }
    public function getPerimeter(): float {
        return 4 * $this->side;
    }
    public function __toString(): string {
        return "Square [color=$this->color, side=$this->side, area=". $this->getArea(). ", perimeter=". $this->getPerimeter(). "]";
    }
}

?>

<?php

abstract class Shape {
    protected string $color;
    protected bool $filled;

    public function __construct($color, $filled) {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled($filled) {
        $this->filled = $filled;
    }

    abstract public function getArea():float;
    abstract public function getPerimeter():float;

    public function __toString(): string {
        return "Shape[color=$this->color, filled=$this->filled]";
    }
}

class Circle extends Shape {
    protected float $radius = 1.0;

    public function __construct($radius = 1.0, $color = 'red', $filled = true) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius() : float {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() : float {
        return pi() * $this->radius * $this->radius;
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }

    public function __toString(): string {
        return "Circle[" . parent::__toString() . ", radius=$this->radius]";
    }
}

class Rectangle extends Shape {
    protected float $width = 1.0;
    protected float $height = 1.0;
    
    public function __construct($width = 1.0, $height = 1.0, $color ='red', $filled = true) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->height = $height;
    }
    
    public function getWidth() : float {
        return $this->width;
    }
    
    public function setWidth($width) {
        $this->width = $width;
    }
    
    public function getHeight() : float {
        return $this->height;
    }
    
    public function setHeight($height) {
        $this->height = $height;
    }
    
    public function getArea() : float {
        return $this->width * $this->height;
    }
    
    public function getPerimeter(): float {
        return 2 * ($this->width + $this->height);
    }
    
    public function __toString(): string {
        return "Rectangle[". parent::__toString(). ", width=$this->width, height=$this->height]";
    }   
}

class Square extends Rectangle {
    protected float $side = 1.0;
    
    public function __construct($side = 1.0, $color ='red', $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }
    
    public function getSide() : float {
        return $this->side;
    }
    
    public function setSide($side) {
        $this->side = $side;
    }
    
    public function getArea() : float {
        return $this->side * $this->side;
    }
    
    public function getPerimeter(): float {
        return 4 * $this->side;
    }
    
    public function __toString(): string {
        return "Square[". parent::__toString(). ", side=$this->side]";
    }
}

?>
