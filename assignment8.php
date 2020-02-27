
<?php

class Calculator {
    private $x, $y;
    public function __construct($x, $y ) {
    $this->x = $x;
    $this->y = $y;
    }
        public function add() {
        return $this->x + $this->y;
        }
        public function sub() {
        return $this->x - $this->y;
        }
        public function mul() {
        return $this->x * $this->y;
        }
        public function div() {
        return $this->x / $this->y;
        }
}
$cal1 = new Calculator(24, 8); 
    echo $cal1-> add(); 
    echo "<br>";
    echo $cal1-> sub();
    echo "<br>";
    echo $cal1-> mul();
    echo "<br>";
    echo $cal1-> div();
    echo "<br><br>";

$cal2 = new Calculator(5, 8); 
    echo $cal2-> add(); 
    echo "<br>";
    echo $cal2-> sub();
    echo "<br>";
    echo $cal2-> mul();
    echo "<br>";
    echo $cal2-> div();
    echo "<br><br>";

$cal3 = new Calculator(100, 50); 
    echo $cal3-> add(); 
    echo "<br>";
    echo $cal3-> sub();
    echo "<br>";
    echo $cal3-> mul();
    echo "<br>";
    echo $cal3-> div();
    echo "<br><br>";

?>
