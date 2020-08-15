
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
     <p> View Class</p>

   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">s/n</th>
      <th scope="col">name</th>
      <th scope="col">class_stream</th>
      <th scope="col"> edit</th>
      <th scope="col"> delete</a></th>
    </tr>
  </thead>
  <tbody>
    <?php
     include  'connection.php';
    $sql = "SELECT * FROM CLASS";
    $stmt = $con->query($sql);
    $count=0;
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      $count++;
      $name=$row['name'];
      $class_stream=$row['class_stream'];
      $id=$row['id'];
      echo"
    <tr>
      <td>".$count."</td>
      <td>".$name."</td>
      <td>".$class_stream."</td>
      <td><a href='edit_class.php?name=".$name."'>edit</a></td>
      <td><a href='delete_class.php?name=".$name."'>delete</a></td>
      
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
