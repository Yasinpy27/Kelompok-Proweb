
<body>
    <section >
      <ul class="nav justify-content-center bg-light fixed-top">
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"> -->
        <a class="buttonToggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
          aria-controls="offcanvasWithBothOptions"><i class="fas fa-bars toggleSlide"></i></a>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
          aria-labelledby="offcanvasWithBothOptionsLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
              Menu :
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul>
            <li class="nav-item">
                <a class="nav-link initial" href="#" aria-current="page">Ngapak Laptop</a>
            </li>

            <li class="nav-item-item">
                <a class="nav-link" href="<?= base_url('pages/index'); ?>">Home</a>
            </li>
            <li class="nav-item-item">
                <a class="nav-link" href="<?= base_url('pages/about'); ?>">About Us</a>
            </li>
            <li class="nav-item-item">
                <a class="nav-link" href="<?= base_url('pages/catalogue'); ?>">Catalogue</a>
            </li>
            <li class="nav-item-item">
                <a class="nav-link" href="<?= base_url('pages/partnership'); ?>">Partnership</a>
            </li>
            <li class="nav-item-item">
                <a class="nav-link" href="<?= base_url('pages/my_account'); ?>">My Account</a>
            </li>
            <li class="nav-item-item">
                <a class="nav-link" href="<?= base_url('pages/contact'); ?>">Contact</a>
            </li>
            </ul>
          </div>
        </div>
        <!-- </a> -->
      </li>
      <li class="nav-item">
        <a class="nav-link initial" href="<?= base_url('pages/index'); ?>" aria-current="page">Ngapak Laptop</a>
      </li>

      <li class="nav-item-item">
        <a class="nav-link" href="<?= base_url('pages/index'); ?>">Home</a>
      </li>
      <li class="nav-item-item">
        <a class="nav-link" href="<?= base_url('pages/about'); ?>">About Us</a>
      </li>
      <li class="nav-item-item">
        <a class="nav-link" href="<?= base_url('pages/catalogue'); ?>">Catalogue</a>
      </li>
      <li class="nav-item-item">
        <a class="nav-link" href="<?= base_url('pages/partnership'); ?>">Partnership</a>
      </li>
      <li class="nav-item-item">
        <a class="nav-link" href="<?= base_url('pages/my_account'); ?>">My Account</a>
      </li>
      <li class="nav-item-item">
        <a class="nav-link" href="<?= base_url('pages/contact'); ?>">Contact</a>
      </li>
    </ul>
</section>