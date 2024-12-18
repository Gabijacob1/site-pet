<?php
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>P&P - Cadastro</title>
        <link
      rel="stylesheet"
      href="https://assets.codepen.io/7773162/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
    <link rel="website icon" type="png" href="osso.png"> 
    <style>
       body{
        font-family:arial, sans-serif;
        margin: 0;
        padding: 0;
        color: #fff;
       }

       .container {
        width: 50%;
        margin: 0 auto;
       }

       h1, h2 {
        text-align:center;
        color: #333;
       }

       form {
        width: 30%;
        margin-top:5%;
        margin-left: 35%;
        background-color: #333;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
       }
       label {
        font-weight: bold;
        color: #999;
       }

      input[type="text"] {
        margin-top: 5px;
        background-color: #413e3e50;
        width: 100%;
        padding: 8px;
        margin-bottom:10px;
        box-sizing: border-box;
        border-radius: 8px;
        border: 1px solid #555;
        background-color: #444;
        color: #fff;
       }

       input[type="radio"] {      
        margin-bottom: 20px;
        margin-top: 8px;
       }

       input[type="submit"] {
        background: #ff5b79;;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
       }
       input[type="submit"]:hover {
        background-color: #ff5b79;;
       }

    </style>
    </head>
    <body>
        <h1 style="color: #fff; margin-top: 3%">Sistema de Cadastro</h1>
        <form action="add.php" method="post">
            <label for="name">Nome do pet: </label>
            <br>
            <input type="text" name="name" id="name">
            <br><br>
            <label for="especie">Especie: </label>
            <br>
            <input type="text" name="especie" id="especie">
            <br><br>
            <label for="raca">Raca: </label>
            <br>
            <input type="text" name="raca" id="raca">
            <br><br>
            <label for="dono">Dono: </label>
            <br>
            <input type="text" name="dono" id="dono">
            <br><br>
            <p>Genero:</p>
            <br>
            <input type="radio" name="sexo" id="sexo_m" value="m"style="margin-left: 5px;">
            <label for="sexo_m">Masculino </label>
            <input type="radio" name="sexo" id="sexo_f" value="f" style="margin-left: 30%;">
            <label for="sexo_f">Feminino </label>
            
            <br><br>
            <label for="idade">Data de Nascimento: </label>
            <br>
            <input type="text" name="idade" id="idade" placeholder="dd/mm/YYYY">
            <br><br>
            <input class="login" type="submit" value="Cadastrar">
        </form>
    </body>
</html>
