
<!DOCTYPE>

<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/resultcss.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" href="js/bootstrap.min.js"></script>
<title>Menu Test</title>
<body>
  
  <div class="container-fluid">
    <?php
    include('nav.php')

    ?>
        <div class="col pt-2">
            <h2>
                <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a> ADD NEW STUDENT</h2></div>
             <div><form method="POST">

                <table class="table-responsive">
                <legend>Add Student</legend>
                <tr><td><input type="text" name="student_name" placeholder="Student Name">
                <tr><td><input type="text" name="roll_no" placeholder="Roll No"></td></tr>
               <tr><td> <?php
                    include('connection.php');
                    
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
                      ?></td></tr>
              <tr><td><button type="submit" name="addstudent" class="btn btn-success btn-labeled pull-right">add new student<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button></td>
                <td><button type="submit" name="cancel" class="btn btn-success btn-labeled pull-right"><a href="home.php">Cancel</a><span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button></td></tr>
            </fieldset>
        </form>
             </div> 
            
            <div class="col sm 10" >                    
             
            </div>
        </div>
    </BODY>
</HTML>

<?php
include 'connection.php';
if(isset($_POST['addstudent'])){
    $name=$_POST['student_name'];
    $rno=$_POST['roll_no'];
    $class_name=$_POST['class_name'];
    $sql="INSERT INTO students(name,rno,class_name) values(:name,:rno,:class_name)";
    $run=$con->prepare($sql);
   $sql_run=$run->execute(array(":name"=>$name,":rno"=>$rno,":class_name"=>$class_name));
    header("location:view_view student.php");
}

?>