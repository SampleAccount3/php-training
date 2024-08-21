<?php
    interface Computation{
        public function compute(float $x,float $y): float;
        public function Hello(string $x):string;
    }
    interface ComputationCompute{
        public function compute(float $x,float $y): float;
    }
?>