<?php

require_once('./luaslingkaran.php');

use App\Math\luaslingkaran;

$lingkaran = new luaslingkaran(16);
// $lingkaran->jari = 16;
$lingkaran->tampil('roda');

 luaslingkaran::testing();