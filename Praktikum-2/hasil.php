<?php
$proses= isset ($_POST['proses']) ? $_POST['proses'] : '';
$nama_pelanggan= isset ($_POST['nama']) ? $_POST['nama'] : '';
$produk= isset ($_POST['produk']) ? $_POST['produk'] : '';
$jumlah= isset ($_POST['jumlah']) ? $_POST['jumlah']: '';

if ($produk== "TV"){
    $_produk= 4200000;
}elseif ($produk=="Kulkas"){
    $_produk= 3100000;
}elseif ($produk=="Mesin Cuci"){
    $_produk= 3800000;
}

 echo 'Nama Customer : '.ucwords ($nama_pelanggan);
 echo '<br/>Produk Pilihan : '. $produk;
 echo '<br/>Jumlah Beli : '. $jumlah;
 echo '<br/>Total Belanja : Rp. '. (int)$jumlah*(int)$_produk. ',-';

 
?>