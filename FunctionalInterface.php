<?php
    interface functionalInterfaceSample{
        function start();
    }
    interface functionalInterfaceComputation{
        function compute($x,$y);
    }

    class Addition implements functionalInterfaceComputation{
        public function compute($x,$y)
        {
            return $x + $y;
        }
    }
    class Subtraction implements functionalInterfaceComputation{
        public function compute($x,$y)
        {
            return $x - $y;
        }
    }

?>