<?php

class Mobil {

    public  $namaMobil,
            $merk,
            $warna,
            $kecepatanMaksimal,
            $jumlahPenumpang;

            

   public function tambahKecepatan() {
    return "kecepatan Bertambah!";
   }
}


    class mobilSport extends Mobil {
        public $turbo = false;

        public function jalankanTurbo() {
            $this->turbo = true;
            return "Turbo dijalankan!";
        }

    }
$mobil1 = new MobilSport();
echo $mobil1->tambahKecepatan();
echo "<br>";
echo $mobil1->jalankanTurbo();


?>




<!-- 
class mobilSport extends Mobil artinya adalah membuat class baru dari child class mobil yang didalamnya mempunyai properti turbo dan jalankan turbo 

$mobil1 = new MobilSport();
echo $mobil->tambahKecepatan();
echo "<br>";
echo $mobil1->jalankanTurbo();

instan dari class mobil sport
namun class mobil sport masih bisa menggunakan
method class punya parentnya 
contohnya : echo $mobil->tambahKecepatan();
dimana tambahKecepatan punyanya class mobil
dan kalian bisa panggil jalankan turbo karena
dia milik class mobil sport itu sendiri.


-->