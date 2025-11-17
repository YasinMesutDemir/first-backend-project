<?php 

session_start();
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.php");
    exit;
}

require 'database.php';

$toegestaan = ['cpu', 'gpu', 'motherboard', 'ram', 'storage', 'cases', 'psu', 'coolers'];
$selected = $_GET['part'] ?? '';
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
  border: 2px solid rgb(0, 208, 255);
}
body {
  background-color:rgb(0, 0, 0);
}
a {
    text-decoration: none;
    color: #d6d2cf;
}
select, .radio {
  background-color: #102031;
  color: #C9C2BB;
  border: none;
  font-size:medium;
  font-family: 'Orbitron', sans-serif;
}

.onderdelen {
  color: white;
  margin-top: 1%;
  border: 1px solid rgb(0, 208, 255);
  width: 103%;
  text-align: center;
  border-radius: 5px;
  border-spacing: 0;
  border-collapse: separate;
  margin-left: -1.5%;
  margin-top: -0.5%;
}

tr, .td {
  text-align: center;
}

.td {
  text-align: center;
  border: 1px solid rgb(0, 208, 255);
  padding: 1%;
  font-family: 'Orbitron', sans-serif;
}

.selected {
  padding-left: 50%;
}

</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Onderdelen</title>
</head>
<body>

<table class="knoppen-boven">
  <tr>
    <td><a href="index.php"><img src="foto/logo2.jpg" height="60"></a></td>
    <td style="padding-right: 20px;"><a href="Builds.php">Builds</a></td>
    <td style="padding-right: 10px;">
      <form method="GET" action="onderdelen.php">
        <select name="part" id="part" onchange="this.form.submit()" class="radio">
            <option value="">Onderdelen</option>
            <option value="cpu">Cpu</option>
            <option value="gpu">Gpu</option>
            <option value="motherboard">Motherboard</option>
            <option value="ram">Ram</option>
            <option value="storage">Storage</option>
            <option value="cases">Cases</option>
            <option value="psu">Psu</option>
            <option value="coolers">Coolers</option>
        </select>
      </form>
    </td>
    <td style="padding-left: 73%; white-space: nowrap;"><a href="insert.php">Onderdeel Toevoegen</a></td>
    <td style="text-align: right; width: 100%;">
      <div style="display: inline-block; padding: 5px 10px;"><a href="logout.php">Uitloggen</a></div>
    </td>
  </tr>
</table>
