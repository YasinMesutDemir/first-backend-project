<?php

include_once('database.php');
session_start();
unset($_SESSION['error']);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM gebruikers WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user !== false) {
        $_SESSION['loggedInUser'] = $user['id'];
        header("Location: index.php");
        die();
    }

    $_SESSION['error'] = "Gebruikersnaam of wachtwoord is ongeldig.";
}

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
  border: 1px solid rgb(0, 208, 255);
}

body {
    background-color:rgb(0, 0, 0);
    background-image: url('foto/background-builder.png');
    background-size: cover;
}

a {
    text-decoration: none;
    color: #d6d2cf;
}

.form {
  background-color: black;
  border: 1px solid rgb(0, 208, 255);
  display: block;
  padding: 1rem;
  max-width: 350px;
  border-radius: 0.5rem;
  box-shadow: 0 10px 30px 10px rgba(0, 0, 0, 0.1), 0 10px 10px -10px rgba(0, 0, 0, 0.05);
  margin-left: 40%;
  margin-top: 12%;
  background-color:rgb(23, 38, 54);
}

.form-title {
  font-size: 1.25rem;
  line-height: 1.75rem;
  font-weight: 600;
  text-align: center;
  color: #000;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: white;
}

.input-container {
  position: relative;
}

.input-container input, .form button {
  outline: none;
  border: 1px solid #e5e7eb;
  margin: 8px 0;
  border: 1px solid rgb(0, 208, 255);
}

.input-container input {
  background-color: #fff;
  padding: 1rem;
  padding-right: 3rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  width: 81%;
  border-radius: 0.5rem;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

.submit {
  display: block;
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  background-color:rgb(13, 25, 27);
  color:rgb(255, 255, 255);
  font-size: 0.875rem;
  line-height: 1.25rem;
  font-weight: 500;
  width: 100%;
  border-radius: 0.5rem;
  text-transform: uppercase;
  border: 1px solid rgb(41, 55, 58);
}

.signup-link {
  color: #6B7280;
  font-size: 0.875rem;
  line-height: 1.25rem;
  text-align: center;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.signup-link a {
  text-decoration: underline;
  color:rgb(255, 255, 255);
}

</style>
    <link rel="icon" href="foto/logo2.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<div class="container">
    <form method="POST">
    <table class="knoppen-boven">
  <tr>
    <td><a href="index.php"><img src="foto/logo2.jpg" height="60"></a></td>
    <td style="padding-left: 36%; white-space: nowrap;"><h1 style="margin: 0; color: white;">Welkom Bij Pc Builder!</h1></td>
    <td style="text-align: right; width: 100%;">
    <div style="display: inline-block; padding: 5px 10px;"><a href="logout.php"></a></div></td>
  </tr>
  </table>
  </form>
</div>

<form class="form" method="POST">
       <p class="form-title">Login in je Account!</p>
        <div class="input-container">
          <input type="text" name="username" placeholder="Vul in gebruikersnaam">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="password" name="password" placeholder="Vul in wachtwoord"></div>
         <button type="submit" class="submit">Login</button>

      <p class="signup-link">Geen account? <a href="registreer.php">registreer</a></p>
   </form>
