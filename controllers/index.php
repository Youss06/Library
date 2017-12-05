<?php
require ("../model/bookManager.php");
require ("../model/userManager.php");
require '../model/init.php';
require '../entities/book.php';
require '../entities/user.php';



$BookManager = new bookManager;
$manager = new bookManager($bd);

if (isset($_POST['available'])) {
  $book = new Book(
    ['title' => htmlspecialchars($_POST['title']),
    'category' =>htmlspecialchars($_POST['category']),
    'author' => htmlspecialchars($_POST['author']),
    'available' => htmlspecialchars($_POST['available'])
  ]);
    $BookManager->add($book);
  }

  $ShowBook = $BookManager->getShowBook();
  foreach ($ShowBook as $key => $value) {
    $ShowBook[$key] = new Book($value);
  }


$UserManager = new userManager;

  $ShowUser = $UserManager->getUser();
  foreach ($ShowUser as $key => $value) {
    $ShowUser[$key] = new User($value);
  }


  if (isset($_GET['id'])) {
    # code...
    $id = $_GET['id'];
    $summary = $BookManager->ShowSummary($id);
    $book = new Book($summary);
  }




  if(isset($_POST['search']))
{
  $donnees = $manager->try($_POST['sort']);
}


  include ("../views/indexVue.php");
  ?>
