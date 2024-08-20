 <?php
  $name = "Melares";
    class ClassName{
        // !! php 8.0 has a Constructor promotion that can use the constructor parameter as an property 
        // php has an private, public, and protected access modifier
        private $propsName;
        private $propsAge;

        // in php need to to name your method __construct to create a class Constructor
        // !! when you created an instance of a class it automatically calls the constructor Method
        function __construct($propsName,$propsAge)
        {
            $this->propsName = $propsName;
            $this->propsAge = $propsAge;
        }

        function HelloWorld(){
            // $this keyword references the current object of the class
            echo '<br>'.'Hello '. $this->propsName . " you are ". $this->propsAge.'yrs old' ;
        }
        // getter setter
        function getPropsName(){
            return $this->propsName;
        }
        function setPropsName($propsName){
            $this->propsName = $propsName;
        }
        function getPropsAge(){
            return $this->propsAge;
        }
        function setPropsAge($propsAge){
            $this->propsAge = $propsAge;
        }

        function __destruct()
        {
            echo 'remove all';
        }
    }
 ?>