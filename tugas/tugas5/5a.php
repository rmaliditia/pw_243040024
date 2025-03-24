<?php
$film = [
    [
        "judul" => "Kkn di Desa Penari",
        "rumahProduksi" => "MD Pictures",
        "tahun" => "2022",
        "genre" => "Horor",
        "durasi" => "130 menit",
        "sutradara" => "sutradara-awisuryadi.jpg"
    ],
    [
        "judul" => "Pengabdi Setan 2: Communion",
        "rumahProduksi" => "Rapi Films",
        "tahun" => "2022",
        "genre" => "Horor",
        "durasi" => "119 menit",
        "sutradara" => "sutradara-jokoanwar.jpg"
    ],
    [
        "judul" => "Miracle in Cell No. 7",
        "rumahProduksi" => "Falcon Pictures",
        "tahun" => "2022",
        "genre" => "Drama, Komedi",
        "durasi" => "145 menit",
        "sutradara" => "sutradara-hanungbramantyo.jpg"
    ],
    [
        "judul" => "Ngeri-Ngeri Sedap",
        "rumahProduksi" => "Imajinari Pictures",
        "tahun" => "2022",
        "genre" => "Drama, Komedi",
        "durasi" => "114 menit",
        "sutradara" => "sutradara-benedion.jpg"
    ],
    [
        "judul" => "Sayap-Sayap Patah",
        "rumahProduksi" => "Maxima Pictures",
        "tahun" => "2022",
        "genre" => "Drama, Romantis",
        "durasi" => "115 menit",
        "sutradara" => "sutradara-rudysoedjarwo.jpg"
    ],
    [
        "judul" => "Mencuri Raden Saleh",
        "rumahProduksi" => "Visinema Pictures",
        "tahun" => "2022",
        "genre" => "Aksi, Drama",
        "durasi" => "154 menit",
        "sutradara" => "sutradara-anggadwimas.jpg"
    ],
    [
        "judul" => "Kukira Kau Rumah",
        "rumahProduksi" => "MD Pictures",
        "tahun" => "2022",
        "genre" => "Drama, Romantis",
        "durasi" => "90 menit",
        "sutradara" => "sutradara-umayshahab.jpg"
    ],
    [
        "judul" => "The Doll 3",
        "rumahProduksi" => "Hitmaker Studios",
        "tahun" => "2022",
        "genre" => "Horor, Thriller",
        "durasi" => "115 menit",
        "sutradara" => "sutradara-rockysoraya.jpg"
    ],
    [
        "judul" => "Agak Laen",
        "rumahProduksi" => "Jagartha",
        "tahun" => "2024",
        "genre" => "Horor, Komedi",
        "durasi" => "119 menit",
        "sutradara" => "sutradara-muhadklyacho.jpg"
    ],
    [
        "judul" => "Sehidup Semati",
        "rumahProduksi" => "Starvision",
        "tahun" => "2024",
        "genre" => "Horor, Thriller",
        "durasi" => "108 menit",
        "sutradara" => "sutradara-upi.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5a</title>
</head>

<body>
    <h2 style="margin-left: 1.7rem;">Daftar Film</h2>
    <ul>
        <?php foreach ($film as $f) : ?>
            <li>
                <strong>Judul:</strong> <?= $f["judul"]; ?><br>
                <strong>Rumah Produksi:</strong> <?= $f["rumahProduksi"]; ?><br>
                <strong>Tahun:</strong> <?= $f["tahun"]; ?><br>
                <strong>Genre:</strong> <?= $f["genre"]; ?><br>
                <strong>Durasi:</strong> <?= $f["durasi"]; ?><br>
                <strong>Sutradara:</strong><br>
                <img src="img/<?= $f["sutradara"]; ?>" ? width="100">
            </li>
            </li>
            <br>
        <?php endforeach; ?>
    </ul>

</body>

</html>