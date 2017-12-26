<?php
try 
{
$wpbd=new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8','root','');
  // set the PDO error mode to exception
    $wpbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e) {

die('Erreur de connexion'); }

