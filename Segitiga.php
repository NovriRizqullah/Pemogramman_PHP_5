<?php
require_once 'Bidang.php';
class Segitiga extends Bidang{
    //member1 variabel
   public $panjang = 7;
   public $lebar = 10;
    //member2 constructor
    public function construct($nama,$panjang,$lebar){
        // parent::__construct($nama);
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    
public function luasBidang(){
      $this->LuasBidang = $this->panjang * $this->lebar;
    }

    public function kelilingBidang(){
      $this->KelilingBidang = 2*($this->panjang * $this->lebar);
    }

    public function mencetak(){
        // parent::mencetak();
        echo '<br/>Nama Bidang :Segitiga';
        echo '<br/>Luas Bidang :'.$this->LuasBidang;
        echo '<br/>Keliling Bidang : '.$this->KelilingBidang;
        echo '<hr/>'; 
    }
}