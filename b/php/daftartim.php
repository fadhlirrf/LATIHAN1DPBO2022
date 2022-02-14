<?php 

class DaftarTim{

    private $tahun = 0;
    private $nama = "";
    private $asal = "";
    private $pemain = 0; 

    public function __construct($tahun = 0, $nama = "", $asal = "", $pemain = 0){

        $this->tahun = $tahun;
        $this->nama = $nama;
        $this->asal = $asal;
        $this->pemain = $pemain;
    }

    public function setTahun($tahun){
        $this->tahun = $tahun;
    }

    public function getTahun(){
        return $this->tahun;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setAsal($asal){
        $this->asal = $asal;
    }

    public function getAsal(){
        return $this->asal;
    }

    public function setPemain($pemain){
        $this->pemain = $pemain;
    }

    public function getPemain(){
        return $this->pemain;
    }
}

?>