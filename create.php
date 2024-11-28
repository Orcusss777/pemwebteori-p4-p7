<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Tambah Produk</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Produk</h1>
        <div class="text-center mb-3">
            <a href="show.php" class="btn btn-secondary">Lihat Data Produk</a>
        </div>
        <form action="./backend/create.php" method="post" enctype="multipart/form-data" class="p-4 border rounded shadow-sm">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Input nama produk" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga Produk</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Input harga produk" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>
            <div class="text-center">
                <input type="submit" value="Simpan" name="submit" class="btn btn-primary btn-lg">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
