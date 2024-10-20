<?php


class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlhalaman,
            $waktumain,

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0) {
        $this -> $judul = $judul;
        $this -> $penulis = $penulis;
        $this -> $penerbit = $penerbit;
        $this -> $harga = $harga;
        $this -> $jmlhalaman = $jmlhalaman;
        $this -> $waktumain = $waktumain;

    }
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str ="{$this->tipe} : {$this->penulis} | {$this->getLabel()} (Rp. {$this -> harga} {$this -> jmlhalaman} Halaman.";
    if($this->tipe == "Komik") {
        $str .= " - {$this->jmlhalaman} Halaman.";
    } elseif ($this -> tipe == "Game"){
        $str .= " - {$this->waktumain} Jam.";
    }
    }


}



class Komik extends Produk {
    public function getInfoProduk () {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this-> jmlHalaman} Halaman.";
    return $str;
    }
    }

    
class Game extends Produk {
    public function getInfoProduk () {
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} ~ {$this->waktuMain})
    Jam.";
    return $str;
    }
    }

    
class CetakInfoProduk {
    public function cetak( Produk $produk) {
        $str = "{$produk->$judul} | {$produk->getLabel()}, (RP. {$produk->$harga})";
        return $str;
    }

    return $str;
}




$produk1 = new Produk("Naruto", "Masashi Kishimoto","Shonen Jump", 30000, 100); 
$produk2= new Produk("Uncharted", "Neil Druckman", "Sony Computer",250000, 50);

echo "Komik : " . $produk1->getLabel(); 
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";



$InfoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
