<?php 
  include('../includes/header.php');
  include('../dbcon.php');
  include('includes/sessionUser.php');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        document.title = 'User Homepage';
    </script>
<!-- Start -->
  <?php include('includes/userheader.php'); ?>
    <div class="container-fluid ">
      <div class="row">
        <?php include('includes/usersidebar.php'); ?>
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://thumbs.dreamstime.com/z/now-hiring-vacancy-concept-poster-template-outsource-team-hire-creative-employee-career-promotion-red-loudspeaker-job-137192142.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>We Are Hiring!</h5>
        <p>A company near the community is hiring and positions are open. <a href="#">Click Here</a> for more info. </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media.istockphoto.com/vectors/basketball-tournament-posters-flyer-with-basketball-ball-template-vector-id1177360892?k=6&m=1177360892&s=170667a&w=0&h=hRVqZK90Nq06znVs9-ReopEZtMPMhdc8sv3YeP9avl4=" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Basketball Craze!!</h5>
        <p>A Basketball tournament is being held in the clubhouse of the community! <a href="#">Click Here</a> for more info. </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.luisamarshall.com/kimi/wp-content/uploads/2013/12/A-Moment-For-The-Philippines-fundraising-Event-Poster.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Community Charity</h5>
        <p>The head of the community thought of a way to help taal volcano victims. <a href="#">Click Here</a> for more info.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
          </main>
        </div>
      </div>
<!-- Finish -->
<?php include("../includes/footer.php"); ?>