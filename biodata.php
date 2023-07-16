<?php
    require 'functions.php';
    $mahasiswa = query($_GET["nim"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Input Data Mahasiswa</title>
    <link rel="stylesheet" href="./style/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="https://uad.ac.id/" target="_blank"><img src="./img/logo.png" alt="logo"></a>
            <ul>
                <li><a href="index.html">BERANDA</a></li>
                <li><a href="add.php">TAMBAH DATA</a></li>
                <li><a href="list.php">LIST BIODATA</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
        </nav>
        <div class="header">
            <h1>PROGRAM INPUT DATA MAHASISWA</h1>
            <h2>UNIVERSITAS AHMAD DAHLAN</h2>
        </div>
    </header>
    <main>
        <article>
            <h1>BIODATA MAHASISWA</h1>
            <?php foreach($mahasiswa as $row) : ?>
            <table>
                <tr>
                    <td rowspan="8" class="photo"><img src="./img/<?= $row["foto"] ?>" alt="foto"></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>: <?= $row["nama"] ?></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>: <?= $row["nim"] ?></td>
                </tr>
                <tr>
                    <td>TTL</td>
                    <td>: <?= $row["tempatlahir"] ?>, <?= $row["tanggallahir"] ?></td>
                </tr>
                <tr>
                    <td>FAKULTAS</td>
                    <td>: <?= $row["fakultas"] ?></td>
                </tr>
                <tr>
                    <td>PRODI</td>
                    <td>: <?= $row["prodi"] ?></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td>: <?= $row["email"] ?></td>
                </tr>
                <tr>
                    <td>HP</td>
                    <td>: <?= $row["nama"] ?></td>
                </tr>
            </table>
            <?php endforeach; ?>
        </article>
        <aside>
            <ul>
                <li><a href="add.php">TAMBAH DATA</a></li>
                <li><a href="change.php">UBAH DATA</a></li>
                <li><a href="delete.php">HAPUS DATA</a></li>
            </ul>
        </aside>
    </main>
    <footer>
        <p>UNIVERSITAS AHMAD DAHLAN</p>
    </footer>
</body>
</html>