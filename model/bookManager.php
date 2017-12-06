<?php

class bookManager{

protected $bd;



  public function getBdd(){
    $bd = new PDO('mysql:host=localhost;dbname=Library', 'root', 'root');
    return $bd;
  }

  // Constructeur

public function add(book $recovery ){
  $q = $this->getBdd()->prepare('INSERT INTO Book(title, category, author, available, summary)
  VALUES(:title, :category, :author, :available, :summary)');

  // HERE Call Back Getters (getTitle...)
  $q->bindValue(':title', $recovery->getTitle());
  $q->bindValue('category', $recovery->getCategory(), PDO::PARAM_STR);
  $q->bindValue(':author', $recovery->getAuthor(), PDO::PARAM_STR);
  $q->bindValue(':available', $recovery->getAvailable(), PDO::PARAM_STR);
  $q->bindValue(':summary', $recovery->getSummary(), PDO::PARAM_STR);


  $q->execute();
 }

 // Function to Show Book who was add previously

public function getShowBook(){
  $q = $this->getbdd()->query('SELECT * FROM Book');
  $donnees = $q->fetchAll(PDO::FETCH_ASSOC);
  return $donnees;
}

public function ShowSummary($id){
    $q = $this->getBdd()->prepare ('SELECT * FROM Book WHERE id = :id');

    $q->execute(array('id' => $id));
    $data = $q->fetch();
    return $data;
}




public function try($category)
      {
       $req = $this->getBdd()->prepare('SELECT * FROM Book WHERE category = :category');
        $req->bindValue(':category', $category);
        $req->execute();
        $ShowBook = $req->fetchAll(PDO::FETCH_ASSOC);
       foreach ($ShowBook as $key => $value)
        {
          $ShowBook[$key] = new book($value);

        }
        return $ShowBook;
      }


}
