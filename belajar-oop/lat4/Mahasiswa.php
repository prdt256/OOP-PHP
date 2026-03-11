<?php
class Mahasiswa{
    private $nim, $nama, $matkul, $tgl_lahir, $umur; 
    protected $status;

    public function __construct(){
        $this -> status = "Aktif";
    }

    public function setData($nim, $nama, $matkul, $tgl_lahir){
        $this -> nim = $nim;
        $this -> nama = $nama;
        $this -> matkul = $matkul;
        $this -> tgl_lahir = $tgl_lahir;
        $this -> setUmur();
    }

    public function setUmur(){
        $this -> umur = date('Y') - substr($this -> tgl_lahir, 0, 4);
    }

    public function getData(){
        return[
            "NIM" => $this -> nim,
            "Nama" => $this -> nama,
            "Matkul" => $this -> matkul,
            "Tgl Lahir" => $this -> tgl_lahir,
            "Umur" => $this -> umur,
            "Status" => $this -> status
        ];
    }

}

?>