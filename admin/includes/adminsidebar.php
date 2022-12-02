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
                        <?php if($currentPage == 'adminannouncements.php'){
                            echo 'active';
                        }?>
                        " href="adminannouncements.php"><i class="fas fa-clipboard-list"></i>
                        Bulletin</a>
                        
                        <a class="nav-link
                        <?php if($currentPage == 'adminmonthlyreport.php'){
                            echo 'active';
                        }?>
                        " href="adminmonthlyreport.php"><i class="fas fa-calendar-check"></i>
                        Monthly Report</a>

                        <a class="nav-link
                            <?php if($currentPage == 'adminannouncemanage.php'){
                                echo 'active';
                            }?>
                            " href="adminannouncemanage.php"><i class="fas fa-user-cog"></i>
                            Manage</a>
                        </div>
                </div>
            </li>

            <li class="nav-item">
                <p>
                  <button class="btn btn-primary text-left col-12" type="button" data-bs-toggle="collapse"  data-bs-target="#collapseDues" aria-expanded="false" aria-controls="multiCollapseExample1">
                  <i class="fas fa-calendar-minus"></i>
                  Monthly Dues
                  </button>
                </p>
                <div class="collapse" id="collapseDues">
                    <div class="card card-body mb-2">

                <a class="nav-link
                <?php if($currentPage == 'admindues.php'){
                    echo 'active';
                }?>
                " href="admindues.php"><i class="fas fa-receipt dbic"></i>
                Dues</a>
                
                <a class="nav-link
                <?php if($currentPage == 'adminduesmanage.php'){
                    echo 'active';
                }?>
                " href="adminduesmanage.php"><i class="fas fa-user-cog"></i>
                Manage</a>

            </div>
            </div>
            </li>

            <li class="nav-item">
            <p>
                  <button class="btn btn-primary text-left col-12" type="button" data-bs-toggle="collapse"  data-bs-target="#collapseCar" aria-expanded="false" aria-controls="multiCollapseExample1">
                  <i class="fas fa-car dbic"></i>
                  Cars
                  </button>
                </p>
                <div class="collapse" id="collapseCar">
                        <div class="card card-body mb-2">
                            
                            <a class="nav-link
                            <?php if($currentPage == 'admincars.php'){
                                echo 'active';
                            }?>
                            " href="admincars.php"><i class="fas fa-project-diagram"></i> 
                            Properties</a>
                            <a class="nav-link
                            <?php if($currentPage == 'admincarsapproval.php'){
                                echo 'active';
                            }?>
                            " href="admincarsapproval.php"><i class="fas fa-user-cog"></i>
                            Manage</a>
                        </div>
                </div>
            </li>

            <li class="nav-item">
                <p>
                  <button class="btn btn-primary text-left col-12" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePet" aria-expanded="false" aria-controls="multiCollapseExample2">
                  <i class="fas fa-paw dbic"></i>
                  Pets
                  </button>
                </p>
                <div class="collapse" id="collapsePet">
                  <div class="card card-body mb-2">
                        <a class="nav-link
                        <?php if($currentPage == 'adminpets.php'){
                            echo 'active';
                        }?>
                        " href="adminpets.php"><i class="fas fa-project-diagram"></i> 
                            Properties</a>
                        
                        <a class="nav-link
                        <?php if($currentPage == 'adminpetsapproval.php'){
                            echo 'active';
                        }?>
                        " href="adminpetsapproval.php"><i class="fas fa-user-cog"></i>
                            Manage</a>
                  </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link
                <?php if($currentPage == 'adminofficials.php'){
                    echo 'active';
                }?>
                " href="adminofficials.php"><i class="fas fa-sitemap dbic"></i>
                Officials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link
                <?php if($currentPage == 'admindirectory.php'){
                    echo 'active';
                }?>
                " href="admindirectory.php"><i class="fas fa-phone-volume"></i>
                Directory</a>
            </li>
        </ul>
    </div>
</nav>