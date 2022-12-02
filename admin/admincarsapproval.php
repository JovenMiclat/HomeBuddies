<?php 
include('../dbcon.php');
include("../includes/header.php"); 
include('includes/sessionAdmin.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        document.title = 'Car Management';
    </script>

<?php include('includes/adminheader.php'); ?>
    <div class="container-fluid ">
      <div class="row">
        <?php include('includes/adminsidebar.php'); ?>     
    
<!-- Start -->
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Car Management</h1>
            </div>

            <h2>Cars Pending for Approval</h2>
         <div class='table-responsive'>
            <?php
              $loggedinRes = $_SESSION['res_id'];
              $query = "SELECT * FROM car_approval INNER JOIN residents ON car_approval.res_id = residents.res_id"; 
              $result = mysqli_query($conn, $query);
             
              if ($result->num_rows > 0) {
                echo "
                <table class='table table-striped table-sm'>
                <thead>
                  <tr>
                    <th scope='col'>Resident ID</th>
                    <th scope='col'>Resident Name</th>
                    <th scope='col'>Plate Number</th>
                    <th scope='col'>Car Brand</th>
                    <th scope='col'>Car Model</th>
                    <th scope='col'>Year Made</th>
                    <th scope='col'>Car Color</th>
                    <th scope='col'>Action</th>
                  </tr>
                </thead>";

								while($row = mysqli_fetch_assoc($result)){ 
								  ?>
                  <tr>
                    <td><?php echo $row['res_id'];?></td>
                    <td><?php echo $row['res_fname']." ".$row['res_lname'];?></td>
                    <td><?php echo $row['ap_car_platenum'];?></td>
                    <td><?php echo $row['ap_car_brand'];?></td>
                    <td><?php echo $row['ap_car_mod'];?></td>
                    <td><?php echo $row['ap_car_year'];?></td>
                    <td><?php echo $row['ap_car_color'];?></td>
                    <td>
                        <a href="carAdd.php?ap_car_platenum=<?php echo $row['ap_car_platenum']?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-check"></i>
                        </a>
                        <a href="carDelete.php?ap_car_platenum=<?php echo $row['ap_car_platenum']?>" class="btn btn-danger btn-sm">
                          <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
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