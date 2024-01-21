<?php 

class Produk {
	public $judul, 
		$penulis, 
		$penerbit, 
		$harga;


	public function __construct( $judul = "asal", $penulis = "asal", $penerbit = "asal", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}


	public function MaksaBeli() {
		return "Ayo Beli Dengan Harga $this->harga, dan Berjudul $this->judul";
		// menggunakan this-> untuk menambil variabel pada class yang sama
	}

}

$produk1 = new Produk( "Bukan Ragnarok", "Bukan Muhamad Luthfi Sadli", "Saya", 900000 );


$produk2 = new Produk( "Ragnarok", "Muhamad Luthfi Sadli", "Kami", "Mahal" );
$produk3 = new Produk();



echo "Produk 1 <br>
Judul : $produk1->judul <br>
penulis : $produk1->penulis <br>
penerbit : $produk1->penerbit <br>
harga : RP. $produk1->harga <br>"
. $produk1->MaksaBeli();
echo" <br> <br>
Produk 2 <br>
Judul : $produk2->judul <br>
penulis : $produk2->penulis <br>
penerbit : $produk2->penerbit <br>
harga : RP. $produk2->harga <br>
". $produk2->MaksaBeli();


 ?>