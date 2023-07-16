<?php
    $conn = mysqli_connect("localhost", "root", "", "PTA_PWEB");

    function nameQuery($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function query($nim){
        global $conn;
        $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function add($data){
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $tempatlahir = htmlspecialchars($data["tempatlahir"]);
        $tanggallahir = htmlspecialchars($data["tanggallahir"]);
        $fakultas = htmlspecialchars($data["fakultas"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);
        $hp = htmlspecialchars($data["hp"]);
        $foto = upload();
        if(!$foto){
            return false;
        }
        $query = "INSERT INTO mahasiswa VALUES ('$nama', '$nim', '$tempatlahir', '$tanggallahir', '$fakultas', '$prodi', '$email', '$hp', '$foto')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){
        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto']['tmp_name'];

        //cek apakah tidak ada foto yang diupload
        if($error === 4){
            echo "<script>
                    alert('Pilih foto terlebih dahulu!');
                </script>";
            return false;
        }

        //cek apakah yang diupload adalah foto
        $ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
        $ekstensiFoto = explode('.', $namaFile);
        $ekstensiFoto = strtolower(end($ekstensiFoto));
        if(!in_array($ekstensiFoto, $ekstensiFotoValid)){
            echo "<script>
                    alert('Yang anda upload bukan foto!');
                </script>";
            return false;
        }

        //cek jika ukuran foto terlalu besar
        if($ukuranFile > 1000000){
            echo "<script>
                    alert('Ukuran foto terlalu besar!');
                </script>";
            return false;
        }

        //lolos pengecekan, foto siap diupload
        //generate nama foto baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiFoto;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;
    }
?>