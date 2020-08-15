<?php
require 'connection.php';

if (isset($_GET['rno'])) {
  $id = $_GET['rno'];
  $sql="DELETE FROM student WHERE rno=:rno";
  $run = $con->prepare($sql);
    $run->execute(array(':rno' => $_GET['rno']));

}
header('location:view_class.php');
?>