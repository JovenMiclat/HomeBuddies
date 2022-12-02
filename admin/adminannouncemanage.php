<?php 
include('../dbcon.php');
include("../includes/header.php"); 
include('includes/sessionAdmin.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        document.title = 'Manage Announcements';
    </script>

<?php include('includes/adminheader.php'); ?>
    <div class="container-fluid ">
      <div class="row">
        <?php include('includes/adminsidebar.php'); ?>     
    
<!-- Start -->
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Manage Announcements</h1>
            </div>
            <h3 class="mb-5">Post Announcements</h3>
            <form method="POST">
              <div class="row g-4">
                <div class="input-group form-group mt-auto mb-3">
                  <input type="file" name="myFile"/>
                </div>
                <div class="input-group form-group mt-auto mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text h-100"><i class="fas fa-sticky-note text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="slide1_des" class="form-control col-4" placeholder="Slide 1 Description" required>
                </div>
                <div class="input-group form-group mt-auto mb-3">
                  <input type="file" name="myFile"/>
                </div>
                <div class="input-group form-group mt-auto mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text h-100"><i class="fas fa-sticky-note text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="slide1_des" class="form-control col-4" placeholder="Slide 2 Description" required>
                </div>
                <div class="input-group form-group mt-auto mb-3">
                  <input type="file" name="myFile"/>
                </div>
                <div class="input-group form-group mt-auto mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text h-100"><i class="fas fa-sticky-note text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="slide1_des" class="form-control col-4" placeholder="Slide 3 Description" required>
                </div>
                <div class="me-5 mt-2">
                  <button type="submit" name="dueSubmit" class="login_btn">Submit</button>
                </div>
              </div>
						</form>
            <h3 class="mb-5">Upload Monthly Budget Report</h3>
            <form method="POST">
              <div class="row g-4">
                <div class="input-group form-group mt-auto mb-3">
                  <input type="file" name="myFile"/>
                </div>
                <div class="input-group form-group mt-auto">
                  <div class="input-group-prepend">
                    <span class="input-group-text h-100"><i class="fas fa-sticky-note text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="rep_des" class="form-control col-4" placeholder="Description" required>
                </div>
                <div class="me-5 mt-2">
                  <button type="submit" name="dueSubmit" class="login_btn">Submit</button>
                </div>
              </div>
						</form>
          </main>
        </div>
      </div>
<!-- Finish -->
<?php include("../includes/footer.php"); ?>