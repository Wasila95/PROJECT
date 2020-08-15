
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
     include('nav.php'); ?>
<p>View student</p>

   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">s/n</th>
      <th scope="col">student name</th>
      <th scope="col">class name</th>
      <th scope="col">reg no</th>
      <th scope="col">physics</th>
      <th scope="col">chemistry</th>
      <th scope="col">mathematics</th>
      <th scope="col">biology</th>
      <th scope="col">computer science</th>
      <th scope="col">marks</th>
      <th scope="col">percentage</th>
      <th scope="col"> edit</th>
      <th scope="col"> delete</a></th>
    </tr>
  </thead>
  <tbody>
    <?php
     include  'connection.php';
    $sql = "SELECT * FROM result";
    $stmt = $con->query($sql);
    $count=0;
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      $count++;
      $id=$row['id'];
      $name=$row['name'];
      $rno=$row['rno'];
      $class_name=$row['class_name'];
      $p1=$row['p1'];
      $p2=$row['p2'];
      $p3=$row['p3'];
      $p4=$row['p4'];
      $p5=$row['p5'];
      $marks=$row['marks'];
      $percentage=$row['percentage'];
      echo"
    <tr>
      <td>".$count."</td>
      <td>".$name."</td>
      <td>".$rno."</td>
      <td>".$class_name."</td>
      <td>".$p1."</td>
      <td>".$p2."</td>
      <td>".$p3."</td>
      <td>".$p4."</td>
      <td>".$p5."</td>
      <td>".$marks."</td>
      <td>".$percentage."</td>
      <td><a href='edit_result.php?id=".$id."'>edit</a></td>
      <td><a href='delete_result.php'>delete</a></td>
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
