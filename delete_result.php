<?php
require 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql="DELETE FROM result WHERE id=:id";
    $run = $con->prepare($sql);
    $run->execute(array(':id' => $_GET['id']));

}
header('location:view_result.php');
?>