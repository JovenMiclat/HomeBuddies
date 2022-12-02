<?php

include('../dbcon.php');

include("../includes/header.php");

include('includes/sessionUser.php');

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

<script type="text/javascript">
document.title = "Profile";
</script>

<?php include('includes/userheader.php'); ?>

<div class="container-fluid">
    <div class="row">
        <?php include('includes/usersidebar.php'); ?>

        <!-- Start -->

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">User Profile</h1>
            </div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5">
                <h3>Update Information</h3>
            </div>

            <?php

            $loggedinRes = $_SESSION['res_id'];

            $query = "SELECT * FROM residents WHERE res_id = '$loggedinRes'";

            $result = mysqli_query($conn, $query);

            $row = mysqli_fetch_assoc($result);



            $fname = $row['res_fname'] . " " . $row['res_lname'];

            $email = $row['res_email'];

            $cnum = $row['res_cnum'];

            $bday = $row['res_bday'];

            $gender = $row['res_gender'];

            $password = $row['res_pword'];

            ?>

            <form action="profileUpdate.php" method="POST">
                <div class="row g-4">
                    <div class="input-group form-group mt-auto">
                        <h4>
                            <span class="label label-default h-100 me-1 mt-1 text-primary">Resident ID:
                            </span>
                        </h4>

                        <input type="text" name="res_id" class="form-control me-5" value="<?php

                        echo $loggedinRes;

                        ?>" readonly />

                        <h4>
                            <span class="label label-default h-100 me-1 mt-1 text-primary">Full Name:
                            </span>
                        </h4>

                        <input type="text" name="full_name" class="form-control" value="<?php

                        echo $fname;

                        ?>" readonly />
                    </div>

                    <div class="input-group form-group">
                        <h4>
                            <span class="label label-default h-100 me-1 mt-1 text-primary">Email:
                            </span>
                        </h4>

                        <input type="email" name="email" class="form-control me-5" value="<?php

                        echo $email;

                        ?>" required />

                        <h4>
                            <span class="label label-default h-100 me-1 mt-1 text-primary">Contact Number:
                            </span>
                        </h4>

                        <input type="text" name="cnum" class="form-control" value="<?php

                        echo $cnum;

                        ?>" required />
                    </div>

                    <div class="input-group form-group">
                        <h4>
                            <span class="label label-default h-100 me-1 mt-1 text-primary">Birthday:
                            </span>
                        </h4>

                        <input type="text" name="res_bday" class="form-control me-5" value="<?php

                        echo $bday;

                        ?>" readonly />

                        <h4>
                            <span class="label label-default h-100 me-1 mt-1 text-primary">Gender:
                            </span>
                        </h4>

                        <input type="text" name="res_gender" class="form-control" value="<?php

                        echo $gender;

                        ?>" readonly />
                    </div>

                    <div class="input-group form-group">
                        <div class="d-grid d-md-flex justify-content-md-end">
                            <h4>
                                <span class="label label-default h-100 me-1 mt-1 text-primary">Password:
                                </span>
                            </h4>

                            <input type="password" name="pword" class="form-control me-5" value="<?php

                            echo $password;

                            ?>" required />
                        </div>
                    </div>

                    <div class="input-group form-group">
                        <div class="d-grid d-md-flex justify-content-md">
                            <input type="submit" name="Updatebtn" value="Update" class="login_btn btn-lg" />
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>

<!-- Finish -->

<?php include("../includes/footer.php"); ?>