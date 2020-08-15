<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/resultcss.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" href="js/bootstrap.min.js"></script>
    <title>student view result</title>
</head>
<h1 align="center" style="background-color: black";>student result</h1>
<body style="background-color: black";>

    <?php
        include 'connection.php';
        if(isset($_POST['stresult'])){
            $rno=$_POST['rno'];
            $class_name=$_POST['class_name'];
            $sql="SELECT p1,p2,p3, p4, p5,marks, percentage FROM result WHERE rno='$rno' and class_name='$class_name'";
            $sql1="SELECT name,rno,class_name FROM students WHERE rno='$rno' and class_name='$class_name'";
            $run=$con->prepare($sql);
            $run1=$con->prepare($sql1);
            $run->execute();
            $run1->execute();
            $row1=$run1->fetch(PDO::FETCH_ASSOC);
       
    }

       
        while($row=$run->fetch(PDO::FETCH_ASSOC))
        {
            $p1 = $row['p1'];
            $p2 = $row['p2'];
            $p3 = $row['p3'];
            $p4 = $row['p4'];
            $p5 = $row['p5'];
            $mark = $row['marks'];
            $percentage = $row['percentage'];
        }
        
        
    ?>

    <div class="container" style="background-color: lightblue;">
        <div class="details">
            
            <table cclass="tablename" align="center">
                <h3 align="center">STUDENT DETAILS</h3><tr><td>
            <span>Name:</span></td><td> <?php echo $row1['name'] ?></td></tr><br>
           <tr><td><span>Class:</span><td><?php echo $class_name; ?></td></tr>
            <tr><td><span>Roll No:</span></td><td> <?php echo $rno; ?> <br></td></tr></table>
        </div>

        
            <div class="s1">
                <table align="center">
                    <th><h3 align="center">RESULT</h3><th>
                <tr><td style="font-weight: bold;">Subjects</td> <td style="font-weight: bold";>Marks</td><tr>
                <tr><td>physics</td> <td><?php echo '<p>'.$p1.'</p>';?></td> </tr>
                <tr><td>chemistry</td> <td><?php echo '<p>'.$p2.'</p>';?></td></tr>
                <tr><td>mathematics</td> <td><?php echo '<p>'.$p3.'</p>';?></td></tr>
                <tr><td>biology</td><td><?php echo '<p>'.$p4.'</p>';?></td></tr>
                <tr><td>computer science</td><td><?php echo '<p>'.$p5.'</p>';?></td></tr>
        </div>

        <div class="result">
            
            <table>
            <h3>GENERAL ASSESSMENT</h3>
            <tr><td><?php echo '<p>Total Marks:'.$mark.'</p>';?></td></tr>
            <tr><td><?php echo '<p>Percentage:'.$percentage.'%</p>';
            ?></td></tr></table>
        </div>  
        <tr><td><p><button type="submit" name="viewrstudent" class="btn btn-success btn-labeled pull-right"><a href="index.php">Cancel</a><span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button></p></td></tr>
        </p></div>

</body>
</html>