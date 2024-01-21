<?php 

class Produk {
	public $judul, 
		$penulis, 
		$penerbit;

	protected $diskon = 0;

	private $harga;


	public function __construct( $judul = "asal", $penulis = "asal", $penerbit = "asal", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function cetakharga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
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
	public $jmlhal;

	public function __construct($judul = "asal", $penulis = "asal", $penerbit = "asal", $harga = 0, $jmlhal = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlhal;
	}

	public function getInfoProduk() {
		$str = "Komik : ".parent::getInfoProduk()." - {$this->jmlhal} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public $wktmain;

	public function __construct($judul = "asal", $penulis = "asal", $penerbit = "asal", $harga = 0, $wktmain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->wktmain;
	}

	public function getDiskon( $diskon ){
		$this->diskon = $diskon;
	}

	public function getInfoProduk() {
		$str = "Game : ".parent::getInfoProduk()." ~ {$this->wktmain} Jam.";
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

$produk1 = new Komik( "Bukan Ragnarok", "Bukan Muhamad Luthfi Sadli", "Kami", 900000, 100);


$produk2 = new Game( "Ragnarok", "Muhamad Luthfi Sadli", "Saya", 1000000, 50);


$infoProduk = new CetakInfoProduk();
//Komik : Bukan Ragnarok | Bukan Muhamad Luthfi Sadli , Saya | (Rp. 900000) - 100 halaman
//Game : Ragnarok | Muhamad Luthfi Sadli , Kami | (Rp. Mahal) ~ 50 jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";

echo "<hr>";



$produk2->getDiskon(90);
echo $produk2->cetakharga();

//error karena $produk1 tidak memiliki method getDiskon
$produk1->getDiskon(90);
 ?>