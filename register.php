<?php
include("includes/header.php");
session_start();
?>

<link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<script type="text/javascript">
document.title = 'Registration';

document.body.style.backgroundImage =
    "url('https://images.pexels.com/photos/1637080/pexels-photo-1637080.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')";

document.body.style.backgroundRepeat = "no-repeat";

document.body.style.backgroundSize = "cover";
</script>

<!-- Start -->

<div class="container-fluid">

    <div class="row">

        <main class="col-12">

            <div class="d-flex pt justify-content-end pt-2 pe-5">

                <div class="card hot2 mt-2 pt-3">

                    <div class="hot2-header text-center">

                        <h3 class="text-white"> Sign Up </h3>

                        <div class="card-body mt-2">

                            <form action="dbregister.php" method="POST">

                                <div class="row g-2">

                                    <div class="input-group form-group mt-auto">

                                        <div class="input-group-prepend">

                                            <span class="input-group-text h-100"><i
                                                    class="fas fa-id-card-alt text-primary col-2"></i></span>

                                        </div>

                                        <input type="text" name="res_id" class="form-control col-10"
                                            placeholder="Resident ID" required>

                                    </div>

                                    <div class="input-group form-group">

                                        <input type="text" name="res_fname" class="form-control col-5"
                                            placeholder="First Name" required>

                                        <input type="text" name="res_lname" class="form-control col-6"
                                            placeholder="Last Name" required>

                                    </div>

                                    <div class="input-group form-group">

                                        <div class="input-group-prepend">

                                            <span class="input-group-text h-100"><i
                                                    class="fas fa-envelope-square text-primary col-2"></i></span>

                                        </div>

                                        <input type="email" name="res_email" class="form-control col-10"
                                            placeholder="Email" required>

                                    </div>

                                    <div class="input-group form-group">

                                        <span class="input-group-text">+63</span>

                                        <input type="tel" name="res_cnum" class="form-control col-10"
                                            placeholder="Contact Number" pattern="[9]{1}[0-9]{9}"
                                            title="Format: 9XXXXXXXXX" required>

                                    </div>

                                    <div class="input-group form-group">

                                        <div class="input-group-prepend">

                                            <span class="input-group-text h-100"><i
                                                    class="fas fa-birthday-cake text-primary col-2"></i></span>

                                        </div>

                                        <input type="date" name="res_bday" class="form-control h-100 col-7" required>

                                    </div>

                                    <div class="input-group form-group">

                                        <input type="text" name="res_gender" class="form-control col-5"
                                            placeholder="Gender" required>

                                    </div>

                                    <div class="input-group form-group">

                                        <input type="password" name="res_pword" class="form-control col-12" id="pw1"
                                            placeholder="Password" required>

                                    </div>

                                    <div class="input-group form-group">

                                        <input type="password" class="form-control col-12" id="pw2"
                                            placeholder="Confirm Password" required>

                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                        <button type="submit" name="dbregister" class="login_btn mt-3">Register</button>

                                    </div>

                                </div>

                            </form>

                        </div>

                        <div class="hot2-footer">

                            <div class="d-flex justify-content-center links">

                                <p class="text-white">Already have an account? <a href="login.php">Login here!</a></p>

                            </div>

                        </div>

                        <div class="row">

                            <?php if (isset($_SESSION['message'])) { ?>

                            <div class="col-sm-12 alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show"
                                role="alert">

                                <?= $_SESSION['message']?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="close"></button>

                            </div>

                            <?php session_unset();
}?>

                        </div>

                    </div>

                </div>

                <footer class="position-fixed col-12 bottom-0 start-50 translate-middle">

                    <div class="ftpart text-center">

                        <p class="text-white"><i class="far fa-copyright"></i> 2021 Home Buddies (Home Builders
                            Association) - All rights reserved </p>

                    </div>

                </footer>

        </main>>

    </div>

</div>

<script src="../scripts/register.js"></script>

<!-- Finish -->

<?php include("includes/footer.php"); ?>