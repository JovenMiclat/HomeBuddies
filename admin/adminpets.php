<?php 
include('../dbcon.php');
include("../includes/header.php"); 
include('includes/sessionAdmin.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        document.title = 'Pet Section';
    </script>
<!-- Start -->
<?php include('includes/adminheader.php'); ?>
    <div class="container-fluid ">
      <div class="row">
        <?php include('includes/adminsidebar.php'); ?>     

          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1>Pet Section</h1>
            </div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <h3>Add Pets</h3>
            </div>

            <form action="petAdd.php" method="POST">
              <div class="row g-4">
                <div class="input-group form-group mt-auto">
                  <div class="input-group-prepend">
                    <span class="input-group-text h-100"><i class="fas fa-fingerprint text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="pet_id" class="form-control col-4" placeholder="Pet ID" required>
                  <div class="input-group-prepend ms-2">
                    <span class="input-group-text h-100"><i class="fas fa-cat text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="pet_name" class="form-control col-4" placeholder="Pet Name" required>
                </div>

                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text h-100"><i class="fas fa-paw text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="pet_specie" class="form-control col-4" placeholder="Pet Species" required>
                  <div class="input-group-prepend ms-2">
                    <span class="input-group-text h-100"><i class="fas fa-dog text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="pet_breed" class="form-control col-4" placeholder="Pet Breed" required>
                </div>

                <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text h-100"><i class="fas fa-venus-mars text-primary col-2"></i></span>
                  </div>
                  <input type="text" name="pet_gender" class="form-control col-4 me-5" placeholder="Pet Gender" required>
                  <div class="me-5 mt-2">
                    <button type="submit" name="petAdd" class="login_btn">Add Pet</button>
                  </div>
                </div>
              </div>
						</form>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mt-5 mb-3 border-bottom">
                <h3>Pet Database</h3>
            </div>

         <div class='table-responsive'>
            <?php
              $loggedinRes = $_SESSION['res_id'];
              $query = "SELECT * FROM pets INNER JOIN residents ON pets.res_id = residents.res_id WHERE residents.res_id = '$loggedinRes'";
             
              $result = mysqli_query($conn, $query);
              if ($result->num_rows > 0) {
                echo "
                <table class='table table-striped table-sm'>
                <thead>
                <tr>
                <th scope='col'>Pet ID</th>
                <th scope='col'>Pet Name</th>
                <th scope='col'>Pet Specie</th>
                <th scope='col'>Pet Breed</th>
                <th scope='col'>Pet Gender</th>
                <th scope='col'>Action</th>
              </tr>
                </thead>";

								while($row = mysqli_fetch_assoc($result)){ 
								  ?>
                  <tr>
                    <td><?php echo $row['pet_id'];?></td>
                    <td><?php echo $row['pet_name'];?></td>
                    <td><?php echo $row['pet_specie'];?></td>
                    <td><?php echo $row['pet_breed'];?></td>
                    <td><?php echo $row['pet_gender'];?></td>
                    <td>
                        <a href="petDelete.php?pet_id=<?php echo $row['pet_id']?>" class="btn btn-danger btn-sm">
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
              $query = "SELECT * FROM pets_approval INNER JOIN residents ON pets_approval.res_id = residents.res_id WHERE residents.res_id = '$loggedinRes'";
              $result = mysqli_query($conn, $query);
              if ($result->num_rows > 0) {
                echo "
                <table class='table table-striped table-sm'>
                <thead>
                  <tr>
                    <th scope='col'>Pet ID</th>
                    <th scope='col'>Pet Name</th>
                    <th scope='col'>Pet Specie</th>
                    <th scope='col'>Pet Breed</th>
                    <th scope='col'>Pet Gender</th>
                    <th scope='col'>Action</th>
                  </tr>
                </thead>";

								while($row = mysqli_fetch_assoc($result)){ 
								  ?>
                  <tr>
                    <td><?php echo $row['ap_pet_id'];?></td>
                    <td><?php echo $row['ap_pet_name'];?></td>
                    <td><?php echo $row['ap_pet_specie'];?></td>
                    <td><?php echo $row['ap_pet_breed'];?></td>
                    <td><?php echo $row['ap_pet_gender'];?></td>
                    <td>
                        <a href="petDelete.php?ap_pet_id=<?php echo $row['ap_pet_id']?>" class="btn btn-danger btn-sm">
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

            </div>
          </main>
        </div>
      </div>
<!-- Finish -->
<?php include("../includes/footer.php"); ?>