<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="css/resultcss.css">
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <script type="text/javascript" href="js/bootstrap.min.js"></script>
	
	<title>result analysis management</title>
</head>

	<body style="background-color: black"; >
    <div class="container">
    <div class="title">
      <h1 class="text-uppercase" style="margin: 100px;"><center><strong>RESULT ANALYSIS MANAGEMENT SYSTEM</strong></center></h1>
    </div>
  
<div class="container-fluid">
  <div class="d-flex justify-contenter form-container" style="float: left;">
    <form method="POST" action="studentview_result.php">
  <div class="form-group">
    <fieldset><legend><strong style="color: white";>for student only</strong></legend>
    <input type="text" class="form-control" placeholder="Enter reg no" name="rno" required="">
  </div>
  <div class="form-group">
   <?php
   include('connection.php');
                    
    $sql = "SELECT name FROM class";
     echo '<select name="class_name" required="">';
      echo '<option selected disabled>Select Class</option>';
       $run=$con->prepare($sql);
        $run->execute();
        while($row=$run->fetch(PDO::FETCH_ASSOC)){
         $display=$row['name'];
          echo '<option value="'.$display.'">'.$display.'</option>';
        }    
          echo'</select>'
  ?>
</select></div>
  <button type="submit" class="btn btn-primary" name="stresult">search the result</button>
  </fieldset></div>
</form>

  </div>


</div>
<div class="logform" style="float: right;">
	<div class="containter-fluid text-center text-md-left">
                   <p class="sub-title"><strong style="color: white">ADMIN LOGIN</strong></p>
                   </div>

                 <form class="form-horizontal" method="POST" name="login" action="loginHandler.php">
             <div class="form-group">
             <label for="inputusername" class="col-sm-2 control-label"><strong>UserName</strong></label>
              <div class="col-sm-10">
              <input type="text" name="username" class="form-control" id="inputusename" placeholder="UserName" required="">
              </div>
              </div>
               <div class="form-group">
               <label for="inputpasswod" class="col-sm-2 control-label"><strong>Password</strong></label>
                <div class="col-sm-10">
                 <input type="password" name="password" class="form-control" id="inputpassord" placeholder="Password" required="">
                 </div>
                </div>
               <div class="form-group mt-20">
               <div class="col-sm-offset-2 col-sm-10">
                                                           
              <button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
              <div class="alert alert-warning">
              <strong style="color: black";>Warning!</strong> make sure you insert correct username and password.
              </div>   
              </div>
              </div>
              </form>

</div>

</body>
</html>

 