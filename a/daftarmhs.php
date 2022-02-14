<?php 

class DaftarMhs{

    private $nim = 0;
    private $nama = "";
    private $prodi = "";
    private $semester = 0; 

    public function __construct($nim = 0, $nama = "", $prodi = "", $semester = 0){

        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    public function setNIM($nim){
        $this->nim = $nim;
    }

    public function getNIM(){
        return $this->nim;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setProdi($prodi){
        $this->prodi = $prodi;
    }

    public function getProdi(){
        return $this->prodi;
    }

    public function setSemester($semester){
        $this->semester = $semester;
    }

    public function getSemester(){
        return $this->semester;
    }
}

?>