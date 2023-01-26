<?php
$barang = [
    ["nama" => "Nasi rendang",
    "jenis" => "Makanan",
    "harga" => "30.000",
    "stock" =>"Tersedia",
    "gambar" => "whatsapp.png"
],
["nama" =>"Nasi Ayam", 
"jenis" => "Makanan",
"harga" => "25.000",
"stock" => "Tidak Tersedia",
"gambar" => "youtube.png",
]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Get</title>
</head>
<body>
    <h1>Daftar Makanan Padang</h1>
    <ul>
    <?php foreach($barang as $brg) :?>
        <li>
            <a href="latihan3fauzi.php?nama=<?= $brg["nama"];?>&jenis=<?= $brg["jenis"];?>&harga=<?= $brg["harga"];?>&stock=<?= $brg["stock"];?>&gambar=<?= $brg["gambar"];?>">
            <?= $brg["nama"];?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>