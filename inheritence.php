<?php 

class BasicCalculator { //parent class
    public function sum(){
        echo "sum";
    }
}

class ScientificCalculator extends BasicCalculator{ //child class
    public function log(){
        echo "log";

    }
}

$calculator = new ScientificCalculator;

$calculator-> sum();



?>