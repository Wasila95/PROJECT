<!DOCTYPE>
<?php
if (!isset($_GET['name'])) {
  header("location:view_class.php");
}
?>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/resultcss.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" href="js/bootstrap.min.js"></script>
<title>edit class</title>
<body >
  
    <div class="container-fluid" >
     <?php 
     include('nav.php'); ?>
  <div class="col-sm-10">
    <p>edit A Class</p>

<table class="table-responsive">
<form method="POST" >
  <fieldset>
    <?php
    include 'connection.php';
    if(isset($_GET["name"])){
      $name=$_GET['name'];
    $sql = "SELECT * from class where name=:name";
    $s = $con->prepare($sql);
    $s->execute(array('name' => $_GET['name']));
    if ($s->rowCount()==1){
      $row=$s->fetch();
    }else{
      header('Location: view_class.php');
    }
  }
  if(isset($_POST['editclass'])){
    $name=$_POST['name'];
    $class_stream=$_POST['class_stream'];
    $id=$_POST['id'];
    $name=$_GET['name'];
    $sql="UPDATE class set name=:name,class_stream=:class_stream,id=:id where name=:name";
    $run=$con->prepare($sql);
    $run->execute(array(':name'=>$name,':class_stream'=>$class_stream,':id'=>$id));
    header("location:edit_class.php");
  }

?>
<legend>edit class</legend>
<tr><td><p>Name:</p></td>
<td><input type="text" name="name" required="" value="<?php echo $row['name']; ?>"></p></td></tr>
<tr><td><p>class_stream:</p></td>
<td><input type="text" name="class_stream" required="" value="<?php echo $row['class_stream']; ?>"></p></td></tr>
<tr><td><p>id:</p></td>
<td><input type="text" name="id" required="" value="<?php echo $row['id']; ?>"></p></td></tr>
<tr><td><button type="submit" name="editclass" class="btn btn-success btn-labeled pull-right">edit class<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button></td>
<td><button type="submit" name="cancel" class="btn btn-success btn-labeled pull-right"><a href="home.php">Cancel</a><span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button></td></tr>
</fieldset>
</form>
</table>
      </div>
        <div class="col pt-2">
            <h2>
                <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a> ADD NEW COURSE </h2></div>
               <table class="table table-bordered">

            
        </div>

    </div>
</div>
</BODY>
</HTML>
