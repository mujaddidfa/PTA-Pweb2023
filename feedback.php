<?php
    //masukkan feedback ke file feedback.txt
    if(isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $pesan = $_POST["pesan"];

        $feedback = "Nama : $nama\nEmail : $email\nPesan : $pesan\n\n";
        $file = fopen("feedback.txt", "a");
        fwrite($file, $feedback);
        fclose($file);

        echo "<script>
                alert('Terima kasih atas feedback anda!');
                document.location.href = 'index.html';
            </script>";
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
            <h1>FORM FEEDBACK</h1>
            <form method="POST">
                <table class="form-feedback">
                    <tr>
                        <td><label for="nama">Nama</label></td>
                        <td>: <input type="text" name="nama" id="nama" required></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td>: <input type="email" name="email" id="email" required></td>
                    </tr>
                    <tr>
                        <td><label for="pesan">Pesan</label></td>
                        <td>: <textarea name="pesan" id="pesan" cols="30" rows="10" required></textarea></td>
                    </tr>
                </table>
                <button type="submit" name="submit">Kirim</button>
            </form>
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