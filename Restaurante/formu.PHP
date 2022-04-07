<?php
$nome = isset($_POST["nome"])?$_POST["nome"]:"Desconhecido";
$email = isset($_POST["email"])?$_POST["email"]:"Desconhecido";
$telefone = isset($_POST["telefone"])?$_POST["telefone"]:00000000000;
$CPF = isset($_POST["CPF,"])?$_POST["CPF"]:"00000000000";
$Estado = isset($_POST["Estado"])?$_POST["Estado"]:"Desconhecido";
$cidade = isset($_POST["cidade"])?$_POST["cidade"]:"Desconhecido";
$Comentario = isset($_POST["Comentario"])?$_POST["Comentario"]:"Desconhecido";


echo "$nome + $email + $telefone + $CPF + $Estado + $cidade + $Comentario";




?>