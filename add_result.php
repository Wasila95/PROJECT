
<!DOCTYPE>

<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/resultcss.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" href="js/bootstrap.min.js"></script>
<title>Menu Test</title>
<body>
    <div class="container-fluid" >
        <?php
        include('nav.php')

        ?>
        <div class="col pt-2">
        <h2>
        <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a>ADD RESULT </h2>
<table class="table table-bordered">

<p>add result</p>


<form method="post" action="">
    <table>
<tr><td><p>student name:</p></td>
<td><input type="text" name="name"></p></td><td><p>COURSE SELECTION:</p></td>
<td> <?php
    include'connection.php';
     $sql = "SELECT name FROM class";
       echo '<select name="class_name">';
       echo '<option selected disabled>Select Class</option>';
       $run=$con->prepare($sql);
        $run->execute();
        while($row=$run->fetch(PDO::FETCH_ASSOC)){
        $display=$row['name'];
        echo '<option value="'.$display.'">'.$display.'</option>';
        }    
        echo'</select>'
     ?></td><td>REG NO</td><td>
        <input type="text" name="rno"></p></td></tr>

<tr><td><p>pysics:</p></td><td><input type="text" name="p1"></p></td>
<td><p>chemistry:</p></td><td><input type="text" name="p2"></p></td></tr>

<tr><td><p>mathematics:</p></td><td><input type="text" name="p3">
</p></td><td><p>biology:</p></td><td><input type="text" name="p4"></p></td></tr>
<tr><td><p>computer science:</p></td><td><input type="text" name="p5"></p></td></tr>




<tr><td><button type="submit" name="addresult" class="btn btn-success btn-labeled pull-right">add result<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button></td>
<td><button type="submit" name="login" class="btn btn-success btn-labeled pull-right"><a href="home.php">Cancel</a><span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button></td>

</form>
</table>

            
        </div>
    </div>
</div>
</BODY>
</HTML>
<?php
include 'connection.php';
if(isset($_POST['addresult'])){
    $name=$_POST['name'];
    $rno=$_POST['rno'];
    $class_name=$_POST['class_name'];
    $p1=$_POST['p1'];
    $p2=$_POST['p2'];
    $p3=$_POST['p3'];
    $p4=$_POST['p4'];
    $p5=$_POST['p5'];
    $marks=$p1+$p2+$p3+$p4+$p5;
    $percentage=(($p1+$p2+$p3+$p4+$p5)/500)*100;

    $sql="INSERT INTO result(name,rno,class_name,p1,p2,p3,p4,p5,marks,percentage) values(:name,:rno,:class_name,:p1,:p2,:p3,:p4,:p5,:marks,:percentage)";
    $run=$con->prepare($sql);
    $sql_run=$run->execute(array(":name"=>$name,":rno"=>$rno,":class_name"=>$class_name,":p1"=>$p1,":p2"=>$p2,":p3"=>$p3,":p4"=>$p4,":p5"=>$p5,":marks"=>$marks,":percentage"=>$percentage));
    header("location:view_result.php");
    if($sql_run){
    echo '<script>alert("data successifully inserted")</script>';
}
else{
    echo "failed";
}
 echo '<script>alert("data successifully inserted")</script>';

}
?>

