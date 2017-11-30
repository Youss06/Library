<?php
require ("../model/bookManager.php");
require '../entities/book.php';

$BookManager = new bookManager;

if ($_POST) {
  $account = new Account(
    ['name' => htmlspecialchars($_POST['name']),
    'firstName' =>htmlspecialchars($_POST['firstName']),
    'amount' => htmlspecialchars($_POST['amount'])]);
    $AccountManager->add($account);
  }








  include ("../views/indexVue.php");
  ?>
