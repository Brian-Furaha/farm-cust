<?php ob_start();

@include '../db/conn.php';

session_start();
/** $id = $_SESSION['user_id'];
 *$email = $_SESSION['admin_email'];
 *if (!isset($id)) {
 *    header('location:../login.php');
 *} else {

 *    $select = " SELECT * FROM user WHERE user_id = '$id'";

 *    $result = mysqli_query($conn, $select);
 *    if (mysqli_num_rows($result) < 2) {

 *        $row2 = mysqli_fetch_array($result);
 *        $_SESSION['email'] = $row['login_email'];
 *        $_SESSION['user_id'] = $row['login_user_id'];
 *        header('location:../create_profile.php');
 *    }
 *}*/

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="navbar">
        <!-- Navbar logo -->

        <div class="nav-header">
            <div class="nav-logo"><a href="#"><img src="../images/farmcust.png" width="100px" alt="logo"></a>
            </div>
        </div>

        <!-- Navbar items -->

        <div class="nav-links">
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="../logout.php"><button class="loginBtn">Logout</button></a>

        </div>
    </div>
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">Farm&Cust</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search..."><span class="tooltip">Search</span>
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
                <a href="logout.php">
                    <div class="profile-details">
                        <!--<img src="profile.jpg" alt="profileImg">-->
                        <div class="name_job">
                            <div class="name">user name</div>
                            <div class="job">admin</div>
                        </div>
                    </div>
                    <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Dashboard</div>
        <div class="container">
            <div class="content">
                <h3>hi,
                    <span>admin</span>
                </h3>
                <h1>welcome <span></span></h1>
                <p>this is an admin page</p><a href="../index.php" class="btn">login or register</a><a href="../index.php" class="btn">Logout</a>
            </div>
        </div>
    </section>
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
</body>

</html>