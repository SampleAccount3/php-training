<?php
include_once("FunctionalInterface.php");
    class classUtilities{
        function ReturnValues($val1,$val2){
            $functionalInterface = new Class ($val1 , $val2) implements functionalInterfaceSample{
                private $val1;
                private $val2;
                function __construct($val1,$val2)
                {
                    $this->val1 = $val1;
                    $this->val2 = $val2;
                }

                public function start(){
                    return $this->val1 + $this->val2;
                }
            };

            return $functionalInterface->start();
        }
    }

    class Computation{
        private $operation;

        public function __construct(functionalInterfaceComputation $operation)
        {
            $this->operation = $operation;
        }

        public function execute(float $x, float $y): float{
            return $this->operation->compute($x, $y);
        }
    }
?>