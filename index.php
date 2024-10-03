<?php

class Mobil {

    // Property
    public $merk;
    public $model;
    public $tahun;
    public $warna;

    // Method
    public function start(){
        echo "Mobil menyalah";
    }

    public function cek($nama, $ket){
        echo "Merek :" . $this->merk . "<br/>";
        echo "Model :" . $this->model . "<br/>";
        echo "Tahun :" . $this->tahun . "<br/>";
        echo "Warna :" . $this->warna . "<br/>";
        echo "Pemilik :" . $nama . "<br/>";
        echo "Keterangan :" . $ket . "<br/>";
    }

    public function stop(){
        echo "Mobil berhenti";
    }

}

// Object
$mobil = new Mobil();
$mobil->merk = "Avanza";
$mobil->model = "Nova";
$mobil->tahun = 2023;
$mobil->warna = "Putih";

$mobil = new Mobil();
$mobil->merk = "Inova";
$mobil->model = "Toyota";
$mobil->tahun = 2020;
$mobil->warna = "Hitam";

// Panggil Method
$mobil->start();
echo "<br>";
echo $mobil->merk;
$ket = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque itaque modi unde esse dolores expedita assumenda! Tenetur voluptates cumque quisquam id similique totam ea nisi, perspiciatis, nostrum veniam quos deserunt";
echo "<br>";
$mobil->cek("Billy", $ket);