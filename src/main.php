<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\usuario;

$u = new Usuario("zezin mil grau");

echo "<h2>task today app</h2>";
echo $u->getnome();
