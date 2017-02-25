<!DOCTYPE html>
<html>
    <head>
        <title>LINC Database</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Save new client to database function</h1>
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
$empFn = filter_input(INPUT_POST, "empFirstName");
$empLn = filter_input(INPUT_POST, "empLastName");
$employer = filter_input(INPUT_POST, "company");
if (!$connection) {
    die("Database connection failed: ".mysqli_error());
}
else if ($connection){
    echo "<h2>omg is this working now</h2>";
    echo $connection->host_info ."\n";
}
$db_select = mysqli_select_db($connection, "db");
if (!$db_select) {
    die("Database selection failed: ".mysqli_error());
}
else if ($db_select) {
    echo "<h1>YAY!</h1>";
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