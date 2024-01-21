<?php 

class Produk {
	public $judul = "asal", 
		$penulis = "asal", 
		$penerbit = "asal", 
		$harga = 500;

	public function MaksaBeli() {
		return "Ayo Beli Dengan Harga $this->harga, dan Berjudul $this->judul";
		// menggunakan this-> untuk menambil variabel pada class yang sama
	}

}

$produk1 = new Produk();

	$produk1 -> judul = "Bukan Ragnarok";
	$produk1 -> penulis = "Bukan Muhamad Luthfi Sadli";
	$produk1 -> penerbit = "Saya";
	$produk1 -> harga = 900000;


$produk2 = new Produk();

	$produk2 -> judul = "Ragnarok";
	$produk2 -> penulis = "Muhamad Luthfi Sadli";
	$produk2 -> penerbit = "Kami";
	$produk2 -> harga = "Mahal";

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