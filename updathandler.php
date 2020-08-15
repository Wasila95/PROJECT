<?php
session_start();
require_once('connection.php');
if (isset($_POST['editresult'])){

$name=$_POST['name'];
$resultid=$_POST['resultid'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
$p5=$_POST['p5'];

 $query="UPDATE result set name=?,p1=?,p2=?,p3=?,p4=?,p5=? where id=?";
 $s=$con->prepare($query);
 $s->execute(array($name,$p1,$p2,$p3,$p4,$p5,$resultid));

 	header('location:view_result.php');

 
     }
     ?>