<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Usuario;


$u = new Usuario ("ZEZIN DO GRAAAAU");

echo "<h2>task today app</h2>";
echo $u->getNome();
