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
              <h1 class="h2">Current Officers for HBHOA 2021</h1>
            </div>
            <img src="/imgs/orgchart.png" alt="Organizational Chart for 2021" class="my-4 w-100" width="1024" height="768">
          </main>
        </div>
      </div>
<!-- Finish -->
<?php include("../includes/footer.php"); ?>