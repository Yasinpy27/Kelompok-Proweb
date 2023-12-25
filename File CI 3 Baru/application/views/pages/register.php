<section class="home">
    <div class="container mt-5 ">
         <div class="row justify-content-center">
            <div class="col-md-6 login-page register">
                <div class="card fade-up">
                    <div class="card-header">
                        <h5 class="text-center mb-0">Buat akun untuk akses lebih.</h5>
                    </div>
                    <div class="card-body">
                        <!-- Formulir Login dengan Bootstrap Styling -->
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="username">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                            <br/>
                            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                            <p>Sudah punya akun? <a href="<?= base_url('pages/my_account'); ?>">Sign in</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>