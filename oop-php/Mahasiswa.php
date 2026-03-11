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
            'nim mhs' => $this->nim,
            'nama' => $this->nama,
            'programStudi' => $this->programStudi
        ];
    }

    public function tampilkanData()
    {
        echo "<table style='font-family: sans-serif;'>";
        echo "<tr><td>NIM</td><td> : </td><td>" . $this->nim . "</td></tr>";
        echo "<tr><td>Nama</td><td>  : </td><td>" . $this->nama . "</td></tr>";
        echo "<tr><td>Program Studi</td><td>  : </td><td>" . $this->programStudi . "</td></tr>";
        echo "</table><br>";
    }

}
?>
