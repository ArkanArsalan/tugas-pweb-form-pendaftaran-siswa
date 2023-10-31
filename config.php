<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "daftar_siswa";

    try {
        $db = mysqli_connect($server, $user, $password, $nama_database);
    } catch(mysqli_sql_exception) {
        echo "Could not connect";
    }

?>