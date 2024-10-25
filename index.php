<?php
session_start();
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Scientific Group Homepage">
    <meta name="author" content="Your Name">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>AI Group | Home</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="vendor/bootstrap/css/custom.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/modern-business.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <?php include('includes/header.php'); ?>
<!-- Slide Section (Carousel with Fixed Image Height) -->
<div class="container-fluid header-carousel px-0 mb-5">
    <div id="groupCarousel" class="carousel slide" data-ride="carousel" data-interval="1500" data-pause="hover">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 carousel-img" src="images/group_1.png" alt="Group Image 1">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 carousel-img" src="images/group_2.png" alt="Group Image 2">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 carousel-img" src="images/group_3.jpg" alt="Group Image 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#groupCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon custom-control" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#groupCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon custom-control" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
    <!-- Group Introduction Section -->
    <section class="container mt-5">
        <h2 class="text-center">About Our Scientific Group</h2>
        <p class="custom-text">The Artificial Intelligence (AI) research group at Nong Lam University was established with the mission to pioneer the field of AI research and application, delivering innovative solutions to global challenges. The group focuses on core areas such as Machine Learning, Deep Learning, Natural Language Processing (NLP), and Computer Vision. Led by top professors in the AI field, the group consists of PhD students, master’s students, and talented undergraduates from various disciplines like computer science, mathematics, and software engineering. The members regularly publish research in prestigious conferences and collaborate closely with industry leaders to ensure their research has practical applications. The group explores AI applications in medical diagnostics, industrial processes, energy management, and more. The AI research group at Nong Lam University not only affirms its position in academia but also contributes significantly to the advancement of AI technology in Vietnam and globally.</p>
    </section>

    <!-- Team Members Section -->
    <section class="container py-5">
        <h3 class="text-center mb-4">Meet Our Team</h3>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <img src="images/member1.png" alt="Member 1" class="rounded-circle" width="150" height="150">
                    <h5 class="mt-3">Mr. Phan</h5>
                    <p class="mb-0">Project Manager/Leader</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <img src="images/member2.jpg" alt="Member 2" class="rounded-circle" width="150" height="150">
                    <h5 class="mt-3">Mr. Duy</h5>
                    <p class="mb-0">Developer</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <img src="images/member3.png" alt="Member 3" class="rounded-circle" width="150" height="150">
                    <h5 class="mt-3">Mr. Vinh</h5>
                    <p class="mb-0">AI Engineer</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
