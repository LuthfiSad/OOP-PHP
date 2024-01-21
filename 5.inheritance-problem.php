<?php 

class Produk {
	public $judul, 
		$penulis, 
		$penerbit, 
		$harga,
		$jmlhal,
		$wktmain,
		$tipe;


	public function __construct( $judul = "asal", $penulis = "asal", $penerbit = "asal", $harga = 0, $jmlhal = 0, $wktmain = 0, $tipe = "kosong"){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhal = $jmlhal;
		$this->wktmain = $wktmain;
		$this->tipe = $tipe;
	}


	public function Label() {
		return "$this->penulis, $this->penerbit";
		// menggunakan this-> untuk menambil variabel pada class yang sama
	}

	public function getInfoLengkap(){
		//Komik : Bukan Ragnarok | Bukan Muhamad Luthfi Sadli , Saya | (Rp. 900000) - 100 halaman
		$str = "{$this->tipe} : {$this->judul} | {$this->Label()} | (Rp. {$this->harga})";

		if ( $this->tipe == "Komik"){
			$str .= " - {$this->jmlhal} Halaman.";
		} else if ( $this->tipe == "Game"){
			$str .= " ~ {$this->wktmain} Jam";
		}

		return $str;
	}

}


class CetakInfoProduk {
	
	// menambahkan class produk di depan variabel untuk hnya bisa di gunakan pada objek yang ada d class produk tersebut
	public function cetak( Produk $produk ){

		$str = "{$produk->judul} | {$produk->penulis} , {$produk->penerbit} | Rp. {$produk->harga}, {$produk->MaksaBeli()}";
		return $str;
	}
}

$produk1 = new Produk( "Bukan Ragnarok", "Bukan Muhamad Luthfi Sadli", "Kami", 900000, 100, 0, "Komik" );


$produk2 = new Produk( "Ragnarok", "Muhamad Luthfi Sadli", "Saya", "Mahal", 0, 50, "Game" );


$infoProduk = new CetakInfoProduk();
//Komik : Bukan Ragnarok | Bukan Muhamad Luthfi Sadli , Saya | (Rp. 900000) - 100 halaman
//Game : Ragnarok | Muhamad Luthfi Sadli , Kami | (Rp. Mahal) ~ 50 jam

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
 ?>