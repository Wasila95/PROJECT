<!DOCTYPE>
<?php
if (!isset($_GET["rno"])) {
  header("location:view_class.php");
}
?>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/resultcss.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" href="js/bootstrap.min.js"></script>
<title>edit student</title>
<body >
  
    <div>
     <?php 
     include('nav.php'); ?>
  <div class="col-sm-10">
    <p>edit A student</p>

<table class="table-responsive">
<form method="POST" >
  <fieldset>
    <?php
    include 'connection.php';
    $sql = "SELECT * from students where rno=:rno";
    $s = $con->prepare($sql);
    $s->execute(array('rno' => $_GET['rno']));
    if ($s->rowCount()==1){
       $row=$s->fetch();
    }else{
      header('Location: edit_student.php');
    }
    if(isset($_POST['editstudent'])){
    $name=$_POST['name'];
    $rno=$_POST['rno'];
    $class_name=$_POST['class_name'];
    $rno=$_GET['rno'];
    $sql="UPDATE students set name=:name,rno=:rno,class_name=:class_name where rno=:rno";
    $run=$con->prepare($sql);
    $run->execute(array(':name'=>$name,':rno'=>$rno,':class_name'=>$class_name));
    header("location:view_view student.php");
  }
?>
<legend>edit student</legend>
<tr><td><p>student name:</p></td>
<td><input type="text" name="name" required="" value="<?php echo $row['name']; ?>"></p></td></tr>
<tr><td><p>student reg number:</p></td>
<td><input type="text" name="rno" required="" value="<?php echo $row['rno']; ?>"></p></td></tr>
<tr><td><p>class name:</p></td>
<td><input type="text" name="class_name" required="" value="<?php echo $row['class_name']; ?>"></p></td></tr>
 
<tr><td><button type="submit" name="editstudent" class="btn btn-success btn-labeled pull-right">edit student<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button></td>
<td><button type="submit" name="cancel" class="btn btn-success btn-labeled pull-right"><a href="home.php">Cancel</a><span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button></td></tr>
</fieldset>
</form>
</table>
      </div>


    </div>
</div>
</BODY>
</HTML>