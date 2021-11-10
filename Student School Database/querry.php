<?php

$insert = false;
if(isset($_POST['Queries'])){

    $server = "localhost";
    $username = "root";
    $password = "";


    $con = mysqli_connect($server, $username, $password);


    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";


      $Queries = $_POST['Queries'];

    $sql = "INSERT INTO `student`.`querry` (`Queries`)
    VALUES ('$Queries');";

    if($con->query($sql) == true){

           echo "<script> alert('QUERY/COMPLAINTS ENTERED SUCCESSFULLY');
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
     <title>ENTER QUERY</title>
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
       <p>Enter your queries/complaints </p>
       <form action="querry.php" method="post">
           <input  name="Queries" id="Queries" cols="30" rows="30" placeholder="Enter your queries and complaints(if any)">
           <button class="btnn">Submit</button>
       </form>
   </div>
   <script src="index.js"></script>
 </body>
 </html>
