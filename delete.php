<?php
    require 'functions.php';

    $nim = $_GET["nim"];

    if(delete($nim) > 0) {
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'list.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'list.php';
            </script>
        ";
    }
?>