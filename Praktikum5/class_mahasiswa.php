<?php 

class Mahasiswa
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this -> namaMahasiswa = $namaMahasiswa;
        $this -> nim = $nim;
        $this -> domisili = $domisili;
        $this -> prodi = $prodi;
        $this -> ipk = $ipk;
    }

    function stPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "Cumlaude";
        } else {
            echo "You did a great job!";
        }
    }

}

$mahasiswa = new Mahasiswa ("Nurhayati", "0110223081", "Citeureup", "TI", "3.98");

echo "Nama Lengkap : " $mahasiswa->namaMahasiswa;
echo "<br>";
echo "NIM : " $mahasiswa->nim;
echo "<br>";
echo "Domisili: " $mahasiswa->domisili;
echo "<br>";
echo "Prodi: " $mahasiswa->prodi;
echo "<br>";
echo "IPK : " $mahasiswa->ipk;

$mahasiswa -> setPredikatIPK($mahasiswa->ipk);

?>