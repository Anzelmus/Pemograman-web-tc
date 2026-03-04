<?php
function get_data($data){
    if (isset($_GET[$data])) {
        return $_GET[$data];
    } else {
        return null;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cek Nilai USK</title>
</head>
<body>

<h1>
    <?php 
    echo get_data('nama') ?? 'Nama belum diisi'; 
    ?>
</h1>

<h1>
<?php
$nilai = get_data('nilai');

if ($nilai !== null) {
    if ($nilai >= 78) {
        echo "Anda lulus! = $nilai";
    } else {
        echo "Anda tidak lulus! = $nilai";
    }
} else {
    echo "Nilai belum diisi";
}
?>
</h1>

<hr>

<form action="" method="get">
    <label>Nama</label>
    <input type="text" name="nama">
    <br>

    <label>Nilai</label>
    <input type="number" name="nilai">
    <br>

    <input type="submit" value="Cek Nilai">
</form>

</body>
</html>
