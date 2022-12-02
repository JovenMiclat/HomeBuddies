<?php 
include('../dbcon.php');
include("../includes/header.php"); 
include('includes/sessionAdmin.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        document.title = 'Monthly Dues';
    </script>

<?php include('includes/adminheader.php'); ?>
    <div class="container-fluid ">
      <div class="row">
        <?php include('includes/adminsidebar.php'); ?>   

<!-- Start -->
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Monthly Dues</h1>
            </div>
             <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
       -->
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">File</th>
                    <th scope="col">Date Issued</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date Paid</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#">HB0001-0MAY2021.pdf</a></td>
                    <td>05/01/2021</td>
                    <td>Paid</td>
                    <td>05/06/2021</td>
                  </tr>
                  <tr>
                    <td><a href="#">HB0002-0MAY2021.pdf</a></td>
                    <td>05/01/2021</td>
                    <td>Pending</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><a href="#">HB0003-0MAY2021.pdf</a></td>
                    <td>05/01/2021</td>
                    <td>Paid</td>
                    <td>05/01/2021</td>
                  </tr>
                  <tr>
                    <td><a href="#">HB0004-0MAY2021.pdf</a></td>
                    <td>05/01/2021</td>
                    <td>Pending</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><a href="#">HB0005-1MAY2021.pdf</a></td>
                    <td>05/01/2021</td>
                    <td>Paid</td>
                    <td>05/11/2021</td>
                  </tr>
                  <tr>
                    <td><a href="#">HB0006-0MAY2021.pdf</a></td>
                    <td>05/01/2021</td>
                    <td>Pending</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </main>
<!-- Finish -->
  </div>
</div>
<?php include("../includes/footer.php"); ?>