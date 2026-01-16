<?php 

require 'database.php';

session_start();
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
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

.builder {
    text-align: center;
    padding-left: 39.75%;
    padding-right: 39.75%;
    padding-top: 2%; 
    padding-bottom: 18%;  
    border: 2px solid rgb(0, 208, 255);
    border: flex;
    margin-top: 1%;
    border-radius: 5px;
    font-family: 'Orbitron', sans-serif;
    background-color: #062546;
    color: white;
    font-size: 30px;
}

.browse {
    margin: -60%;
    padding: -60%;
    font-size: 15px;
    text-align: center;
}

.build {
    margin-bottom: -4%;
    padding-bottom: -4%;
}

button {
    padding-top: 5%;
    padding: 17px 40px;
    border-radius: 10px;
    border: 0;
    background-color: rgb(52, 65, 253);
    letter-spacing: 1.5px;
    font-size: 15px;
    transition: all 0.3s ease;
    box-shadow: rgb(39, 49, 188) 0px 10px 0px 0px;
    color: hsl(0, 0%, 100%);
    cursor: pointer;
  }
  
  button:hover {
    box-shadow: rgb(32, 20, 201) 0px 7px 0px 0px;
  }
  
  button:active {
    background-color: rgb(24, 46, 170);
    box-shadow: rgb(30, 21, 155) 0px 0px 0px 0px;
    transform: translateY(5px);
    transition: 200ms;
  }

.onderdelen {
  color: white;
  margin-top: 1%;
  border: 1px solid rgb(0, 208, 255);
  width: 100%;
  text-align: center;
  border-radius: 5px;
  border-spacing: 0;
  border-collapse: separate;
}

.onderdelentr, .tdonderdeel {
  text-align: center;
}

.tdonderdeel {
  text-align: center;
  border: 1px solid rgb(0, 208, 255);
  padding: 1%;
  font-family: 'Orbitron', sans-serif;
}

.tdonderdeel2 {
  border: 1px solid rgb(0, 208, 255);
}

select, .radio {
  background-color: #102031;
  color: #C9C2BB;
  border: none;
  font-size:medium;
  font-family: 'Orbitron', sans-serif;
}
 </style>

    <link rel="icon" href="logo.png" type="image/x-icon">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pc Builder</title>
</head>
<body>  

    <table class="knoppen-boven">
  <tr>
    <td><a href="index.php"><img src="foto/logo2.jpg" height="60"></a></td>
    <td style="padding-right: 10px; "><form method="GET" action="onderdelen.php" >
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
      </select></form></td>
    <td style="padding-right: 20px;"><a href="Builds.php">Builds</a></td>           
    <td style="padding-right: 20px;"><a href="informatie.php">Informatie</a></td>
    
    <td style="text-align: right; width: 100%;"><div style="display: inline-block; padding: 5px 10px;"><a href="logout.php">Uitloggen</a></div></td>
  </tr>
</table>

<div>
    <table style="background-image: url('foto/background-builder.png'); background-size: cover;" class="builder">
        <tr>
            <td>
                <h1 class="build">Welkom bij: Build Your Pc!</h1>
            </td>
        </tr>
        <tr>
          <td><a class="browse">Browse door de webshop, En hulp met het compatibiliteit van je pc</a></td>
        </tr>
        <tr>
           <td style="padding-top: 20px;"><form action="onderdelen.php?part=cpu" method="POST"><button id="builder" type="submit" name="builder">Start met browsen!</button></form></td>
        </tr>
    </table>
  </div>

  <div>
    <table style="background-image: url('foto/background-onderdelen.png'); background-size: cover; background-position: center;" class="onderdelen">
      <tr class="onderdelentr">
        <td class="tdonderdeel"><a href="onderdelen.php?part=cpu">Cpu</a></td>
        <td class="tdonderdeel"><a href="onderdelen.php?part=gpu">Gpu</a></td>
        <td class="tdonderdeel"><a href="onderdelen.php?part=motherboard">Motherboard</a></td>
        <td class="tdonderdeel"><a href="onderdelen.php?part=ram">Ram</a></td>
        <td class="tdonderdeel"><a href="onderdelen.php?part=storage">Storage</a></td>
        <td class="tdonderdeel"><a href="onderdelen.php?part=cases">Cases</a></td>
        <td class="tdonderdeel"><a href="onderdelen.php?part=psu">Psu</a></td>
        <td class="tdonderdeel"><a href="onderdelen.php?part=coolers">Coolers</a></td>
      </tr>
      <tr>
        <td class="tdonderdeel2"><a href="onderdelen.php?part=cpu"><img src="foto/onderdelen-cpu.png" alt="Cpu" style="height: 200px;"></a></td>
        <td class="tdonderdeel2"><a href="onderdelen.php?part=gpu"><img src="foto/onderdelen-gpu.png" alt="gpu" style="height: 200px;"></a></td>
        <td class="tdonderdeel2"><a href="onderdelen.php?part=motherboard"><img src="foto/onderdelen-motherboard.png" alt="moederbord" style="height: 200px;"></a></td>
        <td class="tdonderdeel2"><a href="onderdelen.php?part=ram"><img src="foto/onderdelen-ram.png" alt="ram" style="height: 200px;"></a></td>
        <td class="tdonderdeel2"><a href="onderdelen.php?part=storage"><img src="foto/onderdelen-storage.png" alt="storage" style="height: 200px;"></a></td>
        <td class="tdonderdeel2"><a href="onderdelen.php?part=cases"><img src="foto/onderdelen-cases.png" alt="cases" style="height: 200px;"></a></td>
        <td class="tdonderdeel2"><a href="onderdelen.php?part=psu"><img src="foto/onderdelen-psu.png" alt="psu" style="height: 200px;"></a></td>
        <td class="tdonderdeel2"><a href="onderdelen.php?part=coolers"><img src="foto/onderdelen-coolers.png" alt="Cooler" style="height: 200px;"></a></td>
      </tr>
    </table>
  </div>
</body>
</html>

