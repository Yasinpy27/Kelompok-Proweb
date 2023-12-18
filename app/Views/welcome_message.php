<!DOCTYPE html>
<html>
<head>
    <title>Login Page with Bootstrap</title>
    <!-- Tambahkan tautan ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center mb-0">Selamat Datang</h2>
                </div>
                <div class="card-body">
                    <?php
                        // Fungsi untuk memeriksa login
                        function cekLogin($username, $password) {
                            // Gantilah dengan logika autentikasi yang sesuai
                            $penggunaValid = "user";
                            $passwordValid = "password";

                            return ($username == $penggunaValid && $password == $passwordValid);
                        }

                        // Memproses formulir login jika disubmit
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $username = $_POST['username'];
                            $password = $_POST['password'];

                            if (cekLogin($username, $password)) {
                                echo '<div class="alert alert-success" role="alert">Selamat datang, ' . $username . '!</div>';
                            } else {
                                echo '<div class="alert alert-danger" role="alert">Login gagal. Silakan coba lagi.</div>';
                            }
                        }
                    ?>

                    <!-- Formulir Login dengan Bootstrap Styling -->
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan tautan ke file JavaScript Bootstrap (opsional) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
