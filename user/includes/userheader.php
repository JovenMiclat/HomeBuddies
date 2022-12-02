<nav class="navbar navbar-expand-sm navbar-dark sticky-top p-0">

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="userannouncements.php"><img src="../imgs/logo.png"
            alt="HomeBuddies"></a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="#sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="w-100"></div>

    <div class="navbar-nav">

        <div class="nav-item text-nowrap dropdown">

            <a class="nav-link pe-5 text-center dropdown-toggle" href="#" id="dropdownProfile" data-bs-toggle="dropdown"
                aria-expanded="false">
                <?php echo $res_fname . " " . $res_lname; ?>
            </a>

            <ul class="dropdown-menu pe-5" aria-labelledby="dropdownProfile">

                <li><a class="dropdown-item" href="userprofilepage.php">Profile</a></li>

                <li><a class="dropdown-item" href="logoutUser.php">Log-out</a></li>

            </ul>

        </div>

    </div>

</nav>