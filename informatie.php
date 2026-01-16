<?php 

session_start();
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.php");
    exit;
}
require 'database.php';

?>

<!DOCTYPE html>
<html lang="nl">
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

select, .radio {
  background-color: #102031;
  color: #C9C2BB;
  border: none;
  font-size: medium;
  font-family: 'Orbitron', sans-serif;
}

body {
    background-color: rgb(0, 0, 0);
}

a {
    text-decoration: none;
    color: #d6d2cf;
}

.pagina-title {
    text-align: center;
    color: rgb(0, 208, 255);
    font-family: 'Orbitron', sans-serif;
    font-size: 35px;
    margin: 30px auto 0;
    padding: 20px;
    background-color: #062546;
    border: 2px solid rgb(0, 208, 255);
    border-radius: 10px;
    max-width: 900px;
    box-shadow: 0 5px 20px rgba(0, 208, 255, 0.2);
}

.info-container {
    max-width: 900px;
    margin: 30px auto;
    padding: 20px;
}

.info-section {
    background-color: #062546;
    border: 2px solid rgb(0, 208, 255);
    border-radius: 10px;
    padding: 25px;
    margin-bottom: 25px;
    color: #C9C2BB;
    font-family: 'Orbitron', sans-serif;
    line-height: 1.8;
}

.info-section h2 {
    color: rgb(0, 208, 255);
    border-bottom: 2px solid rgb(0, 208, 255);
    padding-bottom: 10px;
    margin-bottom: 15px;
    font-size: 22px;
}

.info-section p {
    margin: 10px 0;
    font-size: 14px;
}

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatie - PC Builder</title>
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

<div class="pagina-title">Informatie over PC Builder</div>

<div class="info-container">

  <div class="info-section">
    <h2>Over PC Browser</h2>
    <p>Welkom op PC Browser, een platform voor computerliefhebbers en professionals om computercomponenten en vooraf geconfigureerde systemen te verkennen.</p>
    <p>Ontdek ons uitgebreide aanbod van computercomponenten en blader door kant-en-klare PC-configuraties die door de community zijn samengesteld.</p>
  </div>

  <div class="info-section">
    <h2>Functies van de Website</h2>
    <p><strong>Builds Galerie:</strong> Blader door kant-en-klare PC-configuraties die zijn samengesteld door de community. Vind inspiratie en ideeën voor je volgende systeem.</p>
    <p><strong>Onderdelen Catalogus:</strong> Verken onze volledige database van computercomponenten, inclusief CPU's, GPU's, moederborden, RAM, opslagapparaten, behuizingen, voedingen en koelers.</p>
    <p><strong>Gebruikersaccount:</strong> Registreer je account en blader gemakkelijk door alle beschikbare componenten en pre-configured systemen.</p>
  </div>

  <div class="info-section">
    <h2>Over dit Project</h2>
    <p>PC Builder is ontwikkeld in 2025 als first project voor het leertraject aan ROC Midden Nederland. Het project is ontworpen om praktische kennis van webontwikkeling, databasebeheer en gebruikersinterface-ontwerp toe te passen in een realistisch scenario.</p>
    <p>Het doel van dit project was om een functionele, gebruiksvriendelijke applicatie te creëren waarbij gebruikers hun ideale computersysteem kunnen samenstellen.</p>
  </div>

  <div class="info-section">
    <h2>Technologie</h2>
    <p>PC Builder is gebouwd met deze webtechnologieën:</p>
    <p><strong>Backend:</strong> PHP</p>
    <p><strong>Frontend:</strong> HTML, CSS</p>
    <p><strong>Database:</strong> MySQL</p>
  </div>

</div>

</body>
</html>
