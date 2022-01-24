<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Segitiga extends Model
{
    protected $alas,
              $tinggi,
              $luas;

    public function setAlas($alas){
        $this->alas = $alas;
    }
    public function setTinggi($tinggi){
        $this->tinggi = $tinggi;
    }
    public function getAlas(){
        return $this->alas;
    }
    public function getTinggi(){
        return $this->tinggi;
    }
    public function getLuas(){
        return $this->alas*$this->tinggi/2;
    }
}
