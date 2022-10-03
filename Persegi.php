<?php
require_once 'Bidang.php';
class Persegi extends Bidang{
    //member1 variabel
   public $alas = 7;
   public $tinggi = 10;
    //member2 constructor
    public function construct($alas,$tinggi){
        // parent::__construct($nama);
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    
public function luasBidang(){
      $this->LuasBidang = 1/2*($this->alas * $this->tinggi);
    }

    public function kelilingBidang(){
      $this->KelilingBidang = 2*($this->alas + $this->tinggi);
    }

    public function mencetak(){
        // parent::mencetak();
        echo '<br/>Nama Bidang : Persegi';
        echo '<br/>Luas Bidang :'.$this->LuasBidang;
        echo '<br/>Keliling Bidang : '.$this->KelilingBidang;
        echo '<hr/>'; 
    }
}