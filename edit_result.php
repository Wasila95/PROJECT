<!DOCTYPE>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/resultcss.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" href="js/bootstrap.min.js"></script>
<title>edit result</title>
<body >
  
    <div class="container-fluid" >
     <?php 
     include('nav.php'); ?>
  <div class="col-sm-10">
    

<table class="table-responsive">
<form method="POST" action="updathandler.php">
  <fieldset>
<legend>edit class</legend>

<?php
     include  'connection.php';

     if(isset($_GET['id'])){

      $id=$_GET['id'];
    $sql = "SELECT * FROM result WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->execute(array($id));
    $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
    if($row){
      foreach($row as $print){



?>
<tr><td><p>Name:</p></td>
<td><input type="text" name="name" required="" value="<?php echo $print['name']; ?>"></p></td>
<td><p>physics:</p></td>
<td><input type="text" name="p1" required="" value="<?php echo $print['p1']; ?>"></p></td></tr>
<td><input type="hidden" name="resultid" value="<?php echo $print['id']; ?>"></p></td></tr>
<tr><td><p>chemistry:</p></td>
<td><input type="text" name="p2" required="" value="<?php echo $print['p2']; ?>"></p></td>
<td><p>mathematics:</p></td>
<td><input type="text" name="p3" required="" value="<?php echo $print['p3']; ?>"></p></td></tr>
<tr><td><p>biology:</p></td>
<td><input type="text" name="p4" required="" value="<?php echo $print['p4']; ?>"></p></td>
<td><p>computer studies:</p></td>
<td><input type="text" name="p5" required="" value="<?php echo $print['p5']; ?>"></p></td></tr>



<tr><td><button type="submit" name="editresult" class="btn btn-success btn-labeled pull-right">edit class<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button></td>
<td><button type="submit" name="cancel" class="btn btn-success btn-labeled pull-right">
  <a href="index.php">Cancel</a><span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button></td></tr>

  <?php
} } } ?>

</fieldset>
</form>
</table>
      </div>
        

    </div>
</div>
</BODY>
</HTML>