<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            
            <li class="nav-item">
                <p>
                  <button class="btn btn-primary text-left col-12" type="button" data-bs-toggle="collapse"  data-bs-target="#collapseAnnounce" aria-expanded="false" aria-controls="multiCollapseExample1">
                  <i class="fas fa-bullhorn dbic"></i>
                  Announcements
                  </button>
                </p>
                <div class="collapse" id="collapseAnnounce">
                    <div class="card card-body mb-2">
                        <a class="nav-link
                        <?php if($currentPage == 'userannouncements.php'){
                            echo 'active';
                        }?>
                        " href="userannouncements.php"><i class="fas fa-clipboard-list"></i>
                        Bulletin</a>
                        
                        <a class="nav-link
                        <?php if($currentPage == 'usermonthlyreport.php'){
                            echo 'active';
                        }?>
                        " href="usermonthlyreport.php"><i class="fas fa-calendar-check"></i>
                        Monthly Report</a>

                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link
                <?php if($currentPage == 'userdues.php'){
                    echo 'active';
                }?>
                " href="userdues.php"><i class="fas fa-receipt dbic"></i>
                Dues</a>
            </li>
            <li class="nav-item">
                <a class="nav-link
                <?php if($currentPage == 'usercars.php'){
                    echo 'active';
                }?>
                " href="usercars.php"><i class="fas fa-car dbic"></i>
                Cars</a>
            </li>
            <li class="nav-item">
                <a class="nav-link
                <?php if($currentPage == 'userpets.php'){
                    echo 'active';
                }?>
                " href="userpets.php"><i class="fas fa-paw dbic"></i>
                Pets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link
                <?php if($currentPage == 'userofficials.php'){
                    echo 'active';
                }?>
                " href="userofficials.php"><i class="fas fa-sitemap dbic"></i>
                Officials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link
                <?php if($currentPage == 'userdirectory.php'){
                    echo 'active';
                }?>
                " href="userdirectory.php"><i class="fas fa-phone-volume"></i>
                Directory</a>
            </li>
        </ul>
    </div>
</nav>