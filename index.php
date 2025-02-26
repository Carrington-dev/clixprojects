<!DOCTYPE html>
<html lang="en">
<?php 
    include 'includes/details.php'; 
    $page = "Pool Services";
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo "$company"; ?> | <?php echo "$company"; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.svg">


</head>

<body>
    
    <?php
    /*
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div data-aos="fade-in">
                <div class="hero-logo">
                    <img class="" src="assets/img/logo.png" alt="Imperial">
                </div>

                <h1>Welcome to <?php echo $company ; ?></h1>
                <h2>We offer <span class="typed" data-typed-items="pool maintanance, pool construction,  best prices!"></span></h2>
                <div class="actions">
                    <a href="#about" class="btn-get-started">Get Strated</a>
                    <a href="services.php" class="btn-services">Our Services</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
    */
    ?>
    <!-- ======= Header ======= -->
    <?php include 'includes/header.php';?>
    <!-- End Header -->
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">About Us</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description"><?php echo $company ; ?>' vision is to be the best at transforming homes to become classy and livable with our pool services</p>
                    </div>
                </div>
            </div>
            <div class="container about-container" data-aos="fade-up" data-aos-delay="200">
                <div class="row">

                    <div class="col-lg-6 about-img">
                        <img src="assets/img/about-img.jpg" alt="">
                    </div>

                    <div class="col-md-6 about-content">
                        <h2 class="about-title">We provide great services and ideass</h2>
                        <p class="about-text">
                            <?php echo $company ; ?> is a company which offer all your construction needs at the best prices. We believe that renovations is important to increase the lifestyle and the value of your home.


                        </p>
                        <p class="about-text">
                            Our work is fun and easy, but professional. We believe that your house must be turned into a home with the best value, but still have money in your pocket for that expensive holiday.
                        </p>
                        <p class="about-text">
                            <?php echo $company ; ?> is a construction company that value our clients and offer the best service with friendliness and efficiency We can meet any deadline and no job is too big or to small. </p>
                        <p class="about-text">
                            <?php echo $company ; ?> is well known for it's unique art which resembles your ideas and our best ideas. Our services are fully customized to suit your needs
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-md-12">
                        <h3 class="section-title">Our Services</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">View a wide range of services we offer and feel free to contact us with your own style and we will deliver everything on point.

                        </p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="service-title"><a href="">Pool Cleaning</a></h4>
                        <p class="service-description">Regular pool cleaning and chemical balancing is essential if you want to enjoy a clean and healthy swimming pool. Call today to get assistance with:
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="service-title"><a href="">Pool Maintenance
                        </a></h4>
                        <p class="service-description">Having a swimming pool requires maintenance and upkeep. If you don’t have time to do it yourself, one of our trusted swimming pool professionals will assist you.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon"><i class="bi bi-bar-chart"></i></div>
                        <h4 class="service-title"><a href="">Fibre Line
                        </a></h4>
                        <p class="service-description">Gunite Pools, Marbelite Pools, Existing Fibre Pools, Koi ponds, Any pool surface that is damaged or leaks, Reduction of larger pools & completing with Fibre Lining
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="service-title"><a href="">Wood work
                        </a></h4>
                        <p class="service-description">We can custom make cabinets to fit your kitchen, bar, dinning room or lounge. We can custom make a desk that fits your height. We want you to be happy with your work space.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="service-title"><a href="">Renovation
                        </a></h4>
                        <p class="service-description">New Led Lights, New Suction and return Lines, New weir replacement, Pump & Filter replacements, New coping, Water features, Chlorinators
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="service-title"><a href="">Paving</a></h4>
                        <p class="service-description">Driveway paving; Residential paving; Industrial paving; Parking areas; Kerbs; Patio paving; Walkway paving: Swimming pool paving; Warehouse paving.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="service-title"><a href="">Plumbing
                        </a></h4>
                        <p class="service-description"><?php echo $company ; ?> is equipped to meet all your plumbing needs. We provide the highest quality services at competitive prices with prompt, professional and friendly service.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="service-title"><a href="">Construction

                        </a></h4>
                        <p class="service-description">Concrete Work, Metal Work, Aluminum and Glazing, Mechanical, Shopfitting, Joint Sealing, Plastering and Spalling, Ceiling and Partitioning, Tenant Installation, Roofing
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="service-title"><a href="">Painting</a></h4>
                        <p class="service-description">Painting of your steel palisades, gates, doors, decks, thatch timber, garage doors, window frames, galvanized gutters and down pipes, etc. makes it rust/corrosion and your wood
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Subscrbe Section ======= -->
        <section id="subscribe">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="subscribe-title">Need a helping hand? </h3>
                        <p class="subscribe-text">Do you need a pool technician to renovate your pool or build a pool for you or even clean your pool? Don't look further!!!

                        </p>
                    </div>
                    <div class="col-md-4 subscribe-btn-container">
                        <a class="subscribe-btn" href="tel:+27 68 139 5575">Call us now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Subscrbe Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Portfolio</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">
                            View a wide range of services we offer and feel free to contact us with your own style and we will deliver everything on point.

                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Pool</li>
                            <li data-filter=".filter-card">Inner</li>
                            <li data-filter=".filter-web">Paint</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 1</h4>
                            <p>Pool</p>
                            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 3</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 4</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 5</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 6</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 7</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 8</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 9</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 10</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 10</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p10.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 11</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p11.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 12</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p12.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 12</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p14.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 14</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p14.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p15.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 15</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p15.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p16.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 16</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p16.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p17.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 17</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p17.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p18.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 18</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p18.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p19.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 19</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p19.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Paint 3</h4>
                            <p>Paint</p>
                            <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 2</h4>
                            <p>Pool</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Inner 2</h4>
                            <p>Inner</p>
                            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Paint 2</h4>
                            <p>Paint</p>
                            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 3</h4>
                            <p>Pool</p>
                            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Inner 1</h4>
                            <p>Inner</p>
                            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Inner 3</h4>
                            <p>Inner</p>
                            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Paint 3</h4>
                            <p>Paint</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Testimonials</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">Have an insight of what our clients say about us.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="profile">
                            <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>
                            <h4>Saul Goodman</h4>
                            <span>Centurion Rgn</span>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="quote">
                            <b><img src="assets/img/quote_sign_left.png" alt=""></b> What a great friendly team, we are just super happy with the fibre lining work done and we cannot recommend the <?php echo $company ; ?> enough! . <small><img src="assets/img/quote_sign_right.png" alt=""></small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <div class="quote">
                            <b><img src="assets/img/quote_sign_left.png" alt=""></b> Our end product speaks for itself, from our site visit right through to the water back from the bladders, we could not ask for more.

                            <small><img src="assets/img/quote_sign_right.png" alt=""></small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile">
                            <div class="pic"><img src="assets/img/client-2.jpg" alt=""></div>
                            <h4>Sara Wilsson</h4>
                            <span>Joburg Rgn</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Contact Us</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">Have a specific pool project in mind? Maybe you’re just exploring some ways to take your pool to thenext level?

                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="info">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>1440 vulture street
                                    <br>Riverside view, Ext 35</p>
                            </div>

                            <div>
                                <i class="bi bi-envelope"></i>
                                <p><?php echo $email; ?></p>
                            </div>

                            <div>
                                <i class="bi bi-phone"></i>
                                <p><?php echo $tel; ?></p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>

                                <div class="text-center my-3"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        &copy; Copyright <strong>Stemgon</strong>. All Rights Reserved
                    </div>
                    <div class="credits">

                        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>