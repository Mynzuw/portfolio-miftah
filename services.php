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
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto active" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="portfolio.php">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services">
      
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <?php include_once("footer.php"); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  

  <script> 
        function ambilDataDariAPI() {
         axios.get('api/services_api.php?id=1')
          .then(response =>{
              //definisikan constanta data 
              const data = response.data;
              //manipulasi html untuk menampilkan data about
              const services = document.getElementById('services');
              const servicesDiv = document.createElement('div');
              servicesDiv.className='col-sm-12';
              servicesDiv.innerHTML=`
              <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Services</h2>
          <p>${data.desk}</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-code"></i></div>
              <h4 class="title"><a href="">${data.serv1}</a></h4>
              <p class="description">${data.deskServ1}</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-server"></i></div>
              <h4 class="title"><a href="">${data.serv2}</a></h4>
              <p class="description">${data.deskServ2}</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <div class="icon"><i class="bi bi-globe"></i></div>
              <h4 class="title"><a href="">${data.serv3}</a></h4>
              <p class="description">${data.deskServ3}</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">${data.serv4}</a></h4>
              <p class="description">${data.deskServ4}</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-search"></i></div>
              <h4 class="title"><a href="">${data.serv5}</a></h4>
              <p class="description">${data.deskServ5}</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-code-slash"></i></div>
              <h4 class="title"><a href="">${data.serv6}</a></h4>
              <p class="description">${data.deskServ6}</p>
            </div>
          </div>
        </div>
      </div>
              `;
              services.appendChild(servicesDiv);
          })

          .catch(error => {
                console.error('Error:', error);
            });
        }
        ambilDataDariAPI();
  </script>

</body>

</html>