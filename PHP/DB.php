<?php
    include_once('AlleTilmeldte.php');

	class DB {
        // Attributes
        private $host = 'skp-dp.sde.dk';
        private $user = 'xolp37.skp-dp';
        private $db = 'xolp37_skp_dp_sde_dk';
        private $pw = '3ypk52pq';
        private $conn;

        // Constructor method
        function __construct(){
            // Instantier MYSQLI objekt til datahåndtering
            $this->conn = new mysqli($this->host, $this->user,$this->pw, $this->db);

            // test om forbindelsen virker ellers luk ned!
            if($this->conn->connect_errno != ''){
                echo '<h1>'.$this->conn->connect_error.'</h1>';
                die('Der er ikke forbindelse til databasen!');
            } else {
                // Sæt charset til UTF8, hvis forbindelsen virker
                $this->conn->set_charset('UTF8');
            }
        }
        
        function getAllUsers(){
            $users = array();

            $sql = 'SELECT name, email, age, Hyppighedskostr.shoesize FROM Hyppighedskostr';

            $result = $this->conn->query($sql);

            while($row = $result->fetch_object()){
                //echo $row->name.'<br>';
                $users[] = new User($row->name, $row->email, $row->age, $row->shoesize);
            }

            return $users;
        }   
    }
?>