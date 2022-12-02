<?php 
include('../dbcon.php');
include("../includes/header.php"); 
include('includes/sessionAdmin.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        document.title = 'Monthly Report';
    </script>

<?php include('includes/adminheader.php'); ?>
    <div class="container-fluid ">
      <div class="row">
        <?php include('includes/adminsidebar.php'); ?>     
    
<!-- Start -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Monthly Report</h1>
            </div>
             <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
       -->
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">File</th>
                    <th scope="col">Date Posted</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#">MReport-MAY2020</a></td>
                    <td>05/20/2020</td>
                    <td>Monthly report for May, 2020</td>
                  </tr>
                  <tr>
                    <td><a href="#">MReport-JUNE2020</a></td>
                    <td>06/20/2020</td>
                    <td>Monthly report for June, 2020</td>
                  </tr>
                  <tr>
                    <td><a href="#">MReport-JULY2020</a></td>
                    <td>07/20/2020</td>
                    <td>Monthly report for July, 2020</td>
                  </tr>
                  <tr>
                    <td><a href="#">MReport-AUG2020</a></td>
                    <td>08/20/2020</td>
                    <td>Monthly report for August, 2020</td>
                  </tr>
                  <tr>
                    <td><a href="#">MReport-SEPT2020</a></td>
                    <td>09/20/2020</td>
                    <td>Monthly report for September, 2020</td>
                  </tr>
                  <tr>
                    <td><a href="#">MReport-OCT2020</a></td>
                    <td>10/20/2020</td>
                    <td>Monthly report for October, 2020</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </main>
        </div>
      </div>
<!-- Finish -->
<?php include("../includes/footer.php"); ?>