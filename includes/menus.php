<div class="col d-flex align-items-center justify-content-end">
  <!-- avatar -->
  <div class="align-items-center justify-content-center d-none d-xl-flex">
    <img src="https://source.unsplash.com/collection/happy-people" class="rounded-circle me-2" alt="avatar"
      style="width: 38px; height: 38px; object-fit: cover" />
    <p class="m-0">John</p>
  </div>
  <!-- main menu -->
  <div class="
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2
              " style="width: 38px; height: 38px" type="button" id="mainMenu" data-bs-toggle="dropdown"
    aria-expanded="false" data-bs-auto-close="outside">
    <i class="fas fa-ellipsis-h"></i>
  </div>
  <!-- main menu dd -->
  <ul class="dropdown-menu border-0 shadow p-3 overflow-auto" aria-labelledby="mainMenu"
    style="width: 23em; max-height: 600px">
    <!-- menu -->
    <div>
      <!-- header -->
      <li class="p-1 mx-2">
        <h2>Menu</h2>
      </li>
      <!-- search -->
      <li class="p-1">
        <div class="input-group-text bg-gray border-0 rounded-pill" style="min-height: 40px; min-width: 230px">
          <i class="fas fa-search me-2 text-muted"></i>
          <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Search Menu" />
        </div>
      </li>
      <!-- create -->
      <?php
      include '../includes/create.php';
      ?>
  </ul>
  <!-- chat -->
  <?php
  include '../includes/chat.php';
  ?>
  <!-- secondary menu -->
  <?php
  include '../includes/secmenu.php';
  ?>
  <!-- end -->
</div>