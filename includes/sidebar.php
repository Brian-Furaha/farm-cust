<div class="sidebar">
  <div class="logo-details">
    <div class="logo_name">Farm&Cust</div>
    <i class='bx bx-menu' id="btn"></i>
  </div>
  <ul class="nav-list">
    <li>
      <i class='bx bx-search'></i>
      <input type="text" placeholder="Search...">
      <span class="tooltip">Search</span>
    </li>
    <li>
      <a href="admin_page.php">
        <i class='bx bx-grid-alt'></i>
        <span class="links_name">Dashboard</span>
      </a>
      <span class="tooltip">Dashboard</span>
    </li>
    <li>
      <a href="admin_profile.php">
        <i class='bx bx-user'></i>
        <span class="links_name">User</span>
      </a>
      <span class="tooltip">User</span>
    </li>
    <li>
      <a href="messages.php">
        <i class='bx bx-chat'></i>
        <span class="links_name">Messages</span>
      </a>
      <span class="tooltip">Messages</span>
    </li>
    <li>
      <a href="analytic.php">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Analytics</span>
      </a>
      <span class="tooltip">Analytics</span>
    </li>
    <li class="profile">
      <a href="">
        <div class="profile-details">
          <!--<img src="profile.jpg" alt="profileImg">-->
          <div class="name_job">
            <div class="name">user name</div>
            <div class="job">admin</div>
          </div>
        </div>
        <i class='bx bx-log-out' id="log_out"></i>
      </a>
    </li>
  </ul>
</div>

<script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    }

  );

  searchBtn.addEventListener("click", () => {
      // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    }

  );

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
    if (sidebar.classList.contains("open")) {
      closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
    } else {
      closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
    }
  }
</script>