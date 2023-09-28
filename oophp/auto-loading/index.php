<?php 

require_once 'App/init.php';

$produk1 = new Komik("Pukul Setengah Lima", "Tsana", "Gramedia", 50000, 100);
$produk2 = new Game("Uncharted", "Neil Duckmann", "Sony Computer", 250000,100);

$cetakProduk = new CetakInfoPRoduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);
echo $cetakProduk->cetak();


echo "<hr>";

new Coba
?>
