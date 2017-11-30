<?php

class bookManager{

  // Constructeur

public function add(account $recovery ){
  $q = $this->getBdd()->prepare('INSERT INTO account(name, firstName, amount)
  VALUES(:name, :firstName, :amount)');

  // HERE Call Back Getters (getTitle...)
  $q->bindValue(':title', $recovery->getTitle());
  $q->bindValue('category', $recovery->getCategory(), PDO::PARAM_STR);
  $q->bindValue(':author', $recovery->getAuthor(), PDO::PARAM_STR);
  $q->bindValue(':available', $recovery->getAvailable(), PDO::PARAM_STR);


  $q->execute();
 }

 // Function to Show Book who was add previously

public function getShowBook(){
  $q = $this->getbdd()->query('SELECT * FROM book');
  $donnees = $q->fetchAll(PDO::FETCH_ASSOC);
  return $donnees;
}
}
