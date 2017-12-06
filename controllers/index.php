<?php
require ("../model/bookManager.php");
require ("../model/userManager.php");
require '../model/init.php';
require '../entities/book.php';
require '../entities/user.php';



$BookManager = new bookManager();
// $manager = new bookManager($bd);

if (isset($_POST['available'])) {
  $book = new Book(
    ['title' => htmlspecialchars($_POST['title']),
    'category' =>htmlspecialchars($_POST['category']),
    'author' => htmlspecialchars($_POST['author']),
    'available' => htmlspecialchars($_POST['available']),
    'summary' => htmlspecialchars($_POST['summary'])
  ]);
    $BookManager->add($book);
  }

  $ShowBook = $BookManager->getShowBook();
  foreach ($ShowBook as $key => $value) {
    $ShowBook[$key] = new book($value);
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
  $ShowBook = $BookManager->try($_POST['category']);
}


  include ("../views/indexVue.php");
  ?>
