<?php
class Mahasiswa
{
    //list of properties
    public $nim;
    public $nama;
    public $programStudi;
    //methods
    function setData($nim, $nama, $programStudi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->programStudi = $programStudi;
    }
    function getData()
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'programStudi' => $this->programStudi
        ];
    }

    // method baru
    function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Program Studi : " . $this->programStudi . "<br><br>";
    }
}
?>
