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
  border: 2px solid rgb(0, 208, 255);
  
}

select, .radio {
  background-color: #102031;
  color: #C9C2BB;
  border: none;
  font-size:medium;
  font-family: 'Orbitron', sans-serif;
}

body {
    background-color:rgb(0, 0, 0);
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
    max-width: 800px;
    box-shadow: 0 5px 20px rgba(0, 208, 255, 0.2);
}

.pagina-subtitle {
    text-align: center;
    color: #C9C2BB;
    font-family: 'Orbitron', sans-serif;
    font-size: 15px;
    margin: 20px auto 40px;
    padding: 15px 25px;
    line-height: 1.8;
    background-color: #102031;
    border-left: 4px solid rgb(0, 208, 255);
    border-radius: 5px;
    max-width: 800px;
}

.builds-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 25px;
    padding: 20px;
    max-width: 1650px;
    margin: 0 auto;
}

.build-card {
    background-color: #062546;
    border: 2px solid rgb(0, 208, 255);
    border-radius: 10px;
    padding: 20px;
    width: 340px;
    color: white;
    font-family: 'Orbitron', sans-serif;
}

.build-header {
    text-align: center;
    margin-bottom: 15px;
    border-bottom: 2px solid rgb(0, 208, 255);
    padding-bottom: 12px;
}

.build-title {
    font-size: 22px;
    color: rgb(0, 208, 255);
    margin-bottom: 8px;
}

.build-price {
    font-size: 26px;
    color: #4CAF50;
    font-weight: bold;
}

.build-description {
    font-size: 13px;
    color: #d0d0d0;
    margin: 12px 0;
    line-height: 1.6;
    text-align: center;
    padding: 10px;
    background-color: transparent;
    border-radius: 5px;
    border-left: none;
}

.target-audience {
    font-weight: bold;
    color: rgb(0, 208, 255);
    display: block;
    margin-bottom: 5px;
}

.build-specs {
    margin: 15px 0;
}

.specificaties-item {
    margin: 10px 0;
    padding: 8px;
    background-color: #102031;
    border-radius: 5px;
    border-left: 3px solid rgb(0, 208, 255);
    font-size: 13px;
}

.specificaties-label {
    color: #C9C2BB; 
    font-size: 10px;
    display: block;
    margin-bottom: 3px;
}

.specificaties-value {
    color: white;
    font-size: 13px;
}

.build-button {
    width: 100%;
    padding: 12px;
    margin-top: 15px;
    border-radius: 10px;
    border: 0;
    background-color: rgb(52, 65, 253);
    letter-spacing: 1.5px;
    font-size: 14px;
    transition: all 0.3s ease;
    box-shadow: rgb(39, 49, 188) 0px 10px 0px 0px;
    color: white;
    cursor: pointer;
    font-family: 'Orbitron', sans-serif;
}

.build-button:hover {
    box-shadow: rgb(32, 20, 201) 0px 7px 0px 0px;
}

.build-button:active {
    background-color: rgb(24, 46, 170);
    box-shadow: rgb(30, 21, 155) 0px 0px 0px 0px;
    transform: translateY(5px);
    transition: 200ms;
}

.budget-tag {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 15px;
    font-size: 11px;
    margin-top: 8px;
}

.budget-low {
    background-color: #4CAF50;
    color: white;
}

.budget-mid {
    background-color: #FF9800;
    color: white;
}

.budget-high {
    background-color: #F44336;
    color: white;
}

