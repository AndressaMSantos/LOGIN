<?php
    session_start();
    if(isset($_SESSION['login']) != true)
        header("Location: login.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Restrita </title>
</head>
<body style="background-Color:#6d1dd6">
    <h1 style="color:orange"> Olá !!!<h1>
        <h3 style="color:rgb(255, 230, 0)"> É Muito Bom te ver Novamente :) <h3>
</body>
</html>