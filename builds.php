<?php 

session_start();
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.php");
    exit;
}
require 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .knoppen-boven {
  background-color: #102031;
  color: #C9C2BB;
  font-family: 'Orbitron', sans-serif;
  border-radius: 5px;
  border: 1px solid black;
  width: 100%;
  
}

body {
    background-color:rgb(8, 84, 128);
}

a {
    text-decoration: none;
    color: #d6d2cf;
}
  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <table class="knoppen-boven">
  <tr>
    <td><a href="index.php"><img src="foto/logo2.jpg" height="60"></a></td>  
    <td style="padding-right: 20px;"><a href="onderdelen.php">Onderdelen</a></td>
    <td style="padding-right: 20px;"><a href="Builder.php">Builder</a></td>
    <td style="padding-right: 20px;"><a href="Builds.php">Builds</a></td>           
    <td style="padding-right: 20px;"><a href="informatie.php">Informatie</a></td>
    
    <td style="text-align: right; width: 100%;">
      <div style="display: inline-block; padding: 5px 10px;"><a href="logout.php">Uitloggen</a></div>
    </td>
  </tr>
</table>

</body>
</html>
