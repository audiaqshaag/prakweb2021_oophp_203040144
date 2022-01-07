<?php
// Jualan Produk
// Komik
// Game

class Produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;

    }

    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }
}

class CetakInfoProduk{
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto","Masashi Kishimoto","Shoonen Jump",30000);


$produk2 = new Produk();
$produk2->judul= "Uncharted";
$produk2->penulis= "Neil Druckmann";
$produk2->penerbit="Sony Computer";
$produk2->harga=250000;


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game  : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);
?>