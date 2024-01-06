<!doctype html>
<html>
    <head>
        <title>Pagination with Boostrap 3 - harviacode.com</title>
       <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/> 
        <script src="../bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="../bootstrap/js/bootstrap.min.js"></script>
        <style>
            /*custom css*/
            .pagination, .pager{
                margin-top: 100px
            }
            .table{
                margin-top: 20px;
            }
        </style>

<section class="catalog">
    <div class="main_home">
        <h1><b>Catalog</b></h1><br />
        <h4>Daftar katalog produk yang tersedia</h4>
    </div>
        
</section>
<section>
    <div class="product-details">
        <div class="container-fluid">
            <div class="card ml-3">
                <div class="carousel-item active">
                    <h3>Lenovo Yoga Book 9i</h3>
                    <img src="<?= base_url('assets/images/Lenov.jpg');?>" alt="Lenovo Yoga Book 9i"> 
                    <p><strong>Spesifikasi:</strong> Prosesor Intel Core i7-1355U, RAM 16GB, SSD 1TB</p>
                    <p><strong>Harga:</strong> Rp34.599.000</p>
                </div>
            </div>
            <br>
            <div class="card ml-3">
                <div class="carousel-item active">
                    <h3>Asus Zephyrus Duo 15</h3>
                    <img src="<?= base_url('assets/images/asuss.jpg');?>" alt="Asus Zephyrus Duo 15">
                    <p><strong>Spesifikasi:</strong> Prosesor Intel Core i9 10980HK, RAM 16GB DDR4, Storage 2x M.2 NVMe SSD PCle 3.0 x4</p>
                    <p><strong>Harga:</strong> Rp26.308.000</p>
                </div>
            </div>
            <br>
            <div class="card ml-3">
                <div class="carousel-item active">
                    <h3>HP Spectre x360</h3>
                    <img src="<?= base_url('assets/images/hpp.webp');?>" alt="HP Spectre x360">
                    <p><strong>Spesifikasi:</strong> Prosesor Intel Core i7, RAM 16GB, SSD 512GB</p>
                    <p><strong>Harga:</strong> Rp20.999.000</p>
                </div>
            </div>
            <br>
            <div class="card ml-3">
                <div class="carousel-item active">
                    <h3>MacBook Air M2</h3>
                    <img src="<?= base_url('assets/images/mac.jpg');?>" alt="MacBook Air M2">
                    <p><strong>Spesifikasi:</strong> Prosesor Apple M2, RAM 8GB, Storage 256GB SSD</p>
                    <p><strong>Harga:</strong> Rp18.999.000</p>
                </div>
            </div>
            <br>
            <div class="card ml-3">
                <div class="carousel-item active">
                    <h3>Lenovo Legion Slim 5</h3>
                    <img src="<?= base_url('assets/images/Lenovo Legion Slim 5.jpg');?>" alt="Lenovo Legion Slim 5">
                    <p><strong>Spesifikasi:</strong> Prosesor Intel Core i7, RAM 16GB, SSD 512GB</p>
                    <p><strong>Harga:</strong> Rp24.000.000</p>
                </div>
            </div>
            <br>
            <div class="card ml-3">
                <div class="carousel-item active">
                    <h3>Acer Spin 5</h3>
                    <img src="<?= base_url('assets/images/ACER Spin 5 SP514-51N-71ND.jpg');?>" alt="Acer Spin 5">
                    <p><strong>Spesifikasi:</strong> Prosesor Intel Core i7, RAM 16GB, Storage 1TB SSD</p>
                    <p><strong>Harga:</strong> Rp17.649.000</p>
                </div>
            </div>
            <br>
            <div class="card ml-3">
                <div class="carousel-item active">
                    <h3>Acer Predator Helios 300</h3>
                    <img src="<?= base_url('assets/images/Acer Predator Helios 300.jpg');?>" alt="Acer Predator Helios 300">
                    <p><strong>Spesifikasi:</strong> Prosesor Intel Core i7, RAM 16GB, Storage 512GB SSD</p>
                    <p><strong>Harga:</strong> Rp13.500.000</p>
                </div>
            </div>
        </div>
    </div> 

