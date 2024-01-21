<?php 

class Produk {
	public $judul, 
		$penulis, 
		$penerbit, 
		$harga,
		$jmlhal,
		$wktmain;


	public function __construct( $judul = "asal", $penulis = "asal", $penerbit = "asal", $harga = 0, $jmlhal = 0, $wktmain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhal = $jmlhal;
		$this->wktmain = $wktmain;
	}


	public function Label() {
		return "$this->penulis, $this->penerbit";
		// menggunakan this-> untuk menambil variabel pada class yang sama
	}

	public function getInfoProduk(){
		//Komik : Bukan Ragnarok | Bukan Muhamad Luthfi Sadli , Saya | (Rp. 900000) - 100 halaman
		$str = "{$this->judul} | {$this->Label()} | (Rp. {$this->harga})";
		return $str;
	}

}

class Komik extends Produk {
	public function getInfoProduk() {
		$str = "Komik : {$this->judul} | {$this->Label()} | (Rp. {$this->harga}) - {$this->jmlhal} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->Label()} | (Rp. {$this->harga}) ~ {$this->wktmain} Jam.";
		return $str;
	}
}


class CetakInfoProduk {
	
	// menambahkan class produk di depan variabel untuk hnya bisa di gunakan pada objek yang ada d class produk tersebut
	public function cetak( Produk $produk ){

		$str = "{$produk->judul} | {$produk->Label()} | Rp. {$produk->harga}";
		return $str;
	}
}

$produk1 = new Komik( "Bukan Ragnarok", "Bukan Muhamad Luthfi Sadli", "Kami", 900000, 100, 0);


$produk2 = new Game( "Ragnarok", "Muhamad Luthfi Sadli", "Saya", "Mahal", 0, 50);


$infoProduk = new CetakInfoProduk();
//Komik : Bukan Ragnarok | Bukan Muhamad Luthfi Sadli , Saya | (Rp. 900000) - 100 halaman
//Game : Ragnarok | Muhamad Luthfi Sadli , Kami | (Rp. Mahal) ~ 50 jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo "komik : " .$infoProduk->cetak($produk1);
 ?>