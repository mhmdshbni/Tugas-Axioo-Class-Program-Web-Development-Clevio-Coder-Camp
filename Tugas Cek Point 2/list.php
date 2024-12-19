<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
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
            line-height: 1.6;
            margin: 0;
        }

        h1 {
            text-align: center;
            margin: 30px 0;
            font-size: 2.8rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            overflow-x: auto;
        }

        .btn-tambah {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 15px;
            background: #28a745;
            color: white;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn-tambah:hover {
            background: #218838;
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
        }

        table th, table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background: #007bff;
            color: white;
            text-transform: uppercase;
        }

        table tr:nth-child(even) {
            background: #f2f2f2;
        }

        table tr:hover {
            background-color: #e8f4fd;
            cursor: pointer;
        }

        .aksi a {
            display: inline-block;
            margin: 0 5px;
            padding: 8px 12px;
            font-size: 0.9rem;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .aksi .btn-edit {
            background: #ffc107;
            color: #212529;
        }

        .aksi .btn-edit:hover {
            background: #e0a800;
            transform: scale(1.05);
        }

        .aksi .btn-hapus {
            background: #dc3545;
        }

        .aksi .btn-hapus:hover {
            background: #c82333;
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            margin: 20px 0;
            color: white;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <h1>Daftar Buku</h1>
    <div class="container">
        <a href="create.php" class="btn-tambah"><i class="fa fa-plus"></i> Tambah Buku</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Genre</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM buku");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['judul']}</td>
                        <td>{$row['penulis']}</td>
                        <td>{$row['tahun_terbit']}</td>
                        <td>{$row['genre']}</td>
                        <td class='aksi'>
                            <a href='create.php?id={$row['id']}' class='btn-edit'><i class='fa fa-edit'></i> Edit</a>
                            <a href='delete.php?id={$row['id']}' class='btn-hapus' onclick=\"return confirm('Yakin ingin menghapus buku ini?');\"><i class='fa fa-trash'></i> Hapus</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <footer>
        &copy; <?php echo date("Y"); ?> Website Manajemen Buku | Dibuat oleh M.Sahbani
    </footer>
</body>
</html>
