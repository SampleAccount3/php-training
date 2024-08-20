<?php
    class varClass{
        public static function passByReference(&$reference){
            $reference +=2; // 3
        }
        public static function passByValue($value){
            return $value += 4; // 5
        }
    }
?>