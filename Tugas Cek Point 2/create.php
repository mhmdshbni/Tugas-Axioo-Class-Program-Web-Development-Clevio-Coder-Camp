<?php
include 'koneksi.php';

$judul = $penulis = $tahun_terbit = $genre = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM buku WHERE id=$id");
    $data = mysqli_fetch_assoc($query);
    $judul = $data['judul'];
    $penulis = $data['penulis'];
    $tahun_terbit = $data['tahun_terbit'];
    $genre = $data['genre'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $genre = $_POST['genre'];

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $query = "UPDATE buku SET judul='$judul', penulis='$penulis', tahun_terbit='$tahun_terbit', genre='$genre' WHERE id=$id";
    } else {
        $query = "INSERT INTO buku (judul, penulis, tahun_terbit, genre) VALUES ('$judul', '$penulis', '$tahun_terbit', '$genre')";
    }

    if (mysqli_query($conn, $query)) {
        header("Location: list.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(to right, #6dd5ed, #2193b0);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        form input[type="text"],
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        form input[type="text"]:focus,
        form input[type="number"]:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        button, .btn-back {
            display: inline-block;
            padding: 10px 15px;
            margin: 10px 5px 0 0;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        button:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        .btn-back {
            background-color: #dc3545;
        }

        .btn-back:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            margin-top: 10px;
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah/Edit Buku</h1>
        <form method="POST">
            <?php if (isset($_GET['id'])): ?>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            <?php endif; ?>
            <label for="judul">Judul Buku:</label>
            <input type="text" id="judul" name="judul" value="<?php echo htmlspecialchars($judul); ?>" required>

            <label for="penulis">Penulis:</label>
            <input type="text" id="penulis" name="penulis" value="<?php echo htmlspecialchars($penulis); ?>" required>

            <label for="tahun_terbit">Tahun Terbit:</label>
            <input type="number" id="tahun_terbit" name="tahun_terbit" value="<?php echo htmlspecialchars($tahun_terbit); ?>" required>

            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre" value="<?php echo htmlspecialchars($genre); ?>" required>

            <button type="submit"><i class="fa fa-save"></i> Simpan</button>
            <a href="list.php" class="btn-back"><i class="fa fa-arrow-left"></i> Kembali</a>
        </form>
        <footer>&copy; <?php echo date("Y"); ?> Website Manajemen Buku</footer>
    </div>
</body>
</html>
