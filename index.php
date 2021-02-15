<?php 
    $Msg = "";
    if(isset($_GET['error']))
    {
        $Msg = " Please Fill in the Blanks ";
        echo '<div class="alert alert-danger">'.$Msg.'</div>';
    }

    if(isset($_GET['success']))
    {
        $Msg = " Your Message Has Been Sent ";
        echo '<div class="alert alert-success">'.$Msg.'</div>';
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to Q's Tacos Food Truck | Serving Temecula and the Inland Empire</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

  <!-- Vendor-2 CSS Files -->

  <link href="vendor-2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor-2/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor-2/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor-2/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor-2/owl.carousel//owl.carousel.min.css" rel="stylesheet">
  <link href="vendor-2/venobox/venobox.css" rel="stylesheet">
  <link href="vendor-2/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/grayscale.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <script src="https://www.google.com/recaptcha/api.js?render=6LeBOFgaAAAAAFjVHoAZHcGChPYZuiVBT8Ee60iJ"></script>

</head>

<body>

  <!-- ======= Top Bar ======= -->
<!--   <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"><a href="tel:714-679-1587">(714) 679-1587‬</a></i> 
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i></span>
      </div>
    </div>
  </div> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html"><img src="img/qs-logo-avatar-circle-emblem.png" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#why-us">Catering</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="book-a-table text-center"><a href="tel:(714) 679-1587">(714) 679-1587</a></li>
          <li class="book-a-table text-center"><a href="https://qs-tacos.square.site/" target="_blank">Order Online</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center" data-aos="zoom-in" data-aos-delay="50">
      <div class="row">
        <div class="col-lg-12">
          <img src="img/qs-tacos-logo.png" alt="">
          <h1>Food Truck</h1>
          <h2>Order for pickup!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">View Our Menu</a>
            <!-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Contact Us</a> -->
          </div>
        </div>
        <!-- <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
        </div> -->

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="img/about-qstacos-family.png" alt="">
            </div>
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>About Q's Tacos</h3>
            <p>
              Q’s Tacos was established in early 2016 as a food trailer with the vision of creating fresh mexican food with a twist. We believe food is love and love is food which brings people together and we are passionate about creating that in our food truck with fresh ingredients.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- START -- instafeed -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Follow us on Instagram</h2>
          <p>Stay up to date with our feed!</p>
        </div>
        <div class="row">
          <div id="instafeed-container"></div>
        </div>
    </section>
    <!-- END -- instafeed -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Catering</h2>
          <p>We would Love to Cater your Event</p>
        </div>

        <div class="ecmb-8">
          <div class="row justify-content-center">
          <p class="col-lg-8 text-center">
              We provide plates, napkins, and forks. For serving out of the foodtruck, our pricing is as followed:
            </p>
            <p class="col-lg-8 text-center">One plate per person.</p>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>1</span>
              <!-- <h4>$10.99</h4> -->
              <p>3 street tacos with spanish rice and pinto beans (meat choice: steak, chicken or pastor/pork)</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>2</span>
              <!-- <h4>$13.99</h4> -->
              <p>2 item menu for guests to chose from, one plate per person </p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>3</span>
              <!-- <h4>$14.99</h4> -->
              <p>3 item menu for guests to chose from, one plate per person</p>
            </div>
          </div>

        </div>

        <div class="ecmt-8">
          <div class="row justify-content-center">
            <p class="col-lg-8 text-center">
              We require a 50% deposit to reserve the date and the last payment on or before the catering date. All prices do not include tax. Custom orders are accepted. Travel fee will be included depending on location. We look forward to catering your event!
            </p>
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">
        <div class="col-lg-6 section-title">
          <h2>Menu</h2>
          <p>Check out our Menu</p>
        </div>
        <div class="col-lg-6 btn-menu-container">
          <a href="tel:(714) 679-1587"><button class="btn-primary">(714) 679-1587</button></a>
          <a href="https://qs-tacos.square.site" target="_blank"><button class="btn-primary">Order Online</button></a>
        </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-tacos">Tacos</li>
              <li data-filter=".filter-burritos">Burritos</li>
              <li data-filter=".filter-bowls">Bowls</li>
              <li data-filter=".filter-nachos">Nachos</li>
              <li data-filter=".filter-fries">Fries</li>
              <li data-filter=".filter-other">Other</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-tacos">
            <img src="img/menu/3-street-tacos.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">3 Street Tacos</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Fresh grilled lobster topped with cabbage/pico de gallo mix on corn tortillas
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-tacos">
            <img src="img/menu/6-street-tacos.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">6 Street Tacos</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Fresh grilled lobster topped with cabbage/pico de gallo mix on corn tortillas
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-tacos">
            <img src="img/menu/3-lobster-tacos.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">3 Lobster Tacos</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Fresh grilled lobster topped with cabbage/pico de gallo mix on corn tortillas
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-tacos">
            <img src="img/menu/3-fish-tacos.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">3 Fish Tacos</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Fish topped with cabbage/pico de gallo mix on corn tortillas  
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-tacos">
            <img src="img/menu/keto-tacos.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Keto Tacos</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
                
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-burritos">
            <img src="img/menu/burrito.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Burrito</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Your choice of steak angus, seasoned chicken, or al pastor (marinated sweet pork) with beans, spanish rice, cheese, onion, and cilantro in a flour tortilla
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-burritos">
            <img src="img/menu/cali-burrito.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">California Burrito</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Your choice of steak angus, seasoned chicken, or al pastor (marinated sweet pork) with golden french fries, beans, spanish rice, cheese, onion, and cilantro in a flour tortilla
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bowls">
            <img src="img/menu/burrito-bowl.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Burrito Bowl</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Your choice of steak angus, seasoned chicken, or al pastor (marinated sweet pork) with beans, spanish rice, cheese, onion, and cilantro in a bowl
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bowls">
            <img src="img/menu/taco-bowl.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Taco Bowl</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Your choice of steak angus, seasoned chicken, or al pastor (marinated sweet pork) with beans, cabbage, cheese, onion, and cilantro in a bowl
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-nachos">
            <img src="img/menu/lobster-nachos.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Nachos</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Fresh grilled lobster topped with Q’s four cheese blend, creamy cilantro avocado sauce (no spice) and pico de gallo on a bed of chips
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-nachos">
            <img src="img/menu/nachos.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Q's Loaded Nachos</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Your choice of steak angus, seasoned chicken or al pastor (marinated sweet pork) with Q’s four cheese blend, beans, fresh pico de gallo and creamy cilantro avocado sauce (no spice) on a bed of chips
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-fries">
            <img src="img/menu/loaded-french-fries.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Loaded French Fries</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Your choice of steak angus, seasoned chicken or al pastor (marinated sweet pork) with Q’s four cheese blend, beans, fresh pico de gallo, and creamy cilantro avocado sauce (no spice) on lightly salted golden french fries
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-fries">
            <img src="img/menu/regular-french-fries.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Regular French Fries</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Lightly salted golden french fries
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-other">
            <img src="img/menu/quesadilla.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Quesadilla</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              Your choice of steak angus, seasoned chicken, or al pastor (marinated sweet pork) grilled with cheese
            </div>
          </div>

          <!-- <div class="col-lg-6 menu-item filter-other">
            <img src="img/menu/no-image.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Family Pack</a><span class="qs-prices">$0</span>
            </div>
            <div class="menu-ingredients">
              1 pound of steak angus, seasoned chicken, or al pastor (marinated sweet pork) with spanish rice, beans, corn tortillas, onion, cilantro, chips and salsa
            </div>
          </div> -->
            
            <div class="col-lg-6 menu-item filter-other">
              <img src="img/menu/salsa-options.png" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#">Salsa Options</a><span class="qs-prices">$0</span>
              </div>
              <div class="menu-ingredients">
                Red salsa (hot spice), green salsa (medium spice), or avocado sauce (no spice)
              </div>
            </div>

          
        <!-- Menu Disclaimer -->

        </div>
        <div class="container ecmt-8">
          <div class="row justify-content-center">
            <p class="col-lg-6 text-center">
              All prices do not include tax 
              Consuming raw or undercooked meats, poultry, seafood, shellfish, or eggs may increase your chance of foodborne illnesses
            </p>
          </div>
        </div>
      </div>

      <section id="menu-bottom" class="menu section-bg">
        <div class="container" data-aos="fade-up">
          <div class="row menu-container-1" >

            <div class="col-lg-6 menu-item">
              <img src="img/menu/churros.png" class="menu-img" alt="">
              <div class="menu-content ecmt-5">
                <a href="#">Churro</a><span class="qs-prices">$0</span>
              </div>
            </div>

            <div class="col-lg-6 menu-item">
              <img src="img/menu/Drinks.png" class="menu-img" alt="">
              <div class="menu-content ecmt-5">
                <a href="#">Soda And Water</a><span class="qs-prices">$0</span>
              </div>
            </div>

            <div class="col-lg-6 menu-item">
              <img src="img/menu/no-image.png" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#">Vegan Options</a><span class="qs-prices">$0</span>
              </div>
              <div class="menu-ingredients">
                Soy Chorizo or Beans
              </div>
            </div>

            <div class="col-lg-6 menu-item">
              <img src="img/menu/no-image.png" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#">Glutten Free Option</a><span class="qs-prices">$0</span>
              </div>
              <div class="menu-ingredients">
                Corn Tortilla
              </div>
            </div>

          </div>
        </div>

    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <!-- <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Modi sit est</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Unde praesentium sed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/specials-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/specials-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="font-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/specials-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/specials-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/specials-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>End Specials Section -->

    <!-- ======= Events Section ======= -->
    <!-- <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Organize Your Events in our Restaurant</p>
        </div>

        <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="img/event-birthday.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Birthday Parties</h3>
              <div class="price">
                <p><span>$189</Personspan></p>
              </div>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="img/event-private.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Private Parties</h3>
              <div class="price">
                <p><span>$290</Personspan></p>
              </div>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="img/event-custom.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Custom Parties</h3>
              <div class="price">
                <p><span>$99</Personspan></p>
              </div>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>End Events Section -->

    <!-- ======= Book A Table Section ======= -->
<!--     <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Book a Table</button></div>
        </form>

      </div>
    </section> End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
          </div>

        </div>

      </div>
    </section>End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Food</p>
        </div>
      </div>

      <div class="" data-aos="fade-up" data-aos-delay="100">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-img-1.png" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-img-1.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-img-2.png" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-img-2.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-img-3.png" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-img-3.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-img-4.png" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-img-4.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-img-5.png" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-img-5.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-img-6.png" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-img-6.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-img-7.png" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-img-7.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-img-8.png" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-img-8.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
<!--     <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Master Chef</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Patissier</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> End Chefs Section -->

<!-- IG FEED -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Temecula+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Temecula, CA / Inland Empire</p>
              </div>

              <!--
                <div class="open-hours">
                <i class="icofont-clock-time icofont-rotate-90"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 8:00 PM
                </p>
              </div>
            -->
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <a href="mailto: qstacos@gmail.com"><p>qstacos@gmail.com</p></a>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>(714) 679-1587‬</p>
              </div>

            </div>

          </div>
        

          <div class="col-lg-8 mt-5 mt-lg-0">
          <!-- Form hidden -->
          <div class="form-row">
                    </div>
                      <div class="form-group">
                        <form action="contact.php" method="post">
                          <input type="text" name="UName" placeholder="Your Name" class="form-control mb-2">
                          <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                          <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                          <textarea name="msg" class="form-control mb-2" placeholder="Write a Message"></textarea>
                          <?php 
                          $Msg = "";
                          if(isset($_GET['error']))
                          {
                              $Msg = " Please Fill in the Blanks ";
                              echo '<div class="alert alert-danger">'.$Msg.'</div>';
                          }

                          if(isset($_GET['success']))
                          {
                              $Msg = " Your Message Has Been Sent ";
                              echo '<div class="alert alert-success">'.$Msg.'</div>';
                          }
                      
                          ?>
                          <button class="btn-primary btn btn-success g-recaptcha" name="btn-send" type="submit"
                          data-sitekey="reCAPTCHA_site_key" 
                          data-callback='onSubmit' 
                          data-action='submit'> Send </button>
                        </form>
                      </div>

            <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit"
                class="g-recaptcha" 
                data-sitekey="reCAPTCHA_site_key" 
                data-callback='onSubmit' 
                data-action='submit'>Send Message</button>
              </div>
            </form> -->

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="container">
            <div class="footer-info">
              <h3>
                Follow Us!
              </h3>
              <div class="social-links mt-3">
                <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                <a href="https://www.facebook.com/qstacosfoodtruck/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/qstacos/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.yelp.com/biz/qs-tacos-food-truck-temecula" class="yelp"><i class="bx bxl-yelp"></i></a>
              </div>
            </div>
          </div>

<!--           <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->
<!-- 
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div> -->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Q's Tacos</span></strong> 2021. All Rights Reserved
      </div>
      <!-- <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor-2 JS Files -->
  <script src="vendor-2/jquery/jquery.min.js"></script>
  <script src="vendor-2/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor-2/jquery.easing/jquery.easing.min.js"></script>
  <script src="vendor-2/php-email-form/validate.js"></script>
  <script src="vendor-2/owl.carousel/owl.carousel.min.js"></script>
  <script src="vendor-2/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor-2/venobox/venobox.min.js"></script>
  <script src="vendor-2/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
    <script type="text/javascript">
    var userFeed = new Instafeed({
      limit: 8,
      get: 'user',
      target: "instafeed-container",
        resolution: 'high_resolution',
      accessToken: 'IGQVJYVGgzcWtMQnRQRW1Td2NWMWV3dTktM2xEcTItTkRNZAjNtM0VsYlk5Rkp0Skp4NDhVLWI5Sl9yUUxUV0MtTnk1aFlxbW9wTXY3MHJLZAHlUcFZATY0RxeW1xSWVjUkVMZAnhoZAy1fcVd4T0huelFTbgZDZD'
    });
    userFeed.run();
    </script>
</body>

<script> 
  function onClick(e) {
    e.preventDefault();
    grecaptcha.ready(function() {
      grecaptcha.execute('6LeBOFgaAAAAAFjVHoAZHcGChPYZuiVBT8Ee60iJ', {action: 'submit'}).then(function(token) {
          // Add your logic to submit to your backend server here.
      });
    });
  }
</script>

</html>