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


class CetakInfoProduk {
	
	// menambahkan class produk di depan variabel untuk hnya bisa di gunakan pada objek yang ada d class produk tersebut
	public function cetak( Produk $produk ){

		$str = "{$produk->judul} | {$produk->penulis} , {$produk->penerbit} | Rp. {$produk->harga}, {$produk->MaksaBeli()}";
		return $str;
	}
}

$produk1 = new Produk( "Bukan Ragnarok", "Bukan Muhamad Luthfi Sadli", "Saya", 900000 );


$produk2 = new Produk( "Ragnarok", "Muhamad Luthfi Sadli", "Kami", "Mahal" );


$infoProduk = new CetakInfoProduk();
echo "Komik : ".$infoProduk->cetak($produk1);
echo "<br>";
echo "Game : ".$infoProduk->cetak($produk2);

// error karena bukan dari class $Produk
echo $infoProduk->cetak("kocak");


 ?>