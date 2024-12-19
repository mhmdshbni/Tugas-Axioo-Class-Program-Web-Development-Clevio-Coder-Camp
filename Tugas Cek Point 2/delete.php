<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $queryDelete = "DELETE FROM buku WHERE id = $id";

    if (mysqli_query($conn, $queryDelete)) {
        $resetQuery = "
            SET @num := 0;
            UPDATE buku SET id = @num := @num + 1;
            ALTER TABLE buku AUTO_INCREMENT = 1;
        ";

        if (mysqli_multi_query($conn, $resetQuery)) {
            header("Location: list.php");
        } else {
            echo "Error saat mereset ID: " . mysqli_error($conn);
        }
    } else {
        echo "Error saat menghapus data: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak ditemukan!";
}
?>