</section>
<!-- <section> -->

<!-- <div class="product-details">
    <div class="container-fluid">
        <div class="product">
            <div class="card ml-5">
                <h2>Lenovo Yoga Book 9i</h2>
                <img src="<?= base_url('assets/images/Lenov.jpg');?>" alt="Lenovo Yoga Book 9i"> 
                <p><strong>Spesifikasi:</strong> Prosesor Intel Core i7-1355U, RAM 16GB, SSD 1TB</p>
                <p><strong>Harga:</strong> Rp34.599.000</p>
            </div>
        </div>
    </div>
</div> -->

<!-- bentar ya -->
    <!-- <div class="product-container">
        <div class="product-details">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="product">
                        <div class=card ml-3>
                        <h2>Lenovo Yoga Book 9i</h2>
                        <img src="<?= base_url('assets/images/Lenov.jpg');?>" alt="Lenovo Yoga Book 9i"> 
                        <p><strong>Spesifikasi:</strong> Prosesor Intel Core i7-1355U, RAM 16GB, SSD 1TB</p>
                        <p><strong>Harga:</strong> Rp34.599.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="product">
                <h2>Asus Zephyrus Duo 15</h2>
                <img src="<?= base_url('assets/images/asuss.jpg');?>" alt="Asus Zephyrus Duo 15">
                <p><strong>Spesifikasi:</strong> Prosesor Intel Core i9 10980HK, RAM 16GB DDR4, Storage 2x M.2 NVMe SSD PCle 3.0 x4</p>
                <p><strong>Harga:</strong> Rp26.308.000</p>
                <a href=''>Beli Sekarang</a>
            </div>
            <br>
            <div class="product">
                <h2>HP Spectre x360</h2>
                <img src="<?= base_url('assets/images/hpp.webp');?>" alt="HP Spectre x360">
                <p><strong>Spesifikasi:</strong> Prosesor Intel Core i7, RAM 16GB, SSD 512GB</p>
                <p><strong>Harga:</strong> Rp20.999.000</p>
                <a href=''>Beli Sekarang</a>
            </div>
            <br>
            <div class="product">
                <h2>MacBook Air M2</h2>
                <img src="<?= base_url('assets/images/mac.jpg');?>" alt="MacBook Air M2">
                <p><strong>Spesifikasi:</strong> Prosesor Apple M2, RAM 8GB, Storage 256GB SSD</p>
                <p><strong>Harga:</strong> Rp18.999.000</p>
                <a href=''>Beli Sekarang</a>
            </div>
            <br>
            <div class="product">
                <h2>Lenovo Legion Slim 5</h2>
                <img src="<?= base_url('assets/images/Lenovo Legion Slim 5.jpg');?>" alt="Lenovo Legion Slim 5">
                <p><strong>Spesifikasi:</strong> Prosesor Intel Core i7, RAM 16GB, SSD 512GB</p>
                <p><strong>Harga:</strong> Rp24.000.000</p>
                <a href=''>Beli Sekarang</a>
            </div>
            <br>
            <div class="product">
                <h2>Acer Spin 5</h2>
                <img src="<?= base_url('assets/images/ACER Spin 5 SP514-51N-71ND.jpg');?>" alt="Acer Spin 5">
                <p><strong>Spesifikasi:</strong> Prosesor Intel Core i7, RAM 16GB, Storage 1TB SSD</p>
                <p><strong>Harga:</strong> Rp17.649.000</p>
                <a href=''>Beli Sekarang</a>
            </div>
            <br>
            <div class="product">
                <h2>Acer Predator Helios 300</h2>
                <img src="<?= base_url('assets/images/Acer Predator Helios 300.jpg');?>" alt="Acer Predator Helios 300">
                <p><strong>Spesifikasi:</strong> Prosesor Intel Core i7, RAM 16GB, Storage 512GB SSD</p>
                <p><strong>Harga:</strong> Rp13.500.000</p>
                <a href=''>Beli Sekarang</a>
            </div>
        </div>
    </div>
</section> -->

tambahkan desain disini........