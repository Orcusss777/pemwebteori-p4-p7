<?php 
session_start(); 

// Cek jika session 'role' ada dan nilainya 'user'
if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
    // Role adalah 'user', tidak perlu menampilkan apa-apa di sini, kita akan tampilkan di bagian HTML
} else {
    // Jika bukan role 'user', logout dan redirect ke index
    session_destroy();
    echo "Anda bukan role user";
    header('location: index.php'); // Perbaiki 'localtion' menjadi 'location'
    exit(); // Tambahkan exit setelah header untuk menghentikan eksekusi
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Dashboard User</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <!-- Pastikan session 'name' ada sebelum menampilkan -->
                        <?php if (isset($_SESSION['name'])): ?>
                            <h1 class="mb-4">Selamat datang, <?= htmlspecialchars($_SESSION['name']); ?>!</h1>
                        <?php else: ?>
                            <h1 class="mb-4">Selamat datang, Pengguna!</h1>
                        <?php endif; ?>
                        
                        <a href="backend/logout.php" class="btn btn-danger btn-lg w-100">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
