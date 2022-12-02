<?php 
include('../dbcon.php');
include("../includes/header.php"); 
include('includes/sessionAdmin.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        document.title = 'Pet Management';
    </script>

<?php include('includes/adminheader.php'); ?>
    <div class="container-fluid ">
      <div class="row">
        <?php include('includes/adminsidebar.php'); ?>     
    
<!-- Start -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Pet Management</h1>
            </div>

            <h2>Pets Pending for Approval</h2>
         <div class='table-responsive'>
            <?php
              $loggedinRes = $_SESSION['res_id'];
              $query = "SELECT * FROM pets_approval INNER JOIN residents ON pets_approval.res_id = residents.res_id"; 
              $result = mysqli_query($conn, $query);
             
              if ($result->num_rows > 0) {
                echo "
                <table class='table table-striped table-sm'>
                <thead>
                  <tr>
                    <th scope='col'>Resident ID</th>
                    <th scope='col'>Resident Name</th>
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
                    <td><?php echo $row['res_id'];?></td>
                    <td><?php echo $row['res_fname']." ".$row['res_lname'];?></td>
                    <td><?php echo $row['ap_pet_id'];?></td>
                    <td><?php echo $row['ap_pet_name'];?></td>
                    <td><?php echo $row['ap_pet_specie'];?></td>
                    <td><?php echo $row['ap_pet_breed'];?></td>
                    <td><?php echo $row['ap_pet_gender'];?></td>
                    <td>
                        <a href="petAdd.php?ap_pet_id=<?php echo $row['ap_pet_id']?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-check"></i>
                        </a>
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
          </main>
        </div>
      </div>
<!-- Finish -->
<?php include("../includes/footer.php"); ?>