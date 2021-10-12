<?php
class Model_latihan1 extends CI_Model
{
    //membuat variable untuk menampung nilai 
    public $nilai3, $nilai2, $hasil;

    //method penjumlahan 
    public function jumlah($nil3=null, $nil2=null)
{
$this->nilai3 = $nil3;
$this->nilai2 = $nil2;
$this->hasil = $this->nilai3 + $this->nilai2;
return $this->hasil;
}
}