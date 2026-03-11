<?php
class MataKuliah{
    private $KodeMatkul;
    private $NamaMatkul;

    public function setData($KodeMatkul, $NamaMatkul){
        $this -> KodeMatkul = $KodeMatkul;
        $this -> NamaMatkul = $NamaMatkul;
    }

    public function getData($KodeMatkul, $NamaMatkul){
        return[
            $this -> KodeMatkul,
            $this -> NamaMatkul
        ];
    }
}

?> 