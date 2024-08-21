<?php
    abstract class Worker{
        protected $name;
        protected $age;
        protected $job;

        abstract function showInfo():string;


        public function __construct(string $name,string $age,string $job)
        {
            $this->name = $name;
            $this->age = $age;
            $this->job = $job;
        }

        public function getName():string{
            return $this-> name;
        }
        public function getAge():string{
            return $this-> age;
        }
        public function getJob():string{
            return $this-> job;
        }


    }

    class Wilcon extends Worker{
       
        public function showInfo():string{
            return "Name: " . parent::getName() . "<br>".
            "Age: " . parent::getAge() . "<br>".
            "Job: " . parent::getJob();
        }

    }
    class HomeDepot extends Worker{
       
        public function showInfo():string{
            return "Name: " . parent::getName() . "<br>".
            "Age: " . parent::getAge() . "<br>".
            "Job: " . parent::getJob();
        }

    }
    class TimeDepot extends Worker{
       
        public function showInfo():string{
            return "Name: " . parent::getName() . "<br>". 
            "Age: " . parent::getAge() . "<br>".
            "Job: " . parent::getJob();
        }

    }

    class Utilities{
        private $workerList = [];

        public function addNewWorker(Worker $worker){
            $this->workerList[] = $worker;
        }

        public function showAllWorkerInfo(){
            foreach($this->workerList as $info){
                echo $info->showInfo() . '<br>';
            }
        }
    }
?>