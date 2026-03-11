<?php
class Mahasiswa{
    private $nim, $nama, $matkul;

    public function setData($nim, $nama, $matkul){
        $this -> nim = $nim;
        $this -> nama = $nama;
        $this -> matkul = $matkul;
    }

    public function getData($nim, $nama, $matkul){
        return[
            $this -> nim,
            $this -> nama,
            $this -> matkul
        ];
    }

}

?>