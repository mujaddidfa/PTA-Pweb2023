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
?>