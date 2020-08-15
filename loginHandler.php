<?php
session_start();

if (isset($_POST['login'])){
require_once('connection.php');
 $name=$_POST['username'];
 $pass=$_POST['password'];
 $query="SELECT * FROM Admin_login where userid='$name' and password='$pass'";
 $stmt=$con->prepare($query);
 $stmt->execute();
 if($stmt->rowCount()>0){
 	header('location:home.php');
 }
 else{
 	header('location:index.php');
 }
 
     }
     ?>