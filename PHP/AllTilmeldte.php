<?php

        include('DB.php');

        $DB = new DB();

        $conn = $DB->getDb();
        

        $query = mysqli_query($conn, 'SELECT name, email, age, Hyppighedskostr.shoesize FROM Hyppighedskostr;');

        //var_dump($query);

        $users = array();
        for($i = 0; $i < mysqli_num_rows($query); $i++){
            $users[] = $query -> fetch_assoc();
            //var_dump($query -> fetch_assoc());
        }

        echo json_encode($users);

?>