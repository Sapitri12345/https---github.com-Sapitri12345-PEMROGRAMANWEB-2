<?php
require_once "acount.php";

$ac1 = new Account("C001", 6000000);
$ac2 = new Account("C002", 5000000);
$ac3 = new Account("C003", 4000000);

$ac1->cetak();
$ac1->deposit(75000);
echo '<br/> Nabung 75000 <br/>';
$ac1->cetak();
echo '<br/>';
echo '<hr>';
$ac1->cetak();
$ac1->penarikan(150000);
echo '<br/> Melakukan Penarikan 150000 <br/>';
$ac1->cetak();
?>