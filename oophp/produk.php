<?php


// jualan produk
//  komik
//  game

class Produk {

    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit =  "penerbit",
            $harga =  0;


   public function getLabel() {
    return "$this->penulis, $this->penerbit";
   }
}


// $produk1 = new produk();
// $produk1 -> judul = "naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2 -> judul = "god of war";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Pukul Setengah Lima";
$produk3->penulis = "Tsana";
$produk3->penerbit = "Gramedia";
$produk3->harga = 50000;

// var_dump($produk3);
// echo "Novel : $produk3->penulis, $produk3->penerbit";
// echo "<br>";

// echo $produk3->getLabel();

// echo "<hr>";

$produk4 = new produk();
$produk4->judul = "uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;


echo "Novel : " .  $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();




?>

<!--
    cara diatas sangat merepotkan apabila banyak produk 
    ada cara supaya cukup membuat 1 instan produk
    tapi jika ingin menambahkan detailnya, cukup menuliskan 
    pada parameter didalam classnya
    dengan cara constructor method 
    constructor method adalah method yang otomatis dipanggil 
    ketika sebuah class dibuat object atau instansiasinya

-->