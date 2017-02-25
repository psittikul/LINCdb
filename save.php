<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <script type="text/javascript" src="clientInfoForm.js"></script>
        <title>LINC Database</title>
    </head>
    <body>
        <div id="header">
            <img src="linc-logo-blue.jpg"></img>
        </div>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//DB Connection info
$host = "localhost";
$user = "root";
$password = "";
$connection = mysqli_connect($host, $user, $password);
//Show error message if connecting to database and/or selecting database failed
if (!$connection) {
    die("Database connection failed: ".mysqli_error());
}
$db_select = mysqli_select_db($connection, "db");
if (!$db_select) {
    die("Database selection failed: ".mysqli_error());
}

//If the submit button was clicked, first gather form data then insert it into database
if (isset( filter_input(INPUT_POST, "Submit"))) {
    $empFn = filter_input(INPUT_POST, "empFirstName");
    $empLn = filter_input(INPUT_POST, "empLastName");
    $employer = filter_input(INPUT_POST, "companies");    
    $primaryEmail = filter_input(INPUT_POST, "empEmail");
    $secondaryEmail = filter_input(INPUT_POST, "empEmail2");
    $referralDate = filter_input(INPUT_POST, "referralDate");
    $primaryPhone = filter_input(INPUT_POST, "empPhone");
    $secondaryPhone = filter_input(INPUT_POST, "empPhone2");
    $address = filter_input(INPUT_POST, "empAddress");
    $city = filter_input(INPUT_POST, "empCity");
    $state = filter_input(INPUT_POST, "empState");
    
    
}


$testQuery = $connection->query("INSERT INTO clientinfo SET
          clientFn    = '". mysqli_real_escape_string($connection, $empFn) ."',
          clientLn    = '". \mysqli_real_escape_string($connection, $empLn) ."',
          employer = '". \mysqli_real_escape_string($connection, $employer) ."'");

if ($testQuery) {
    echo "Yay omg!";
}
else {
    echo "Insertion failed: MySQL Error #".  mysqli_errno($connection).": ".mysqli_error($connection);
}


?>
</body>
</html>