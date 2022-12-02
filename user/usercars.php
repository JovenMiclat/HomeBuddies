<?php 
  include('../includes/header.php');
  include('../dbcon.php');
  include('includes/sessionUser.php');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        document.title = 'Car Section';
    </script>
<!-- Start -->
  <?php include('includes/userheader.php'); ?>
    <div class="container-fluid ">
      <div class="row">
        <?php include('includes/usersidebar.php'); ?>
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1>Car Section</h1>
            </div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <h3>Add Car</h3>
            </div>

            <form action="carAdd.php" method="POST">
              <div class="row g-4">
                <div class="input-group form-group mt-auto">
                  <div class="input-group-prepend">
                    <span class="input-group-text h-100"><i class="fas fa-fingerprint text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="car_platenum" class="form-control col-4" placeholder="Plate Number"required>
                  <div class="input-group-prepend ms-2">
                    <span class="input-group-text h-100"><i class="far fa-copyright text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="car_brand" class="form-control col-4" placeholder="Car Brand"required>
                </div>

                <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text h-100"><i class="fas fa-car-side text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="car_mod" class="form-control col-4" placeholder="Car Model" required>
                  
                <div class="input-group-prepend ms-2">
                    <span class="input-group-text h-100"><i class="far fa-calendar-minus text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="car_year" class="form-control col-4" placeholder="Year Made" required>
                  </div>

                <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text h-100"><i class="fas fa-palette text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="car_color" class="form-control col-4 me-5" placeholder="Car Color" required>
                 <div class="me-5 mt-2">
                    <button type="submit" name="carAdd" class="login_btn">Add Car</button>
                  </div>
                </div>

              </div>
						</form>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mt-5 mb-3 border-bottom">
            <h2>Car Properties</h2>
            </div>

            <div class='table-responsive'>
            <?php
              $loggedinRes = $_SESSION['res_id'];
              $query = "SELECT * FROM car INNER JOIN residents ON car.res_id = residents.res_id WHERE residents.res_id = '$loggedinRes'";
              $result = mysqli_query($conn, $query);
              if ($result->num_rows > 0) {
                echo "
                <table class='table table-striped table-sm'>
                <thead>
                  <tr>
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
                    <td><?php echo $row['car_platenum'];?></td>
                    <td><?php echo $row['car_brand'];?></td>
                    <td><?php echo $row['car_mod'];?></td>
                    <td><?php echo $row['car_year'];?></td>
                    <td><?php echo $row['car_color'];?></td>
                    <td>
                        <a href="carDelete.php?car_platenum=<?php echo $row['car_platenum']?>" class="btn btn-danger btn-sm">
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
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mt-5 mb-3 border-bottom">
            <h2>For approval</h2>
            </div>
            <div class='table-responsive'>
            <?php
              $loggedinRes = $_SESSION['res_id'];
              $query = "SELECT * FROM car_approval INNER JOIN residents ON car_approval.res_id = residents.res_id WHERE residents.res_id = '$loggedinRes'";
              $result = mysqli_query($conn, $query);
              if ($result->num_rows > 0) {
                echo "
                <table class='table table-striped table-sm'>
                <thead>
                  <tr>
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
                    <td><?php echo $row['ap_car_platenum'];?></td>
                    <td><?php echo $row['ap_car_brand'];?></td>
                    <td><?php echo $row['ap_car_mod'];?></td>
                    <td><?php echo $row['ap_car_year'];?></td>
                    <td><?php echo $row['ap_car_color'];?></td>
                    <td>
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