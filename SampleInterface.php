<?php
    class Addition implements Computation{

        public function compute(float $x, float $y): float{
            return $x +$y;
        }
    }
    class Subtraction implements Computation{

        public function compute(float $x, float $y): float{
            return $x - $y;
        }
    }
    class Multiplication implements Computation{

        public function compute(float $x, float $y): float{
            return $x * $y;
        }
    }
    class Division implements Computation{

        public function compute(float $x, float $y): float{
            return $x / $y;
        }
    }
?>