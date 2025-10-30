<?php

class luaslingkaran{
    public const phi = 3.14;
    public int $jari;

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
        echo"udah ah";
    }
}

$lingkaran = new luaslingkaran(16);
$lingkaran->tampil('roda');
 luaslingkaran::testing();