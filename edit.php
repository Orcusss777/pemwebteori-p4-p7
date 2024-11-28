<?php
require './config/db.php';

// Mendapatkan ID produk dari parameter URL
$id = $_GET['id'];

// Ambil data produk berdasarkan ID
$product = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
$row = mysqli_fetch_assoc($product);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image']; // Jika ingin mengubah gambar juga

    // Update data produk
    mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id");

    // Redirect ke halaman data produk
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Edit Produk</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Produk</h1>
        <form method="post" class="p-4 border rounded shadow-sm">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= htmlspecialchars($row['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" name="price" id="price" class="form-control" value="<?= htmlspecialchars($row['price']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar URL</label>
                <input type="text" name="image" id="image" class="form-control" value="<?= htmlspecialchars($row['image']); ?>">
            </div>
            <div class="text-center">
                <button type="submit" name="update" class="btn btn-primary btn-lg">Update</button>
                <a href="index.php" class="btn btn-secondary btn-lg">Kembali ke Data Produk</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
