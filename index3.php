<?php include 'olah2.php'; ?>
<html>
  <head>
    <title>kakulator</title>
  </head>
  <body>
    <h1>Angka Pertama= <?= $ObjKal->cek_data("angka1"); ?> </h1>
    <h1>Angka Kedua= <?= $ObjKal->cek_data("angka2"); ?> </h1>
    <h1>Hasil = <?=  $hasil; ?> </h1>
    <form method="get">
    <label>masukan angka 1</label>
    <input type="number" name="angka1">
    <br>
    <label>masukan angka 2</label>
    <input type="number" name="angka2">
    <br>
    <input type="submit" value="tambah" name="dor">
    <input type="submit" value="kurang" name="dor">
    <input type="submit" value="kali" name="dor">
    <input type="submit" value="bagi" name="dor">
    </form>
  </body>
</html>