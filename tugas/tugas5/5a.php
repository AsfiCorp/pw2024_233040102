<?php
    $mahasiswa = [
        [
            "nrp" => "233040102",
            "nama" => "Athaillah Sulthan Firasyal Ilmi",
            "email" => "athaillahsfi@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "Athaillahsss.jpg"
        ],

        [
            "nrp" => "2330401011",
            "nama" => "Lukita Amelia Sabrina",
            "email" => "Lukitaamelias@uin.ac.id",
            "jurusan" => "Psikologi",
            "gambar" => "Lukita Amelia Sabrina.jpg"
        ],

        [
            "nrp" => "23409096",
            "nama" => "Ningning Aespa",
            "email" => "aespaningning@gmail.com",
            "jurusan" => "Dancer",
            "gambar" => "ning ning.jpg"
        ],

        [
            "nrp" => "19029869",
            "nama" => "Lord Rangga",
            "email" => "eliteglobalrangga@gmail.com",
            "jurusan" => " Sastra Sunda and Historical",
            "gambar" => "lord rangga.jpeg.webp"
        ],


        [
             "nrp" => "043040023",
            "nama" => "Sandhika Galih",
            "email" => "sandhikagalih@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "sandhika.jpeg"
        
        ],

        [
            "nrp" => "09696969",
            "nama" => "victor",
            "email" => "PubgxVictor@unpas.ac.id",
            "jurusan" => "Teknik Mesin",
            "gambar" => "Victor.avif"
        ],

        [
            "nrp" => "233040163",
            "nama" => "Valdric Abirama Pranaja Dandi",
            "email" => "valdricapd@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "valdric.jpg"
        ],

        [
            "nrp" => "09182745",
            "nama" => "Kimmy",
            "email" => "kimmy@gmail.com",
            "jurusan" => "Teknik Industri",
            "gambar" => "kimmy.jpeg"
        ],

        [
            "nrp" => "088671212",
            "nama" => "Olivia Rodrigo",
            "email" => "oliviarodrigo@gmail.com",
            "jurusan" => "Ilmu Komunikasi",
            "gambar" => "olivia.webp"
        ],

        [
            "nrp" => "73245232",
            "nama" => "Spongebob SquarePants",
            "email" => "spongebob@bikinibottom.com",
            "jurusan" => "Teknik Lingkungan",
            "gambar" => "spongebob.jpeg"
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
    <style>
        img{
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li><?php echo $mhs ["nama"]; ?></li>
            <li><?php echo $mhs ["nrp"]; ?></li>
            <li><?php echo $mhs ["jurusan"]; ?></li>
            <li><?php echo $mhs ["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>