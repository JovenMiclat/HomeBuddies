<?php 
include('../dbcon.php');
include("../includes/header.php"); 
include('includes/sessionAdmin.php');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        document.title = 'Directory';
    </script>

<?php include('includes/adminheader.php'); ?>
    <div class="container-fluid ">
      <div class="row">
        <?php include('includes/adminsidebar.php'); ?>     
    

<!-- Start -->
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
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Add New Resident ID</h1>
              </div>
              <form method="POST" action="addRes.php">
                <div class="row">
                  <div class="col-sm-6">
                    <label>The following Resident I.D. shall be generated:</label>
                    <?php
                      $query2 = "SELECT res_id FROM residents ORDER BY res_id DESC LIMIT 1";
                      $result2 = mysqli_query($conn, $query2);
                      $row2 = mysqli_fetch_array($result2);
                      $lastid = $row2['res_id'];
                      $res_id_form = substr($lastid, 2);
                      $res_id_form = substr($res_id_form, 0, 4);
                      $res_id_form = intval($res_id_form)+1;
                      $length = 4;
                      $res_id_form = substr(str_repeat(0, $length).$res_id_form, - $length);
                      if($lastid == " "){
                        $res_id_form = "HB0001-0";
                      }
                      else{
                        $res_id_form = 'HB' . $res_id_form . '-0';
                      }
                    ?>
                    <input type="text" value="<?php echo $res_id_form; ?>" name="res_id_add">
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="admin" name="admincheck">
                      <label class="form-check-label" for="admincheck">
                        Admin?
                      </label>
                      <small class="form-text text-muted">If checked, the ID shall have "-1" at the end instead of "-0"</small>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary" name="addRes">Submit</button>
                  </div>
                </div>
              </form>
          </main>
        </div>
      </div>
<!-- Finish -->
<?php include("../includes/footer.php"); ?>