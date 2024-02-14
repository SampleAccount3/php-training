 <?php
  $name = "Melares";
    class ClassName{
        // php has an private, public, and protected access modifier
        private $propsName;
        private $propsAge;


        // the 
        function HelloWorld(){
            // $this keyword references the current object of the class
            echo 'Hello '. $this->propsName . " ". $this->propsAge;
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
    }
 ?>