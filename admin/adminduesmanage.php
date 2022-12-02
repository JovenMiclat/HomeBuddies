<?php 
include('../dbcon.php');
include("../includes/header.php"); 
include('includes/sessionAdmin.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        document.title = 'Manage Dues';
    </script>

<?php include('includes/adminheader.php'); ?>
    <div class="container-fluid ">
      <div class="row">
        <?php include('includes/adminsidebar.php'); ?>     
    
<!-- Start -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Manage Dues</h1>
            </div>
            <h3 class="mb-5">Upload Invoice</h3>
            <form method="POST">
              <div class="row g-4">
                <div class="input-group form-group mt-auto mb-3">
                  <input type="file" name="myFile"/>
                </div>
                <div class="input-group form-group mt-auto">
                  <div class="input-group-prepend">
                    <span class="input-group-text h-100"><i class="fas fa-fingerprint text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="res_id" class="form-control col-4" placeholder="Resident ID" required>
                  </div>

                <div class="input-group form-group">
                <p>Date Issued: </p>
                  <div class="input-group-prepend">
                    <span class="input-group-text h-100 ms-2"><i class="fas fa-calendar text-primary col-2"></i></span>
                  </div>
                  <input type="date" name="date_issued" class="form-control col-4 me-2" required>
                  <p>Date Paid: </p>
                  <div class="input-group-prepend ms-2">
                    <span class="input-group-text h-100"><i class="far fa-calendar-check text-primary col-2"></i></span>
                  </div>
                  <input type="date" name="date_paid" class="form-control col-4" required>
                </div>

                 <div class="me-5 mt-2">
                    <button type="submit" name="dueSubmit" class="login_btn">Submit</button>
                  </div>
                
              </div>
						</form>

            <?php
            
            // $host = "sql310.epizy.com";
            // $dbUsername = "epiz_29043610";
            // $dbPassword = "jm1YYyBgGjiU4";
            // $dbName = "epiz_29043610_test";
            // $conn = new PDO($host, $dbUsername, $dbPassword, $dbName) or die(mysqli_error($mysqli));

            //  if (isset($_POST['carAdd'])) {
            //    $name = $_FILES['myFile']['name'];
            //    $type = $_FILES['myFile']['type'];
            //    $data = file_get_contents($_FILES['myFile']['tmp_name']);
            //   $stmt = $conn->prepare("insert into blobpdf values('',?,?,?)");
            //       $stmt -> bindParam(1,$name);
            //       $stmt -> bindParam(2,$type);
            //       $stmt -> bindParam(1,$data);
            //       $stmt -> execute();
            //  }
            // ?>
          </main>
        </div>
      </div>
<!-- Finish -->
<?php include("../includes/footer.php"); ?>