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
          <li><a class="nav-link scrollto active" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto " href="portfolio.php">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
 
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      
    </section><!-- End About Section -->

  </main><!-- End #main -->

  <?php include_once("footer.php"); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 
  <script>
        function ambilDataDariAPI() {
         axios.get('api/about_api.php?id=1')
          .then(response =>{
              //definisikan constanta data 
              const data = response.data;
              //manipulasi html untuk menampilkan data about
              const about = document.getElementById('about');
              const aboutDiv = document.createElement('div');
              aboutDiv.className='col-sm-12';
              aboutDiv.innerHTML=`
              <div class="container" data-aos="fade-up">
                <div class="row">
                  <div class="col-lg-6 about-img">
                    <img src="assets/img/about-img.jpg" alt="">
                  </div>
                  <div class="col-lg-6 content">
                    <h2>PERSONAL DATA</h2>
                    <ul>
                      <li><i class="bi bi-check-circle"></i> <strong>Birthday:</strong> <span>${data.lahir}</span></li>
                      <li><i class="bi bi-check-circle"></i> <strong>Website:</strong> <span>${data.web}</span></li>
                      <li><i class="bi bi-check-circle"></i> <strong>Phone:</strong> <span>+${data.phone}</span></li>
                      <li><i class="bi bi-check-circle"></i> <strong>City:</strong> <span>${data.kota}</span></li>
                      <li><i class="bi bi-check-circle"></i> <strong>Age:</strong> <span>${data.umur}</span></li>
                      <li><i class="bi bi-check-circle"></i> <strong>Degree:</strong> <span>${data.gelar}</span></li>
                      <li><i class="bi bi-check-circle"></i> <strong>Email:</strong> <span>${data.email}</span></li>
                      <li><i class="bi bi-check-circle"></i> <strong>Freelance:</strong> <span>${data.freelance}</span</li>
                    </ul>
                    </div>
                  </div>
                  <p>${data.desk1}</p>
                </div>
              </div>
              <div class="col-lg-6 about-img">
                <
              </div>
              `;
              about.appendChild(aboutDiv);
          })

          .catch(error => {
                console.error('Error:', error);
            });
        }
        ambilDataDariAPI();
  </script>


</body>

</html>