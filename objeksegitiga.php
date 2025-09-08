<?php

require_once 'segitiga.php';

$segitiga1 = new Segitiga(10, 8, 6, 8, 6);
$segitiga1->tampilkanInfo();

echo "\n"; 
$segitiga2 = new Segitiga(5, 4.33, 5, 5, 5);
$segitiga2->tampilkanInfo();