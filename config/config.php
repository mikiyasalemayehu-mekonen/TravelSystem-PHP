<?php
try{
$Host="localhost";
$DbName="Guzotravel";
$user="root";
$pass="";
$conn=new PDO("mysql:host=".$Host.";dbname=".$DbName."",$user,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $exception){
    echo $exception->getMessage();

}
?>