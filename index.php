<?php

function cek_data($data){
  if(isset($_GET[$data]) ==  true){
    if($_GET[$data] == null){
      return 0;
    }else{
      return $_GET[$data];
    }
  }else{
    return 0;
  }
}


function hasil($a,$b){
    if (isset($_GET[$a], $_GET[$b]) && $_GET[$a] === "" && $_GET[$b] === "") {
        return "masukin dulu angkanya";
    }
    if(cek_data('dor') == "tambah"){
      return cek_data($a) + cek_data($b);
      }elseif(cek_data('dor') =="kurang"){
        return cek_data($a) - cek_data($b);
        }elseif(cek_data('dor') =="kali"){
          return cek_data($a) * cek_data($b);
          }elseif(cek_data('dor') =="bagi"){
            if(cek_data($b) == 0){
              return "ifninity";
            }
            return cek_data($a) / cek_data($b);
            }
      return "masukin dulu angkanya";

            }
  

?>
<html>
  <head>
    <title>Kakulator using function</title>
  </head>
  <body>
    <h2>Angka Pertama = <?= cek_data('angka1') ?></h2>
    <h2>Angka kedua = <?= cek_data('angka2') ?> </h2>
    <h2>hasil = <?= hasil('angka1', 'angka2') ?></h2>
    <hr>
    <form method="GET">
      <label>Angka Pertama</label>
      <br>
      <input type="number" name="angka1">
      <br>
      <label>Angka kedua</label>
      <br>
      <input type="number" name="angka2">
      <br>
      <input type="submit" name="dor" value="tambah">
      <input type="submit" name="dor" value="kurang">
      <input type="submit" name="dor" value="kali">
      <input type="submit" name="dor" value="bagi">
    </form>
  </body>
</html>