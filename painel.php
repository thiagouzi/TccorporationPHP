<?php

 include("protect.php");





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
    <style>
        body{
            background-color: aqua;
            background-image: url("apresentacaodevendas.jpg");
            background-repeat: no-repeat;
        }
        h1{
            
            color: aliceblue;
            align-items: center;
            justify-content: center;
        }
        .titulo{
            align-items: center;
            justify-content: center;
            color: aliceblue;
            display: flex;
        }
        .sair{
            align-items: center;
            justify-content: center;
            color: aliceblue;
            display: flex;
            font-weight: 800;
        
        }
        .saiba{
            align-items: center;
            justify-content: center;
            color: aliceblue;
            display: flex;
            font-weight: 800; align-items: center;
            justify-content: center;
            color: aliceblue;
            display: flex;
            font-weight: 800;
            text-transform: uppercase;
        
            
            

        }
        .excluir{
            align-items: center;
            justify-content: center;
            color: aliceblue;
            display: flex;
            font-weight: 800; align-items: center;
            justify-content: center;
            color: brown ;
            display: flex;
            font-weight: 800;
            text-transform: uppercase;
           
            

        }
    </style>
</head>
<body>
    <h1 class="titulo">Bem-vindo ao painel!</h1>
<p>
    <a class="sair" href="logout.php">Sair</a>
</p>

<a class="excluir" href="index2.php?page=listar" style="color: #393f81;">EDITAR/EXCLUIR</a></p>

    

<a class="saiba" href="https://github.com/thiagouzi">Saiba mais Clicando aqui</a>




</body>

</html>