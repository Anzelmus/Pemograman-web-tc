<?php
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "12_pplg1"
);
echo var_dump($koneksi)
// var_dump melihat isi dari varialbel yang sudsh dbuat we

 
?>

<html>
    <head>
        <title>
            php oop
        </title>
    </head>
    <body>
        <h1>koneksi</h1>
        <?php echo $koneksi?>
        <br>
        <?= $koneksi?>
        <hr>
    </body>
</html>