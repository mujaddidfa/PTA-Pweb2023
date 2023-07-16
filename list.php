<?php
    require 'functions.php';
    $mahasiswa = nameQuery("SELECT nama, nim FROM mahasiswa");
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
            <h1>LIST BIODATA MAHASISWA</h1>
            <table class="list">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($mahasiswa as $row) : ?>
                <tr>
                    <td class="no"><?= $i ?></td>
                    <td><a href="biodata.php?nim=<?= $row["nim"] ?>"><?= $row["nama"] ?></a></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </article>
        <aside>
            <ul>
                <li><a href="add.php">TAMBAH DATA</a></li>
                <li><a href="list.php">LIST BIODATA</a></li>
            </ul>
        </aside>
    </main>
    <footer>
        <p>UNIVERSITAS AHMAD DAHLAN</p>
    </footer>
</body>
</html>