.budget-ultra {
    background: linear-gradient(45deg, #FFD700, #FFA500);
    color: black;
    font-weight: bold;
}
  </style>
    <link rel="icon" href="foto/logo2.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Built PC's</title>
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

<h1 class="pagina-title">Pre-Built PC Configuraties</h1>
<p class="pagina-subtitle">Deze pagina is bedoeld voor iedereen die een idee wil krijgen van welk type computer je kunt bouwen voor elk budget. Ontdek welke configuratie het beste bij jou past!</p>

<div class="builds-container">

    <div class="build-card">
        <div class="build-header">
            <h2 class="build-title">Office Basic</h2>
            <div class="build-price">€350 - €450</div>
        </div>
        <div class="build-description">
            <span class="target-audience">Studenten & Kantoorwerk</span>
            Perfect voor office taken, browsen, en licht multimedia. Ideaal voor thuiswerk en school opdrachten.
        </div>
        <div class="build-specs">
            <div class="specificaties-item">
                <span class="specificaties-label">CPU</span>
                <span class="specificaties-value">Intel i3-12100 / AMD Ryzen 3 4100</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">RAM</span>
                <span class="specificaties-value">8GB DDR4 3200MHz</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">Opslag</span>
                <span class="specificaties-value">256GB NVMe SSD</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">GPU</span>
                <span class="specificaties-value">Integrated Graphics</span>
            </div>
        </div>
    </div>

    <div class="build-card">
        <div class="build-header">
            <h2 class="build-title">Light Gaming</h2>
            <div class="build-price">€500 - €650</div>
        </div>
        <div class="build-description">
            <span class="target-audience">Casual Gamers</span>
            Speel populaire games op medium settings bij 1080p. Geschikt voor e-sports titels en oudere AAA games.
        </div>
        <div class="build-specs">
            <div class="specificaties-item">
                <span class="specificaties-label">CPU</span>
                <span class="specificaties-value">AMD Ryzen 5 5600G / Intel i5-12400F</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">RAM</span>
                <span class="specificaties-value">16GB DDR4 3200MHz</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">Opslag</span>
                <span class="specificaties-value">500GB NVMe SSD</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">GPU</span>
                <span class="specificaties-value">GTX 1650 / RX 6500 XT</span>
            </div>
        </div>
    </div>

    <div class="build-card">
        <div class="build-header">
            <h2 class="build-title">Budget Gaming</h2>
            <div class="build-price">€700 - €900</div>
        </div>
        <div class="build-description">
            <span class="target-audience">Serieuze Gamers</span>
            Uitstekende 1080p gaming performance. Speel moderne games op hoge settings met goede framerates.
        </div>
        <div class="build-specs">
            <div class="specificaties-item">
                <span class="specificaties-label">CPU</span>
                <span class="specificaties-value">AMD Ryzen 5 5600 / Intel i5-13400F</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">RAM</span>
                <span class="specificaties-value">16GB DDR4 3600MHz</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">Opslag</span>
                <span class="specificaties-value">1TB NVMe SSD</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">GPU</span>
                <span class="specificaties-value">RTX 4060 / RX 7600</span>
            </div>
        </div>
    </div>

    <div class="build-card">
        <div class="build-header">
            <h2 class="build-title">Mid-Range Powerhouse</h2>
            <div class="build-price">€1000 - €1300</div>
        </div>
        <div class="build-description">
            <span class="target-audience">Hardcore Gamers</span>
            Vlotte 1440p gaming en streaming mogelijk. Maximale settings in bijna alle moderne games met hoge FPS.
        </div>
        <div class="build-specs">
            <div class="specificaties-item">
                <span class="specificaties-label">CPU</span>
                <span class="specificaties-value">AMD Ryzen 5 7600X / Intel i5-13600K</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">RAM</span>
                <span class="specificaties-value">32GB DDR5 5600MHz</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">Opslag</span>
                <span class="specificaties-value">1TB NVMe Gen4 SSD</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">GPU</span>
                <span class="specificaties-value">RTX 4070 / RX 7700 XT</span>
            </div>
        </div>
    </div>

    <div class="build-card">
        <div class="build-header">
            <h2 class="build-title">High-End Gaming</h2>
            <div class="build-price">€1500 - €1900</div>
        </div>
        <div class="build-description">
            <span class="target-audience">Enthusiasten</span>
            Superieure 1440p/4K gaming. Ray-tracing op ultra settings en VR-ready voor de beste experience.
        </div>
        <div class="build-specs">
            <div class="specificaties-item">
                <span class="specificaties-label">CPU</span>
                <span class="specificaties-value">AMD Ryzen 7 7800X3D / Intel i7-14700K</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">RAM</span>
                <span class="specificaties-value">32GB DDR5 6000MHz</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">Opslag</span>
                <span class="specificaties-value">2TB NVMe Gen4 SSD</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">GPU</span>
                <span class="specificaties-value">RTX 4070 Ti Super / RX 7900 XT</span>
            </div>
        </div>
    </div>

    <div class="build-card">
        <div class="build-header">
            <h2 class="build-title">Content Creator Pro</h2>
            <div class="build-price">€2000 - €2500</div>
        </div>
        <div class="build-description">
            <span class="target-audience">Creators & Editors</span>
            Video editing, 3D rendering, en streaming zonder compromissen. Multi-tasking op professioneel niveau.
        </div>
        <div class="build-specs">
            <div class="specificaties-item">
                <span class="specificaties-label">CPU</span>
                <span class="specificaties-value">AMD Ryzen 9 7900X / Intel i9-13900K</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">RAM</span>
                <span class="specificaties-value">64GB DDR5 5600MHz</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">Opslag</span>
                <span class="specificaties-value">2TB Gen4 SSD + 2TB HDD</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">GPU</span>
                <span class="specificaties-value">RTX 4080 / RX 7900 XTX</span>
            </div>
        </div>
    </div>

    <div class="build-card">
        <div class="build-header">
            <h2 class="build-title">Ultra Enthusiast</h2>
            <div class="build-price">€2800 - €3500</div>
        </div>
        <div class="build-description">
            <span class="target-audience">Elite Gamers</span>
            4K gaming op ultra settings met maximale FPS. De beste performance voor competitief gaming en streaming.
        </div>
        <div class="build-specs">
            <div class="specificaties-item">
                <span class="specificaties-label">CPU</span>
                <span class="specificaties-value">AMD Ryzen 9 7950X3D / Intel i9-14900K</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">RAM</span>
                <span class="specificaties-value">64GB DDR5 6400MHz</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">Opslag</span>
                <span class="specificaties-value">2TB Gen5 SSD + 2TB Gen4 SSD</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">GPU</span>
                <span class="specificaties-value">RTX 4090</span>
            </div>
        </div>
    </div>

    <div class="build-card">
        <div class="build-header">
            <h2 class="build-title">Workstation Beast</h2>
            <div class="build-price">€4000+</div>
        </div>
        <div class="build-description">
            <span class="target-audience">Professionals</span>
            Oneindige mogelijkheden voor 3D modeling, AI/ML, video productie. Enterprise-level prestaties.
        </div>
        <div class="build-specs">
            <div class="specificaties-item">
                <span class="specificaties-label">CPU</span>
                <span class="specificaties-value">AMD Threadripper / Intel Xeon</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">RAM</span>
                <span class="specificaties-value">128GB DDR5 ECC</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">Opslag</span>
                <span class="specificaties-value">4TB Gen5 SSD + 8TB Storage</span>
            </div>
            <div class="specificaties-item">
                <span class="specificaties-label">GPU</span>
                <span class="specificaties-value">RTX 4090 / Dual GPU Setup</span>
            </div>
        </div>
    </div>

</div>

 </body>
</html>
