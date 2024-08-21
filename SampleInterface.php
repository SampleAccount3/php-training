<?php
    class Addition implements ComputationCompute{

        public function compute(float $x, float $y): float{
            return $x +$y;
        }
    }
    class Subtraction implements ComputationCompute{

        public function compute(float $x, float $y): float{
            return $x - $y;
        }
    }
    class Multiplication implements ComputationCompute{

        public function compute(float $x, float $y): float{
            return $x * $y;
        }
    }
    class Division implements ComputationCompute{

        public function compute(float $x, float $y): float{
            return $x / $y;
        }
    }
?>