<?php
    require 'functions.php';
    $mahasiswa = query($_GET["nim"]);

    if(isset($_POST["submit"])) {
        if(change($_POST) > 0) {
            echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'list.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal diubah!');
                    document.location.href = 'list.php';
                </script>
            ";
        }
    }
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
            <h1>UBAH DATA MAHASISWA</h1>
            <form method="POST" enctype="multipart/form-data" autocomplete="off">
                <?php foreach($mahasiswa as $row) : ?>
                <table class="add-form">
                    <input type="hidden" name="fotoLama" value="<?= $row["foto"] ?>">
                    <tr>
                        <td><label for="nama">NAMA</label></td>
                        <td>: <input type="text" name="nama" id="nama" value="<?= $row["nama"] ?>" required autofocus></td>
                    </tr>
                    <tr>
                        <td><label for="nim">NIM</label></td>
                        <td>: <input type="text" name="nim" id="nim" value="<?= $row["nim"] ?>" required pattern="[0-9]{10}"></td>
                    </tr>
                    <tr>
                        <td><label for="tempatlahir">TEMPAT LAHIR</label></td>
                        <td>: <input type="text" name="tempatlahir" id="tempatlahir" value="<?= $row["tempatlahir"] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="tanggallahir">TANGGAL LAHIR</label></td>
                        <td>: <input type="date" name="tanggallahir" id="tanggallahir" value="<?= $row["tanggallahir"] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="fakultas">FAKULTAS</label></td>
                        <td>: 
                            <select name="fakultas" id="fakultas" required>
                                <option value="Fakultas Agama Islam">Fakultas Agama Islam</option>
                                <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
                                <option value="Fakultas Farmasi">Fakultas Farmasi</option>
                                <option value="Fakultas Hukum">Fakultas Hukum</option>
                                <option value="Fakultas Keguruan dan Ilmu Pendidikan">Fakultas Keguruan dan Ilmu Pendidikan</option>
                                <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
                                <option value="Fakultas Kesehatan Masyarakat">Fakultas Kesehatan Masyarakat</option>
                                <option value="Fakultas Sains dan Teknologi Terapan">Fakultas Sains dan Teknologi Terapan</option>
                                <option value="Fakultas Psikologi">Fakultas Psikologi</option>
                                <option value="Fakultas Sastra, Budaya, dan Komunikasi">Fakultas Sastra, Budaya, dan Komunikasi</option>
                                <option value="Fakultas Teknologi Industri">Fakultas Teknologi Industri</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="prodi">PRODI</label></td>
                        <td>: 
                            <select name="prodi" id="prodi" required>
                                <option value="Ilmu Hadis">Ilmu Hadis</option>
                                <option value="Bahasa dan Sastra Arab">Bahasa dan Sastra Arab</option>
                                <option value="Perbankan Syariah">Perbankan Syariah</option>
                                <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                                <option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Bisnis Jasa Makanan">Bisnis Jasa Makanan</option>
                                <option value="Farmasi">Farmasi</option>
                                <option value="Profesi Apoteker">Profesi Apoteker</option>
                                <option value="Ilmu Hukum">Ilmu Hukum</option>
                                <option value="Bimbingan dan Konseling">Bimbingan dan Konseling</option>
                                <option value="Pendidikan Bahasa dan Sastra Indonesia">Pendidikan Bahasa dan Sastra Indonesia</option>
                                <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                                <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                <option value="Pendidikan Fisika">Pendidikan Fisika</option>
                                <option value="Pendidikan Biologi">Pendidikan Biologi</option>
                                <option value="Pendidikan Pancasila dan Kewarganegaraan">Pendidikan Pancasila dan Kewarganegaraan</option>
                                <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                                <option value="Pendidikan Guru PAUD">Pendidikan Guru PAUD</option>
                                <option value="Pendidikan Profesi Guru">Pendidikan Profesi Guru</option>
                                <option value="Pendidikan Vokasional Teknologi Otomotif">Pendidikan Vokasional Teknologi Otomotif</option>
                                <option value="Kedokteran">Kedokteran</option>
                                <option value="Program Profesi Dokter">Program Profesi Dokter</option>
                                <option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Fisika">Fisika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Biologi">Biologi</option>
                                <option value="Psikologi">Psikologi</option>
                                <option value="Sastra Inggris">Sastra Inggris</option>
                                <option value="Sastra Indonesia">Sastra Indonesia</option>
                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Informatika">Informatika</option>
                                <option value="Teknik Kimia">Teknik Kimia</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknologi Pangan">Teknologi Pangan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">EMAIL</label></td>
                        <td>: <input type="email" name="email" id="email" value="<?= $row["email"] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="hp">hp</label></td>
                        <td>: <input type="tel" name="hp" id="hp" value="<?= $row["hp"] ?>" required pattern="(\+62|62|0)8[1-9][0-9]{6,9}$"></td>
                    </tr>
                    <tr>
                        <td><label for="foto">FOTO</label></td>
                        <td>: 
                            <img src="./img/<?= $row["foto"] ?>" alt="foto"><br>
                            <input type="file" name="foto" id="foto">
                        </td>
                    </tr>
                </table>
                <?php endforeach ?>
                <button type="submit" name="submit">Simpan Perubahan</button>
                <button type="reset">Reset</button>
            </form>
        </article>
        <aside>
            <ul>
                <li><a href="add.php">TAMBAH DATA</a></li>
                <li><a href="list.php">LIST BIODATA</a></li>
                <li><a href="delete.php?nim=<?= $row["nim"] ?>">HAPUS DATA</a></li>
            </ul>
        </aside>
    </main>
    <footer>
        <p>&copy; 2023 - Mujaddid Fathi Atho'illah. 2200018385 - Universitas Ahmad Dahlan</p>
    </footer>
</body>
</html>