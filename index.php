<?php include "includes/header.php"; ?>

<div id="fb-root"></div>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0"
    nonce="E69iF2hS"></script>

<div class="container-fluid index-body py-0 px-0">

    <?php include "includes/indexheader.php"; ?>
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" src="/imgs/slide1.jpg" height="720" width="1280">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Great Community.</h1>
                            <p>We make certain that everyone gets along with one another.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" src="/imgs/slide2.jpg" height="720" width="1280">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>24/7 Security.</h1>
                            <p>Our top priority is to keep everyone safe.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" src="/imgs/slide3.jpg" height="720" width="1280">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Peaceful Environment.</h1>
                            <p>We enforce rules and regulations for the community's benefit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container-fluid marketing">
            <div class="row pb-5">
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="imgs/leisure.png">
                    <h2 class="pt-3">Leisure.</h2>
                    <p>There are dedicated areas where you and your family can enjoy yourselves!</p>
                </div>
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="imgs/friend.png">
                    <h2 class="pt-3">Make Friends.</h2>
                    <p>Events are being arranged so that members of the community can participate and form bonds!</p>
                </div>
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="imgs/support.png">
                    <h2 class="pt-3">Assistance.</h2>
                    <p>We've got our own team to help you with your house problems!</p>
                </div>
            </div>
            <div class="row">
                <div class="b-example-divider px-5"></div>
                <div class="container-fluid col-xxl-8 px-4 py-5">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-sm-6">
                            <h1 class="display-5 fw-bold lh-1 mb-3">A website dedicated for Homeowners.</h1>
                            <p class="lead">A website designed for homeowners to view announcements, monthly dues
                                status, save their vehicle and pet information for security purposes, and much more!</p>
                        </div>
                        <div class="col-sm-6">
                            <img src="imgs/website.jpg"
                                class="d-block mx-lg-auto img-fluid border border-white border-5" alt="Bootstrap Themes"
                                width="700" height="500" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="b-example-divider px-5"></div>
                <div class="container-fluid col-xxl-8 px-4 py-5">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-sm-6">
                            <img src="/imgs/sports.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                                width="700" height="500" loading="lazy">
                        </div>
                        <div class="col-sm-6">
                            <h1 class="display-5 fw-bold lh-1 mb-3">Places you can go to workout.</h1>
                            <p class="lead">All homeowners have access to the pools, gyms, and tennis courts because we
                                understand the importance of staying fit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="b-example-divider px-5"></div>
                <div class="container-fluid col-xxl-8 px-4 py-5">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-sm-6">
                            <h1 class="display-5 fw-bold lh-1 mb-3">A place where events and gatherings can be held.
                            </h1>
                            <p class="lead">To have a defined venue for community activities, function rooms, events
                                spaces, and meeting rooms are offered. If you log in to your account, you can access the
                                announcements for the upcoming events!</p>
                        </div>
                        <div class="col-sm-6">
                            <img src="/imgs/events.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                                width="700" height="500" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="b-example-divider px-5"></div>
            </div>
        </div>
        <footer class="container py-3">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2021 Home Buddies (Home Builders Association) - All rights reserved</p>
            <p>Contact us:</p>
            <p>Email: homebuddies@gmail.com</p>
            <p>Tel num.: (02) 8822-7958 / Mobile Num.: 0925-152-7896</p>
            <div class="fb-share-button" data-href="http://homebuddies.epizy.com/" data-layout="button"
                data-size="large"><a target="_blank"
                    href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhomebuddies.epizy.com%2F&amp;src=sdkpreparse"
                    class="fb-xfbml-parse-ignore">Share</a></div>
        </footer>
    </main>
</div>

<?php include "includes/footer.php"; ?>