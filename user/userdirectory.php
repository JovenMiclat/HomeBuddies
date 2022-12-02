<?php 
  include('../includes/header.php');
  include('../dbcon.php');
  include('includes/sessionUser.php');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        document.title = 'Officials';
    </script>
<!-- Start -->
  <?php include('includes/userheader.php'); ?>
    <div class="container-fluid ">
      <div class="row">
        <?php include('includes/usersidebar.php'); ?>

          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Directory</h1>
            </div>
      
            <h2>Community Contact Info</h2>
            <div class='table-responsive'>
            <?php
              $loggedinRes = $_SESSION['res_id'];
              $query = "SELECT * FROM residents WHERE res_id != '$loggedinRes' AND res_registered='1'";
             
              $result = mysqli_query($conn, $query);
              if ($result->num_rows > 0) {
                echo "
                <table class='table table-striped table-sm'>
                <thead>
                <tr>
                <th scope='col'>Resident Name</th>
                <th scope='col'>Email</th>
                <th scope='col'>Contact Number</th>
              </tr>
                </thead>";

			while($row = mysqli_fetch_assoc($result)){ 
				?>
                  <tr>
                    <td><?php echo $row['res_fname'] . " " . $row['res_lname'];?></td>
                    <td><?php echo $row['res_email'];?></td>
                    <td><?php echo $row['res_cnum'];?></td>
                  </tr>
                <?php
                }
                echo "</table>";
              }
              ?>

              </div>
          </main>
        </div>
      </div>
<!-- Finish -->
<?php include("../includes/footer.php"); ?>