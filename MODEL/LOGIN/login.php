<?php
  session_start();

  $db = mysqli_connect("localhost", "root", "", "model");
  $rollno = $_POST['rollno'];
  $name =  $_POST['name'];
  $marks = $_POST['marks'];
  if(isset($_POST['insert_btn'])) {
      //session_start();
      // $username = mysql_real_escape_string($_POST['username']);
          $sql="INSERT INTO student(rollno,name,marks) VALUES ('$rollno', '$name', '$marks')";
          mysqli_query($db, $sql);
          $_SESSION['message'] = "Your Mark has Recorded ";
          $_SESSION['name'] = $name;
  }
  if(isset($_POST['delete_btn'])){
          $sql="DELETE FROM student where rollno='$rollno'";
          mysqli_query($db, $sql);
  }
  if(isset($_POST['update_btn'])){
          $sql="UPDATE student SET marks='$marks', name='$name' WHERE rollno='$rollno'";
          mysqli_query($db, $sql);
  }
  if(isset($_POST['view_btn'])){
    
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="style.css">
    <script src="javas.js"> </script>
</head>

<body>
    <form class="box" action="login.php" method="POST">
        <h1>STUDENTS DETAILS</h1>
        <!-- <label for="rollno">Enter Rollno:</label> -->
        <input type="text" placeholder="Enter Rollno" name="rollno" id="rollno" onclick="validate()">
        <!-- <label for="name">Enter Name:</label> -->
        <input type="text" placeholder="Enter Name" name="name" id="name" onclick="validate()">
        <!-- <label for="rollno">Enter Marks:</label> -->
        <input type="text" placeholder="Enter Marks" name="marks" id="marks" onclick="validate()">
        <input type="submit" name="insert_btn" value="INSERT" onclick="myFunction()">
        <input type="submit" name="delete_btn" value="DELETE" onclick="myFunction1()">
        <input type="submit" name="update_btn" value="UPDATE" onclick="myFunction2()">
        <input type="submit" name="view_btn" value="VIEW" onclick="myFunction3()">
        <input type="submit" name="viewall" value="VIEW ALL" onclick="myFunction4()">
    </form>
</body>

</html>