<?php

// Use the array() construct or [] syntax to create a new array.
// For the indexed array, the first index begins with zero.
// To access an array element, use an index in the square bracket $array_name[index].
// Use the count() function to get the number of elements in an array.
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
        public static function removingArrayElement(){
            unset(self::$arrSample[3]); // 4
        }
        public static function countingTheArrayElement(){
           return count(self::$arrSample);
        }

        
    }
    class CollectionAssocArray{
        private static $assoArraySample = array();
        private static $assocArrayWithElements = [
            'Japan' => 'Tokyo',
            'France' => 'Paris',
            'Germany' => 'Berlin',
            'United Kingdom' => 'London',
            'United States' => 'Washington D.C.'
        ];

        public static function addingElementsInAssocArray(){
            self::$assoArraySample['Name'] = "Melares";
            self::$assoArraySample['Job'] = "Programmer";
            self::$assoArraySample['Age'] = "21";
            self::$assoArraySample['Sample'] = "SampleTest";

            print_r(self::$assoArraySample);
        }
        public static function accessingAssocArrayElement($key){
            echo self::$assoArraySample[$key]; 
        }
        public static function forEachAssocArray(){
            // iterating the AssocArray
            foreach(self::$assoArraySample as $key => $value){
                echo "$key  $value" . '<br>';
            }
        }
        public static function forEachAssocArray2(){
            // iterating the AssocArray
            foreach(self::$assocArrayWithElements as $key => $value){
                echo "$key  $value" . '<br>';
            }
        }
    }

    class ArrayMethods{
        private static $sampleArray = ["A","B","C","D","E","F","G","H"];
        public static function printArray(){
            print_r(self::$sampleArray);
        }
    }


    
?>