<?php
// OOP
function tampil1($a){ //fungsi dan parameter
    return $a;
}
echo tampil1("lorem"); //call and arguments
echo "<br>";

class Mobil{

// variable = property
    $roda = "micelin";

    // function = methode
    function nama($merk){
        return $merk;
    }
}

// instansiasi = membuat jadi lebih mudah diakses
$car = new Mobil;

// manggil isi dari class
$car->roda;  //mengakses property
$car->nama("YangWang"); //mengakses methode
?>