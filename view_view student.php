
<!DOCTYPE>

<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/resultcss.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <script type="text/javascript" href="js/bootstrap.min.js"></script>
   <title>Menu Test</title>
   <body >
    <div class="container-fluid">
       <?php 
     include('nav.php'); ?>
<p>View student</p>

   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">s/n</th>
      <th scope="col">student name</th>
      <th scope="col"> registration number</th>
      <th scope="col">class name</th>
      <th scope="col"> edit</th>
      <th scope="col"> delete</a></th>
    </tr>
  </thead>
  <tbody>
    <?php
     include  'connection.php';
    $sql = "SELECT * FROM students";
    
    $stmt = $con->query($sql);
    $count=0;
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      $count++;
      $name=$row['name'];
      $rno=$row['rno'];
      $class_name=$row['class_name'];

      echo"
    <tr>
      <td>".$count."</td>
      <td>".$name."</td>
      <td>".$rno."</td>
      <td>".$class_name."</td>
      <td><a href='edit_student.php?rno=".$rno."'>edit</a></td>
      <td><a href='delete_student.php'>delete</a></td>
    </tr>";
    }

?>

  </tbody>
</table>

<p><button type="submit" name="viewCass" class="btn btn-success btn-labeled pull-right"><a href="home.php">Cancel</a><span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>


</form>
                </div>  
            </div>
            <div class="col pt-2">                    
                <p><center><strong>copyrigth sisterw@@@2020</strong></center></p>
            </div>
        </div>
    </BODY>
</HTML>
