<?php

declare(strict_types=1);

require '../vendor/autoload.php';

$htmlStart = file_get_contents('layouts/htmlStart.html');
echo($htmlStart);


$loginContent = file_get_contents('templates/login.html');

$loginContent = str_replace('${test}','affe', $loginContent);

echo($loginContent);

require_once ('../src/classes/BankAccount.php');
$o1 = new BankAccount();
$o1->bankBalance = 62729;
$o1->accountType = 'Sparbuch';

require_once('../src/classes/Customer.php');

$o2 = new Customer();
$o2->fName ='Max';
$o2->lName ='Mustermann';
$o2->age =20;
$o2->sex ='männlich';
$o2->street = 'Münchnerstraße';
$o2->houseNumber = 10;
$o2->city ='München';
$o2->postCode = 80331;

require_once('../src/classes/BankData.php');

$o3 = new BankData();
$o3->bankName = 'Volksbank Oberteuringen-Meckenbeuren';
$o3->iban = 'DE098 90808 098098 36';
$o3->bic = 'GEN10OPE35F';


$htmlEnd = file_get_contents('layouts/htmlEnd.html');
echo($htmlEnd);

var_dump($o1);
var_dump($o2);
var_dump($o3);

