<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "Fernanda Pasa", 
        "nim" => "20051397033", 
        "jurusan" => "Manajemen Informatika", 
        "email" => "fernanda.20033@mhs.unesa.ac.id",
        "gambar" => "pasa.jpeg"
    ],
    [
        "nama" => "Rizha Atchafa", 
        "nim" => "20051397069", 
        "jurusan" => "Manajemen Informatika", 
        "email" => "rizha.20069@mhs.unesa.ac.id",
        "gambar" => "atafa.png"
    ],
    [
        "nama" => "Sifulan", 
        "nim" => "20051397102", 
        "jurusan" => "Manajemen Informatika", 
        "email" => "sifulan.20102@mhs.unesa.ac.id",
        "gambar" => "sifulan.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<H1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>

</body>
</html>