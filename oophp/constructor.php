<?php


// jualan produk
//  komik
//  game

class Produk {

    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit ", $harga = 0 ) {

        
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }
            
            


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

$produk1 = new Produk("Pukul Setengah Lima", "Tsana", "Gramedia", 50000);
$produk2 = new produk("Uncharted", "Neil Duckmann", "Sony Computer", 250000);
$produk3 = new produk("dragon ball");


// var_dump($produk3);
// echo "Novel : $produk3->penulis, $produk3->penerbit";
// echo "<br>";

// echo $produk3->getLabel();

// echo "<hr>";




echo "Novel : " .  $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);





?>
 <!-- jika ingin memberi nilai default , bisa diberi dibagian constructornya saja -->