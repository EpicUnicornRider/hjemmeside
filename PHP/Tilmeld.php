<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include "DB.php";
	
	$db = new DB();
	$conn = $db -> getDb();
    
    $navn = $_POST["navn"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $shoesize = $_POST["shoesize"];

    $query = mysqli_query($conn, "SELECT * FROM User WHERE UserPassword = '$kodeord' AND UserName = '$brugernavn';"); //Query the users table
    $rowNumber = mysqli_num_rows($query);
    if($rowNumber > 0)
    {
        header('location:/hjemmesiden/Selaan.html');
    }
    else
    {
        header('location:/hjemmesiden/index.html');
    }
}
ELSE
{
    echo "error";
}
?>