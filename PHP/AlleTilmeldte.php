<?php
    class User implements JsonSerializable{

        private $name;
        private $email;
        private $age;
        private $shoesize;

        function __construct($name, $email, $age, $shoesize){
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
            $this->shoesize = $shoesize;
        }

        public function getName(){
            return $this->name;
        }
        
        public function jsonSerialize(){
            return [
                "name"=>$this->name,
                "email"=>$this->email,
                "age"=>$this->age,
                "shoesize"=>$this->shoesize
            ];
        }
    }
    
?>