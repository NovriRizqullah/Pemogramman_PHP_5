<?php
require_once 'Lingkaran.php';
require_once 'Persegi.php';
require_once 'Segitiga.php';

$lingkaran= new Lingkaran();
$persegi = new Persegi();
$segitiga = new Segitiga();

$lingkaran->luasBidang();
$lingkaran->kelilingBidang();

$persegi->luasBidang();
$persegi->kelilingBidang();

$segitiga->luasBidang();
$segitiga->kelilingBidang();


$data_bidang = [$lingkaran, $persegi, $segitiga];

foreach($data_bidang as $data){
    echo '<br/>'.$data->mencetak();
}