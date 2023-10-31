<?php
    include("config.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM siswa WHERE id=$id";
        $query = mysqli_query($db, $sql);

        if ($query) {
            header('Location: list-siswa.php');
        } else {
            die("Gagal menghapus...");
        }
    } else {
        die("Akses Dilarang...");
    }
?>