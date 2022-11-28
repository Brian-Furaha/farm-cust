<div class="bg-white d-flex align-items-center fixed-top shadow" style="min-height: 56px; z-index: 5">
  <div class="container-fluid">
    <div class="row align-items-center">
      <!-- search -->
      <div class="col d-flex align-items-center">
        <!-- logo -->
        <!-- <img src="../images/farmcust.png" style="" alt="farm$cust"> -->
        <!-- search bar -->
        <div class="input-group ms-2" type="button">
          <!-- mobile -->
          <span class="input-group-prepend d-lg-none" id="searchMenu" data-bs-toggle="dropdown" aria-expanded="false"
            data-bs-auto-close="outside">
            <div class="input-group-text bg-gray border-0 rounded-circle" style="min-height: 40px">
              <i class="fas fa-search text-muted"></i>
            </div>
          </span>
          <!-- desktop -->
          <span class="input-group-prepend d-none d-lg-block" id="searchMenu" data-bs-toggle="dropdown"
            aria-expanded="false" data-bs-auto-close="outside">
            <div class="input-group-text bg-gray border-0 rounded-pill" style="min-height: 40px; min-width: 230px">
              <i class="fas fa-search me-2 text-muted"></i>
              <p class="m-0 fs-7 text-muted">Search farm$cust</p>
            </div>
          </span>
          <!-- search menu -->
          <?php
          include '../includes/searchmen.php';
          ?>
        </div>
      </div>
      <!-- nav -->
      <div class="col d-none d-xl-flex justify-content-center">
        <!-- home -->
        <div class="mx-4 nav__btn nav__btn-active">
          <button type="button" class="btn px-4">
            <i class="fas fa-home text-muted fs-4"></i>
          </button>
        </div>
        <!-- market -->
        <div class="mx-4 nav__btn">
          <button type="button" class="btn px-4">
            <i class="fas fa-store text-muted fs-4"></i>
          </button>
        </div>
        <!-- group -->
        <div class="mx-4 nav__btn">
          <button type="button" class="btn px-4">
            <i type="button" class="position-relative fas fa-users text-muted fs-4">
              <span class="
                      position-absolute
                      top-0
                      start-100
                      translate-middle
                      badge
                      rounded-pill
                      bg-danger
                    " style="font-size: 0.5rem">
                1
                <span class="visually-hidden"></span>
              </span>
            </i>
          </button>
        </div>
        <!-- gaming -->
        <div class="mx-4 nav__btn">
          <button type="button" class="btn px-4">
            <i class="fas fa-gamepad text-muted fs-4"></i>
          </button>
        </div>
      </div>
      <!-- menus -->
      <?php
      include '../includes/menus.php'
      ?>
    </div>
  </div>
</div>