<?php
    include_once("Interfaces.php");

    class MathComputation {

        // @var float
        private $x;
        // @var float
        private $y;

        // Constructor with type hints for float parameters
        function __construct(float $x, float $y) {
            $this->x = $x;
            $this->y = $y;
        }

        public function startComputation(string $operand ) :float{
            switch($operand){
                case "+":
                    return $this->x + $this->y;
                    break;
                case "-":
                    return $this->x - $this->y;
                    break;
                case "*":
                    return $this->x * $this->y;
                    break;
                case "/":
                    return $this->x / $this->y;
                    break;
                default:
                    return 0;
            }

        }

        // the functionalities depends on the Objects/Class
        public function interfaceCompute(Computation $computation){
            echo $computation->compute(5,3);
            echo $computation->Hello("Melares");
        }
    }

    class SampleInterface1 implements Computation{

        public function compute(float $x,float $y): float{
            return $x + $y;
        }
        public function Hello(string $x):string{
            return "Hello Mrs. $x";
        }

    } 

    class SampleInterface2 implements Computation{

        public function compute(float $x,float $y): float{
            return $x - $y;
        }
        public function Hello(string $x):string{
            return "Hello Mr. $x";
        }

    } 
?>