<?php
require_once 'Bidang.php';
class Lingkaran extends Bidang{
    //member1 variabel
   protected $jari2 = 7;
    //member2 constructor
    public function construct($jari2){
        $this->jari2 = $jari2;
    }
    
public function luasBidang(){
      $this->LuasBidang = (3.14 * pow($this->jari2,2));
    }

    public function kelilingBidang(){
      $this->KelilingBidang = 2*(3.14 * $this->jari2);
    }

    public function mencetak(){
        echo '<br/>Nama Bidang : Lingkaran';
        echo '<br/>Luas Bidang :'.$this->LuasBidang;
        echo '<br/>Keliling Bidang : '.$this->KelilingBidang;
        echo '<hr/>'; 
    }
}