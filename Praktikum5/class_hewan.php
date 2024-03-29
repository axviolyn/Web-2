<?php

class HewanMamalia
{
    public $warna;
    public $namaHewan;
    public $habitat;

    function makan()
    {
        return "Mamalia makan";
    }

    function minum()
    {
        return "Mamalia minum";
    }

    function menyusui()
    {
        return "Mamalia menyusui";
    }

    function melahirkan()
    {
        return "Mamalia Melahirkan";
    }
}

$mamalia = new HewanMamalia();
$mamalia -> namaHewan = "Lumba-lumba";
echo $mamalia -> namaHewan;
echo "<br>";
echo $mamalia -> warna = "abu-abu";
echo "<br>";
echo $mamalia -> habitat = "laut";
echo "<br>";
echo $mamalia 