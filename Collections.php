<?php
    class Test1{
        private static $sample = "Hello";

        public static function testFunction(){
            return self::$sample;
        }
    } 

    class Collections{
        private static $arrSample = array(1,2,3,4,5);
        public static function normalArray(){
            // Empty Array
            $emptyArray = array();
            // Array with int Elements
            // Iterates and prints the Array
            foreach(self::$arrSample as $x){
                echo "$x " ;
            }// 12345

            // print_r(self::$arrSample);
        }

        public static function accessingArrayElements($index){
         
            return self::$arrSample[$index];//2
        }
        public static function addingNewArrayElements(){
            self::$arrSample[] = 6;
        }

        public static function updatingArrayElements(){
            self::$arrSample[0] = 9;
        }


    }
    

?>