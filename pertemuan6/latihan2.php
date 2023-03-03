<?php
$mahasiswa = [
    ["Fernanda Pasa", "20051397033", "Manajemen Informatika", "fernanda.20033@mhs.unesa.ac.id"],
    ["Rizha Atchafa", "20051397069", "Manajemen Informatika", "rizha.20069@mhs.unesa.ac.id"],
    ["Sifulan", "20051397102", "Manajemen Informatika", "sifulan.20102@mhs.unesa.ac.id"]
];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita bisa buat sendiri
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
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiwa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
    <li>Nama :<?= $mhs["nama"]; ?></li>
    <li>NIM : <?= $mhs["nim"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>