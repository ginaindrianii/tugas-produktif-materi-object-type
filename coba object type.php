<?php
class produk{
	public $namaorang,
		   $kelas,
		   $sekolah;
	public function getCetak(){
		return "$this->kelas,  $this->sekolah";
	}
	public function __construct($namaorang="nama orang",$kelas="kelas",$sekolah="sekolah"){
		$this->namaorang = $namaorang;
		$this->kelas = $kelas;
		$this->sekolah = $sekolah;
	}

}
	class cetakinfoproduk{
		public function cetakinfo(produk $produk){
			$str="{$produk->namaorang}, {$produk->getCetak()}";
			return $str;
		}
	}
	$produk1= new produk("Gina Indriani","kelas 11","smk wikrama");
	$produk2= new produk("siti hardianti","kelas 11","ma fathan mubina");
	$produk3= new produk("siti nurhayati","kelas 11","smk tarbiatul huda");
	$produk4= new produk("rika lestari","kelas 11","smk al-watasi");
	$infoproduk = new cetakinfoproduk();

	echo "nama barang laptop: ". $produk1->getCetak();
	echo "<br>";
	echo "nama barang aksesoris: ". $produk2->getCetak();
	echo "<br>";
	echo "nama barang laptop: ". $produk3->getCetak();
	echo "<br>";
	echo "nama barang aksesoris: ". $produk4->getCetak();
	echo "<br>";
	echo $infoproduk->cetakinfo($produk1);