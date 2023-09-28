<?php

interface InfoProduk {
    public function getInfoProduk(); 
}

abstract class Produk {

    protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit ",
     $harga = 0) {

        
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function setJudul($judul) {
        // if(!is_string($judul)) {
        //     throw new Exception("Judul Harus String");
        // }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }
     
    public function setDiskon ($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon () {
        return $this->diskon;
    }


    public function setHarga($harga) {
        $this->harga = $harga;
    }


    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }       


   public function getLabel() {
    return "$this->penulis, $this->penerbit";
   }
  
   abstract public function getInfo();
   


}



class Komik extends Produk implements InfoProduk{ 
    public $jmlHalaman;


    public function __construct($judul, $penulis, $penerbit,$harga, $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfo() {

        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    
        return $str;
    
    
       }

    public function getInfoProduk() {
    $str = "Komik : " . $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk implements InfoProduk {
    public $waktuMain;
    public function __construct($judul, $penulis, $penerbit,$harga, $waktuMain) {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
    }

    public function getInfo() {

        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    
        return $str;
    
    
       }
   

    public function getInfoProduk() {
        $str = "Game : ". $this->getInfo() ." - {$this->waktuMain} Jam.";
        return $str;
    }
}


class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak () {
        $str = "DAFTAR PRODUK : <br>";


        foreach( $this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}




$produk1 = new Komik("Pukul Setengah Lima", "Tsana", "Gramedia", 50000, 100);
$produk2 = new Game("Uncharted", "Neil Duckmann", "Sony Computer", 250000,100);

$cetakProduk = new CetakInfoPRoduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);
echo $cetakProduk->cetak();




?>


<!-- 
interface (1)

- interface termasuk kelas abstrak yang sama sekali tidak memiliki implementasi
- kelas interface adalah kelas yang murni merupakan template untuk kelas turunannya
- tidak boleh memiliki property, hanya deklarasi method saja
- semua method harus dideklarasikan dengan visibility public
- boleh mendeklarasikan __construct()
- satu kelas boleh mengimplementasikan banyak interface

interface (2)
- dengan menggunakan type-hinting dapat melakukan 'dependency injection'
- pada akhirnya akan mencapai polymorphism



contoh kelas abstrak

abstract class buah {  //class abstract
    private $warna;

    abstract public function makan(); // method abstract || hanya interfacenya saja || implementasinya ada dikelas turunannya

    public function setWarna($warna) {
        $this->warna = $warna;
    }
}

kelas turunannya

class Apel extedns Buah {
    public function makan() {
        //kunyah
        //sampai bagian tengah
    }
}


class Jeruk extends Buah {
    public function makan() {
        // kupas
        // kunyah
    }
}


dari contoh diatas adalah, kita tidak bisa membuat instans dari kelas buah.
karena kelas buah adalah abstract, kita hanya bisa membuat instans dari kelas turunannya
yang dimana ada Apel dan Jeruk.

cara mengubah kode yang sudah dibuat menjadi interface??
caranya hanya dengan menambahkan keyword interface didepannya saja..

contoh :

interface benda {
    public function setUkuran($ukuran);
}

interface Buah {
    public function makan();
    public function setWarna($warna);
}

contoh kelas apel implementasi buah

class Apel implements Buah {
    protected $warna;
    public function makan() {
        // kunyah
        // sampai bagian tengah
    }
    public function setWarna($warna) {
        $this->warna=$warna;
    }
}

begitu pula dengan kelas jeruk

class Jeruk implements Buah {
    protected $warna;
    public function makan() {
        // kupas
        // kunyah
    }
    public function setWarna($warna) {
        $this->warna=$warna;
    }
}

jika diimplementasikan benda ke class Apel maka hasinya :

class Apel implements Buah, benda{
    protected $warna;
    protected $ukuran;
    public function makan() {
        // kunyah
        // sampai bagian tengah
    }
    public function setWarna($warna) {
        $this->warna=$warna;
    }
    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

-->