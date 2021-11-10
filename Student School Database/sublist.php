
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
  die("sorry".mysqli_connect_error());
}
else{
  // echo "Connection to db successful<br>";
}

$sql = "SELECT * FROM `subject`";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num > 0){
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub LIST</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="table.css">
  </head>


<body>
  <img class="bg" src="school.jpg" alt="RSR">
  <div class="">
    <button id="btt" type="button" onclick="location.href='index.html'" name="button">HOME</button>
  </div>
  <h1>SUBJECT LIST</h1>
  <table >
  <tr>
  <th>SN</th>
  <th>SUB NAME</th>
  <th>HANDLING FACULTY</th>
  <th>SUB CODE</th>
  </tr>
  <?php while($row=mysqli_fetch_array($result)):?>
  <tr>
  <td><?php echo $row['SN'];?></td>
  <td><?php echo $row['Sub name'];?></td>
  <td><?php echo $row['Handling faculty'];?></td>
  <td><?php echo $row['sub code'];?></td>
  </tr>
  <?php endwhile;?>
  </table>




  </body>
</html>
