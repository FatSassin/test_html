<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
		$passwd = $_POST['passwd'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bazadanychhtmltest";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO tabela2 (id, fname, lname, email, passwd) VALUES ('0', '$fname', '$lname', '$email', '$passwd')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);




	/*
	$db = mysqli_connect("localhost","root","","bazadanychhtmltest");
    
    $fishID = $_GET['id'];
    $sql1 = "SELECT fish.*, fishdesc_".$selectedLanguage.".*
         FROM fish
         INNER JOIN fishdesc_".$selectedLanguage." ON fish.fishID = fishdesc_".$selectedLanguage.".fishID
         WHERE fish.fishID = $fishID";
    $result = $db->query($sql1);
    $row = $result->fetch_assoc();
	*/
?>