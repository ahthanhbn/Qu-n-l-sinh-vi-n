<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "qlsv";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_errno){
    die("Loi ket noi" .$conn->connect_errno);
}
?>


