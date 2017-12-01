<?php
require ("../model/bookManager.php");
require '../model/init.php';
require '../entities/book.php';


$BookManager = new bookManager;

if ($_POST) {
  $book = new Book(
    ['title' => htmlspecialchars($_POST['title']),
    'category' =>htmlspecialchars($_POST['category']),
    'author' => htmlspecialchars($_POST['author']),
    'available' => htmlspecialchars($_POST['available'])]);
    $BookManager->add($book);
  }

  $ShowBook = $BookManager->getShowBook();
  foreach ($ShowBook as $key => $value) {
    $ShowBook[$key] = new Book($value);
  }


  if (isset($_GET['id'])) {
    # code...
    $id = $_GET['id'];
    $summary = $BookManager->ShowSummary($id);
    //transformer $datailVehicule [] -> object car_manager
    $summ = new Summ($summary);
  }


  include ("../views/indexVue.php");
  ?>
