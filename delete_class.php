<?php
require 'connection.php';

if (isset($_GET['name'])) {
	$id = $_GET['name'];
	$sql="DELETE FROM class WHERE name=:name";
	$run = $con->prepare($sql);
    $run->execute(array(':name' => $_GET['name']));

}
header('location:view_class.php');
?>