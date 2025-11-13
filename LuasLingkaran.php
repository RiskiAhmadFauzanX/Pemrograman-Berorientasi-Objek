<?php

namespace App\Math;  //pasang namspace
class LuasLingkaran {
	public const phi = 3.14;
	private int $jari;

    public function __construct($isiJari = 1){
        $this->jari = $isiJari;
    }

	public function tampil($nama = 'ban') {
 	  $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
	  echo "Hasilnya adalah: ". $rumus;
	}

    public static function testing() {
        echo "</br>";
        echo "ini dari stactic";
    }

    public function __destruct() {
        echo "</br>";
        echo " udah ah cape";
    }
}