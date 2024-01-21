<?php 

class Produk {
	private $judul, 
		$penulis, 
		$penerbit,
		$harga,
		$diskon = 0;

	public function __construct( $judul = "asal", $penulis = "asal", $penerbit = "asal", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function setDiskon( $diskon ){
		$this->diskon = $diskon;
	}

	public function getDiskon(){
		return $this->diskon."%";
	}

	public function setHarga( $harga ){
		$this->harga = $harga;
	}

	public function getHarga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	
	public function setJudul( $judul ){
		$this->judul=$judul;
	}

	public function getJudul(){
		return $this->judul;
	}

	public function setPenulis( $penulis ){
		$this->penulis=$penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit( $penerbit ){
		$this->penerbit=$penerbit;
	}

	public function getPenerbit(){
		return $this->penerbit;
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



$produk2->setDiskon(70);
echo "Harga game : ".$produk2->getHarga();
echo " dengan diskon : ". $produk2->getDiskon();
echo "<hr>";
$produk1->setJudul("Terbaru Nih");
echo $produk1->getJudul();
echo "<hr>";
$produk2->setPenulis("Kocak bet dah");
echo $produk2->getPenulis();
 ?>