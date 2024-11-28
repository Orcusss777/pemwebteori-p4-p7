<?php
session_start();
// Periksa apakah session 'role' tidak diatur atau bukan admin
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    // Hancurkan session jika tidak sesuai
    session_destroy();
    header('Location: index.php'); // Perbaiki 'Location' typo
    exit(); // Tambahkan exit setelah header untuk menghentikan eksekusi
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styleadmin.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="mb-4">Selamat datang, Administrator</h1>
            <h2 class="mb-4"> <?php echo htmlspecialchars($_SESSION['name']); ?></h2>
            <div class="d-flex justify-content-center gap-3">
                <a href="backend/logout.php" class="btn btn-danger btn-lg">Logout</a>
                <a href="create.php" class="btn btn-primary btn-lg">Tambah Data</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
