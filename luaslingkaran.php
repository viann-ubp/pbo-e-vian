<?php

namespace App\Math;

class luaslingkaran{
    public const phi = 3.14;
    private int $jari;

    public function __construct($isiJari = 1){
        $this->jari = $isiJari;
}
    public function tampil($nama){
    $rumus = luaslingkaran::phi * $this->jari * $this->jari;
    echo "luas lingkaran {$nama} hasilnya sakieu=   . {$rumus}";

    }
    public static function testing() {
        echo "ini dari static";
    }
    public function __destruct(){
        echo"udah ah cape";
    }
}

