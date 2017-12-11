<?php

class userManager {

  public function getBdd(){
    $bd = new PDO('mysql:host=localhost;dbname=Library', 'root', 'root');
    return $bd;
  }

  public function getUser(){
    $q = $this->getbdd()->query('SELECT * FROM User');
    $donnees = $q->fetchAll(PDO::FETCH_ASSOC);
    return $donnees;
  }
}
