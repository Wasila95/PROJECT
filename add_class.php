
<!DOCTYPE>

<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/resultcss.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <script type="text/javascript" href="js/bootstrap.min.js"></script>
   <title>Add class</title>

   <body>

    <div class="container-fluid">
    <?php 
    include('nav.php'); ?>
  <div class="col-sm-10" >
<center>
<table class="table-responsive">
<form method="POST" >
  <fieldset>
<legend style="background-color: black";>add new class</legend>

<tr><td><p>Name:</p></td>
<td><input type="text" name="name" required=""></p></td></tr>
<tr><td><p>class_stream:</p></td>
<td><input type="text" name="class_stream" required=""></p></td></tr>
<tr><td><p>id:</p></td>
<td><input type="text" name="id" required=""></p></td></tr>
<tr><td><button type="submit" name="addclass" class="btn btn-success btn-labeled pull-right">add class<span class="btn-label btn-label-right"></span></button></td>
<td><button type="submit" name="cancel" class="btn btn-success btn-labeled pull-right"><a href="home.php">Cancel</a><span class="btn-label btn-label-right"></button></td></tr></span></button></td></tr></fieldset></form></table></center>
 
  </div>  
         
                          
    </div>
    </BODY>
</HTML>
<?php
include 'connection.php';
if(isset($_POST['addclass'])){
    $name=$_POST['name'];
    $class_stream=$_POST['class_stream'];
    $id=$_POST['id'];
    
    $sql="INSERT INTO class(name,class_stream,id) values(:name,:class_stream,:id)";
    $run=$con->prepare($sql);
    $sql_run=$run->execute(array(":name"=>$name,":class_stream"=>$class_stream,":id"=>$id));
   
    if($sql_run){
    echo '<script>alert("data successifully inserted")</script>';
    header('location:view_class.php');
}
else{
    echo "failed";
}
 echo '<script>alert("data successifully inserted")</script>';

}
?>
<script type="text/javascript">
     var name=document.getElementByName('name').values;
     if(name==""){
      alert("the field must be filled");
     }
   </script>