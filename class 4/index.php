<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="todolist";

// Create connection

$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todo</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
  <form action="" method="POST">
 <p class="fs-1 fw-bold ms-5"> Todo list</p>
    <input type="textbox" class="form-control m-auto ms-5 w-50 p-2 "name ="textbox"style="float:left;" >
    <input type="submit" class="btn btn-primary p-2" name ="submit"value="submit">
  </form>
  <table class="table table-dark table-hover m-auto mt-3 ms-5 w-50 p-3 float-start">
  <p  class="fs-1 fw-bold  ms-5 mt-3">Task</p>
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">name</th>
    </tr>
  </thead>
   <tbody>
   
      
  </tbody> 
</table>
</body>
</html>
<!-- insert Query -->
<?php
if(isset($_POST['submit'])){

  $name = $_POST['textbox'];

  $insertquery = "INSERT INTO test(name) VALUES ('$name')";
  $res = mysqli_query($conn,$insertquery);
  if($res){
    ?>
    <script>
      alert("data inserted properly");
    </script>
    <?php
  }else{
    ?>
    <script>
      alert("data not inserted");
    </script>
    <?php
  }
}
?>
<!-- select Query -->
 <?php
// $selectquery = "select * from test";
// $query = mysqli_query($conn,$selectquery);

// while($res = mysqli_fetch_assoc($query)){
  // ?>
   <tr>
      <td>
        <?php
  //       echo $res['name']
  //       ?>
      </td>
    
     </tr>
   <?php

// }

?> 