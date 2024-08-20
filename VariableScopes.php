<?php
    $message = "Hello";
    static $counter = 0;
    static $counter2 = 0;
    function say(){
        // $message = 'Hi';
        global $message;
        // if the the $message is not global then it will print "Hi"
	    echo $message;
    }
    class SampleClass{
        public static function staticFunction(){
            return "Hello World";
        }
    }

    // static variable is acessable to all function, and it can retain its value 
    class StaticVariables{
        public static function getCounter(){
            static $counter;
            return $counter++;
        }
        public static function getCounter2(){
            static $counter2;
            return $counter2 += 2;
        }
    }

    class FunctionParameters{
        // Function parameters
        public static function sum($items){
            // function variables 
            $total = 0;
            foreach($items as $item){
                $total += $item;
            }
            return $total;
        }
    }
  
?>