<?php include 'olah.php'; ?>
<html>
<head>
    <title>OOP SEDERHANA</title>
</head>
<body>
    <h1>Nama Anda = <?= $a->tampil_nama("nama"); ?></h1>
    <h1>Tanggal Lahir Anda = <?= $a->tampil_tgl("tgl"); ?></h1>
    <h1>Hobi Anda = <?= $a->tampil_hobi("hobi"); ?></h1>
    <hr>
    <form action="" method="get">
        <label>Masukan Nama</label>
        <input type="text" name="nama">
        <br>
        <label>Masukan Tanggal Lahir</label>
        <input type="date" name="tgl">
        <br>
        <label>Masukan Hobi</label>
        <input type="text" name="hobi">
        <br>
        <input type="submit" value="kirim">
    </form>
</body>
</html>
