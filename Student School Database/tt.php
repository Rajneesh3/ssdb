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

$sql = "SELECT * FROM `time table`";
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
    <title>Time Table</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="table.css">
  </head>
  <body>
<img class="bg" src="school.jpg" alt="RSR">

  <div class="">
    <button id="btt" type="button" onclick="location.href='index.html'" name="button">HOME</button>
  </div>
  <h1>TIME TABLE</h1>
  <table >
  <tr>
  <th>Period/Time-></th>
  <th>8.00 - 9.00</th>
  <th>9.00 - 10.00</th>
  <th>10.00 - 11.00</th>
  <th>11.00- - 11.30</th>
  <th>11.30 - 12.30</th>
  <th>12.30 - 1.30</th>
</tr>.
  <?php while($row=mysqli_fetch_array($result)):?>
  <tr>
  <td><?php echo $row['Time'];?></td>
  <td><?php echo $row['8.00 - 9.00'];?></td>
  <td><?php echo $row['9.00 - 10.00'];?></td>
  <td><?php echo $row['10.00 - 11.00'];?></td>
  <td><?php echo $row['11.00 - 11.30'];?></td>
  <td><?php echo $row['11.30 - 12.30'];?></td>
  <td><?php echo $row['12.30 - 1.30'];?></td>
  </tr>
  <?php endwhile;?>
  </table>




  </body>
</html>
