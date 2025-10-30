<?php

    class luaslingkaran {

        public const phi = 3.14;
        public int $jari;

        public function __construct($isiJari = 1) {
            $this->jari = $isiJari;
        }

        public function tampil($nama = 'ban') {
            $rumus = luaslingkaran::phi * $this->jari * $this->jari;
            echo "Lingkaran {$nama} hasilnya adalah: {$rumus} ";

        }
        public static function testing() {
            echo "<br/>";
            echo "ini dari static";
        }
    }

$lingkaran = new luaslingkaran(7);
$lingkaran->tampil('roda');
luaslingkaran::testing();