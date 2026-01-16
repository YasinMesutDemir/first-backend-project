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
  background-color: rgb(0, 0, 0);
}

a {
    text-decoration: none;
    color: #d6d2cf;
}

select, .radio {
  background-color: #102031;
  color: #C9C2BB;
  border: none;
  font-size: medium;
  font-family: 'Orbitron', sans-serif;
}

.content-container {
    max-width: 1400px;
    margin: 30px auto;
    padding: 20px;
}

.onderdelen {
  color: white;
  border: 2px solid rgb(0, 208, 255);
  width: 100%;
  text-align: center;
  border-radius: 10px;
  border-spacing: 0;
  border-collapse: collapse;
  background-color: #062546;
  font-family: 'Orbitron', sans-serif;
  margin-top: 20px;
}

.onderdelen th {
  background-color: #102031;
  border: 1px solid rgb(0, 208, 255);
  padding: 15px;
  color: rgb(0, 208, 255);
  font-weight: bold;
  font-size: 14px;
}

.onderdelen td {
  text-align: center;
  border: 1px solid rgb(0, 208, 255);
  padding: 12px;
  color: #C9C2BB;
  font-size: 13px;
}

.onderdelen tr:hover {
  background-color: #0d3a52;
}

.no-content {
  color: #C9C2BB;
  font-family: 'Orbitron', sans-serif;
  text-align: center;
  padding: 40px;
  font-size: 16px;
}

.error-message {
  color: #ff6b6b;
  font-family: 'Orbitron', sans-serif;
  text-align: center;
  padding: 40px;
  font-size: 16px;
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
    <td style="padding-right: 20px;"><a href="Builds.php">Builds</a></td>
    <td style="padding-right: 20px;"><a href="informatie.php">Informatie</a></td>
    <td style="text-align: right; width: 100%;">
      <div style="display: inline-block; padding: 5px 10px;"><a href="logout.php">Uitloggen</a></div>
    </td>
  </tr>
</table>

<div class="content-container">
<?php
if (in_array($selected, $toegestaan)) {
    $stmt = $pdo->prepare("SELECT * FROM $selected");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($rows) > 0) {
        echo "<table class='onderdelen' border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr>";
        foreach (array_keys($rows[0]) as $col) {
            if ($col === 'id') {
                continue;
            }
            $headerName = ($col === 'image_url') ? 'Afbeelding' : htmlspecialchars($col);
            echo "<th>" . $headerName . "</th>";
        }
        echo "</tr>";
        
        foreach ($rows as $row) {
            echo "<tr>";
            foreach ($row as $key => $value) {
                if ($key === 'id') {
                    continue;
                }
                if ($key === 'image_url') {  
                    echo "<td><img src=\"" . htmlspecialchars($value) . "\" alt=\"image\" style=\"height:55px; border-radius: 5px;\"></td>";
                } else {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
} elseif ($selected !== '') {
    echo "<p class='error-message'>Ongeldige selectie.</p>";
} else {
    echo "<p class='no-content'>Kies een categorie om onderdelen te bekijken.</p>";
}
?>
</div>

</body>
</html>

</body>
</html>
