<?php

require ("../model/accountManager.php");
require '../entities/Account.php';

$AccountManager = new accountManager();


// POST for form's Input
if ($_POST) {
  $account = new Account(
    ['name' => htmlspecialchars($_POST['name']),
    'firstName' =>htmlspecialchars($_POST['firstName']),
    'amount' => htmlspecialchars($_POST['amount'])]);
    $AccountManager->add($account);
  }

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $AccountManager->delete($id);
    header("location:index.php");
  }

  $ShowAccount = $AccountManager->getShowAccount();
  foreach ($ShowAccount as $key => $value) {
    $ShowAccount[$key] = new Account($value);
  }

  if (isset($_POST['submitUpdate']) && isset($_POST['addMoney'])){
    // retrieve the object from the ID
    $update = $AccountManager->get($_POST['id']);
    // call function addCash
    $update->addCash($_POST['addMoney']);
    // update object
    $AccountManager->getUpdate($update);
  }


  if (isset($_POST['submitUpdate']) && isset($_POST['takeMoney'])){
    // retrieve the object from the ID
    $update = $AccountManager->get($_POST['id']);
    // call function takeCash
    $update->takeCash($_POST['takeMoney']);
    // update object
    $AccountManager->getUpdate($update);
  }



  // WITHDRAWAL
  // if(isset($_POST['amount'])){
  // $account = $AccountManager->getShowAccount($_POST['id']);
  //   $account->withdrawal($_POST['amount']);
  //   $AccountManager->withDrawalAccount($account);
  //   header('Location:index.php');
  // }

  include ("../views/indexVue.php");
