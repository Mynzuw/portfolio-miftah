<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Miftah Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include_once("link.php"); ?>

  <!-- =======================================================
  * Template Name: Reveal
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php include_once("topbar.php"); ?>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="index.html">MIF<span>TAH</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="portfolio.php">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">

    
  </section><!-- End Hero Section -->

  <main id="main">

  </main><!-- End #main -->

  <?php include_once("footer.php"); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 
  <script>
        function ambilDataDariAPI() {
         axios.get('api/home_api.php?id=1')
          .then(response =>{
              //definisikan constanta data 
              const data = response.data;
              //manipulasi html untuk menampilkan data home
              const home = document.getElementById('hero');
              const homeDiv = document.createElement('div');
              homeDiv.className='col-sm-12';
              homeDiv.innerHTML=`
              <div class="hero-content" data-aos="fade-up">
                <h2>${data.Name}</h2>
                <div>
                  <a href="about.php" class="btn-get-started scrollto">Get Started</a>
                  <a href="portfolio.php" class="btn-projects scrollto">My Projects</a>
                </div>
              </div>

              <div class="hero-slider swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/1.jpg');"></div>               
                </div>
              </div>

              `;
              home.appendChild(homeDiv);
          })

          .catch(error => {
                console.error('Error:', error);
            });
        }
        ambilDataDariAPI();
  </script>

</body>

</html>
