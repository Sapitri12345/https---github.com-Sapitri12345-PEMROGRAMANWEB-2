<?php
require_once 'accountBank.php';


$a1 = new AccountBank("C001", 6000000, "Ahmad");
$a2 = new AccountBank("C002", 5350000, "Budi");
$a3 = new AccountBank("C003", 2500000, "Kurniawan");

$a1->cetak();
echo '<br><hr><br/>';
$a2->cetak();
echo '<br><hr><br/>';
$a3->cetak();
echo '<br><hr><hr>';

$a1->cetak();
$a1->deposit(1000000);
echo '<br/> Nabung 1000000<hr>';
$a1->cetak();
echo '<br><hr><hr>';

$a1->cetak();
echo '<br> Ahmad transfer uang ke Kurniawan 1500000<br/>';
echo 'Biaya Admin : '.AccountBank::$biaya_admin. '<br/>';
$a1->transfer($a3, 1500000);
$a3->cetak();
echo '<hr>';
$a1->cetak();
echo '<br><hr><hr>';

$a1->cetak();
echo '<br> Ahmad transfer uang ke Budi 500000<br/>';
echo 'Biaya Admin : '.AccountBank::$biaya_admin. '<br/>';
$a1->transfer($a2, 500000);
$a2->cetak();
echo '<hr>';
$a1->cetak();
echo '<br><hr><hr>';

$a2->cetak();
$a2->penarikan(2500000);
echo '<br/> Mengambil Uang 2500000<hr>';
$a2->cetak();

?>