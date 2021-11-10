<?php

$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";


    $con = mysqli_connect($server, $username, $password);


    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";


    $name = $_POST['name'];
    $sid = $_POST['sid'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sql = "INSERT INTO `student`.`details` (`name`, `sid`, `department`, `email`, `phone`, `address`, `dt`)
    VALUES ('$name', '$sid', '$department', '$email', '$phone', '$address', current_timestamp());";

    if($con->query($sql) == true){

           echo "<script> alert('DATA ENTERED SUCCESSFULLY');
           window.location='index.html';
                 </script>";
      }else{
        echo "ERROR: $sql <br/> $con->error";
      }
                    $con->close();
                  }
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ENTER DATA</title>
     <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
   <img class="bg" src="school.jpg" alt="school">
   <div class="">
     <button id="btt" type="button" onclick="location.href='index.html'" name="button">HOME</button>
   </div>
   <div class="container">
       <h1>Welcome to RSR</h3>
       <p>Enter your details </p>
       <form action="details.php" method="post">
           <input type="text" name="name" id="name" placeholder="Enter your name">
           <input type="text" name="sid" id="sid" placeholder="Enter your student id">
           <input type="text" name="department" id="department" placeholder="Enter your Department">
           <input type="email" name="email" id="email" placeholder="Enter your email">
           <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
           <input  name="address" id="address" cols="30" rows="10" placeholder="Enter Address">
           <button class="btnn">Submit</button>
       </form>
   </div>
   <script src="index.js"></script>
 </body>
 </html>
