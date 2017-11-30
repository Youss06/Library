<?php

// Connect to DataBase
try
{
  $db = new PDO('mysql:host=localhost;dbname=exobanque;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
