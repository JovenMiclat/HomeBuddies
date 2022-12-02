<?php
include("includes/header.php");
include("sessionLogin.php");
?>

<link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script type="text/javascript">
document.title = 'Login Page';
document.body.style.backgroundImage =
    "url('https://images.pexels.com/photos/1797393/pexels-photo-1797393.jpeg?cs=srgb&dl=pexels-alexander-isreb-1797393.jpg&fm=jpg')";
document.body.style.backgroundRepeat = "no-repeat";
document.body.style.backgroundSize = "cover";
</script>

<!-- Start -->

<div class="container-fluid">
    <div class="row">
        <main class="col-12">
            <div class="d-flex justify-content-center">
                <div class="d-flex align-items-start mt-5 me-4">
                    <div class="nav flex-column nav-pills mt-2" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-resident-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-resident" type="button" role="tab" aria-controls="v-resident-home"
                            aria-selected="true">Resident</button>
                        <button class="nav-link" id="v-pills-admin-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-admin" type="button" role="tab" aria-controls="v-pills-admin-tab"
                            aria-selected="false">Admin</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active " id="v-pills-resident" role="tabpanel"
                            aria-labelledby="v-pills-resident-tab">
                            <div class="card hot me-5 mt-2 pt-3">
                                <div class="hot-header text-center">
                                    <h3 class="text-white">Resident Login</h3>
                                </div>
                                <div class="card-body mt-4">
                                    <form action="dblogin.php" method="POST">
                                        <div class="row g-4">
                                            <div class="input-group form-group mt-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text h-100"><i
                                                            class="fas fa-key text-primary"></i></span>
                                                </div>
                                                <input type="text" name="res_id" class="form-control col-10"
                                                    placeholder="Resident ID">
                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text h-100"><i
                                                            class="fas fa-unlock text-primary"></i></span>
                                                </div>
                                                <input type="password" name="res_pword" class="form-control col-10"
                                                    id="pw1" placeholder="Password">
                                            </div>
                                            <div class="d-grid d-md-flex justify-content-md-end">
                                                <button type="submit" name="dbLoginRes"
                                                    class="login_btn mt-3">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <p class="text-white"> Don't have an account? <a href="register.php">Register
                                            here!</a></p>
                                </div>
                            </div>
                            <div class="row">
                                <?php if (isset($_SESSION['message'])) { ?>
                                <div class="col-sm-12 alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show"
                                    role="alert">
                                    <?= $_SESSION['message'] ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="close"></button>
                                </div>
                                <?php session_unset();
                                } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-admin" role="tabpanel"
                            aria-labelledby="v-pills-admin-tab">
                            <div class="card hot me-5 mt-2 pt-3">
                                <div class="hot-header text-center">
                                    <h3 class="text-white">Admin Login</h3>
                                </div>
                                <div class="card-body mt-4">
                                    <form action="dblogin.php" method="POST">
                                        <div class="row g-4">
                                            <div class="input-group form-group mt-auto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text h-100"><i
                                                            class="fas fa-key text-primary"></i></span>
                                                </div>
                                                <input type="text" name="ad_id" class="form-control col-10"
                                                    placeholder="Admin ID">
                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text h-100"><i
                                                            class="fas fa-unlock text-primary"></i></span>
                                                </div>
                                                <input type="password" name="ad_pword" class="form-control col-10"
                                                    id="pw1" placeholder="Password">
                                            </div>
                                            <div class="d-grid d-md-flex justify-content-md-end">
                                                <button type="submit" name="dbLoginAdmin"
                                                    class="login_btn mt-3">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <?php if (isset($_SESSION['message'])) { ?>
                                <div class="col-sm-12 alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show"
                                    role="alert">
                                    <?= $_SESSION['message'] ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="close"></button>
                                </div>
                                <?php session_unset();
                                } ?>
                            </div>
                        </div>
                    </div>
                    <footer class="position-fixed col-12 bottom-0 start-50 translate-middle">
                        <div class="ftpart text-center">
                            <p class="text-white"><i class="far fa-copyright"></i> 2021 Home Buddies (Home Builders
                                Association) - All rights reserved </p>
                        </div>
                    </footer>
        </main>
    </div>
</div>

<!-- Finish -->

<?php include("includes/footer.php"); ?>