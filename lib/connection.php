<?php 
$server="localhost";
$database="da_tttn";
$username="root";
$password="";
$conn = mysqli_connect($server, $username, $password,$database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
//   echo 
//   '
//   <script type="text/javascript">
  
//     alert("Connected successfully")

  
//   </script>
//   ';
  
  
?>