<?php
$mahasiswa = [
    ["Fernanda Pasa", "20051397033", "Manajemen Informatika", "fernanda.20033@mhs.unesa.ac.id"],
    ["Rizha Atchafa", "20051397069", "Manajemen Informatika", "rizha.20069@mhs.unesa.ac.id"],
    ["Sifulan", "20051397102", "Manajemen Informatika", "sifulan.20102@mhs.unesa.ac.id"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiwa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama :<?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>