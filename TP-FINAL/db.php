<?php

$server = "localhost";
$user = "root";
$pass = "root";
$database = "tp_final_maxime";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
      die("erreur");

}

?>