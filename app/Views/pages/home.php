<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gedog Tourism</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

    /* font-family: 'Great Vibes', cursive; */

    /* Header */
    *,
    *::before,
    *::after {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      scroll-behavior: smooth;
    }

    .header {
      position: relative;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav {
      position: fixed;
      margin: 0 auto;
      top: 0;
      width: 100%;
      height: 100px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 2px 50px;
      z-index: 3;
    }

    nav ul {
      margin: 0 auto;
    }

    nav .icon {
      display: none;
    }


    .nav .icon {
      display: none;
    }

    .nav li a:hover {
      font-weight: 800;
      font-size: large;
    }

    .toggle {
      position: absolute;
      float: right;
      z-index: 5;
    }

    @media screen and (max-width: 800px) {
      nav {
        display: flex;
        height: fit-content;
        flex-direction: column;
        width: 100%;
        background: #204875dc;
        backdrop-filter: blur(10px);
        color: white;
        display: none;
      }

      nav .logo {
        display: none;
      }

      nav ul {
        padding: 0;
        width: 100%;
        flex-direction: column;
      }

      nav ul li {
        margin: 5px;
      }

      nav ul .login-button {
        float: right;
      }

      .toggle {
        position: relative;
        z-index: 5;

      }
    }

    nav.sticky {
      background: #204875dc;
      backdrop-filter: blur(10px);
      color: white;
    }

    nav.sticky ul li a,
    nav.sticky .sticky input::-webkit-input-placeholder {
      color: white;
      font-weight: 500;
    }

    nav .logo {
      position: relative;
      width: 145px;
      height: 100%;
      text-decoration: none;
      letter-spacing: 2px;
    }

    nav ul {
      position: relative;
      display: flex;
    }

    nav ul li {
      position: relative;
      list-style: none;
    }

    nav ul li a {
      position: relative;
      left: 50px;
      margin: 0 16px;
      top: -5px;
      font-size: 17px;
      text-decoration: none;
      color: white;
      font-weight: 500;
      align-items: center;
    }

    nav ul li .login-button {
      position: relative;
      right: 20px;
      padding: 15px;
      background: #559eff;
      border-radius: 15px;

    }

    nav ul li a::after {
      content: '';
      position: absolute;
      background-color: white;
      height: 3px;
      width: 0;
      left: 0;
      bottom: -10px;
      transition: .3s;
    }

    nav ul li a:hover::after {
      width: 100%;
    }

    a {
      text-decoration: none;
    }

    .login-button {
      text-decoration: none;
      color: white;
    }

    .admin .login-button {
      position: relative;
      color: white;
      font-size: large;
      font-weight: bold;
      cursor: pointer;
    }

    .v-header {
      height: 100vh;
      display: flex;
      align-items: center;
      color: white;
    }

    .container {
      max-width: 960px;
      padding-left: 1rem;
      padding-right: 1rem;
      margin: auto;
      text-align: center;
    }

    .video-header {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }

    .video-header video {
      min-height: 100%;
      min-width: 100%;
      width: 100%;
    }

    @media screen and (max-width: 1200px) {
      .video-header video {
        width: auto;
        height: 100%;
      }
    }

    .header-overlay {
      height: 100vh;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1;
      background: black;
      opacity: .5;
    }

    .header-content {
      z-index: 2;
    }

    .header-content h1 {
      font-size: 100px;
      margin-bottom: 0;
      font-family: 'Great Vibes', cursive;
    }

    .header-content p {
      font-size: 1.5rem;
      display: block;
      padding-bottom: 2rem;
    }

    .button {
      margin: 1rem;
    }


    .btn {
      background-color: transparent;
      color: white;
      padding: 1rem 2rem;
      border: double rgb(255, 255, 255, .219);
      cursor: pointer;
      font-size: 18px;
      position: relative;
    }

    .btn.btn-slide::before {
      content: '';
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: -1;
      background-color: #559eff;
      transition: transform 600ms linear;
      transform: scaleX(-0.00);
      transform-origin: left;
    }

    .btn.btn-slide:hover::before {
      transform: scaleX(1);
    }

    .btn.btn-slide:hover,
    .btn.btn-slide a {
      color: white;
    }

    /* Header akhir */

    /* servive */
    .services {
      text-align: center;
      margin-left: 2rem;
    }

    .services h1 {
      position: relative;
      display: inline-block;
      text-transform: uppercase;
      border-bottom: 4px solid#3498db;
      color: #24416b;
      font-size: 45px;
      font-weight: bold;
    }

    .services-all {
      width: 100%;
      padding-left: 20px;
      padding-top: 32px;
    }

    .service {
      display: inline-block;
      width: 20%;
      margin: 0 30px;
      padding: 20px;
      user-select: none;
      cursor: pointer;
      transition: 0.6s;
      border: solid transparent;
      text-align: center;
    }

    .service:hover {
      border: solid #29d9d5;
    }

    .service i {
      color: #3498db;
      font-size: 34px;
      margin-bottom: 30px;
    }

    .service h2 {
      font-size: 20px;
      font-weight: 500;
    }

    .service p {
      color: gray;
      font-size: 15px;
      font-weight: 500;
    }

    /* akhir service */

    /* main content */
    .point {
      display: flex;
      margin: 80px 100px;
    }

    .img-all .img-point,
    .img-layers {
      display: block;
      overflow: hidden;
      cursor: zoom-in;
      margin-left: 50px;
    }

    .img-all .img-point {
      width: 270px;
      height: 400px;
      border-radius: 130px;
      background: url(asset/travel\ point\ 1.jpeg);
      background-position: center;
      background-repeat: no-repeat;
      transition: 1S ease;
    }

    .img-all .img-point:hover {
      transform: scale(1.15);
    }

    .img-layers {
      margin-top: -12rem;
      border: 0.6em solid white;
      margin-left: 9rem;
      width: 260px;
      height: 380px;
      border-radius: 130px;
      background: url(asset/travel\ point\ 2.jpeg);
      background-position: center;
      background-repeat: no-repeat;
      transition: 1s ease;
    }

    .img-all .img-layers:hover {
      transform: scale(1.15);
    }

    .point-text h3 {
      color: #204875;
    }

    .point-text {
      display: block;
      padding-left: 9rem;
    }

    .point-text h1 {
      margin-top: 10px;
      font-weight: bold;
    }

    .point-text p {
      margin-top: 20px;
      color: rgba(0, 0, 0, .6);
    }

    .text-grid,
    .text-grid1 {
      display: flex;
      margin-top: 30px;
      gap: 5rem;
    }

    .text-grid1 {
      gap: 7rem;
    }

    .text-grid h2,
    .text-grid1 h2 {
      padding-left: -70px;
      font-size: 18px;
      font-weight: 100;
    }

    .text-grid h1,
    .text-grid1 h1 {
      color: #204875;
    }

    /* akhir main content */

    /* destination */

    .destination {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .destination h1 {
      position: relative;
      display: inline-block;
      text-transform: uppercase;
      border-bottom: 4px solid #3498db;
      color: #24416b;
      font-size: 45px;
      font-weight: bold;
    }

    .destination .cards {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .destination .cards .card {
      margin: 40px;
      position: relative;
      max-width: 450px;
      max-height: 550px;
      box-shadow: 0 40px 60px -6px black;
    }


    .card-title {
      display: block;
      text-align: center;
      color: #fff;
      background-color: #6184a8;
      padding: 2%;
      border-top-right-radius: 4px;
      border-top-left-radius: 4px;
    }

    .card img {
      width: 100%;
      height: 98%;
      object-fit: cover;
      display: block;
      position: relative;
    }

    .card-desc {
      display: block;
      font-size: 1.2rem;
      position: absolute;
      height: 0;
      top: 0;
      opacity: 0;
      padding: 18px 8%;
      background-color: white;
      overflow-y: scroll;
      transition: 0.8s ease;
    }

    .card-desc span a {
      background-color: var(--blue);
      display: inline-block;
    }

    .card:hover .card-desc {
      opacity: 1;
      height: 100%;
    }

    .cards h1 {
      font-size: 2.8rem;
      color: #fff;
      margin: 40px 0 20px 0;
      text-align: center;
    }


    /* akhir destination */

    /* review */
    .review {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      margin-top: 100px;
    }

    .review h1 {
      position: relative;
      display: inline-block;
      text-transform: uppercase;
      border-bottom: 4px solid #3498db;
      color: #24416b;
      font-size: 45px;
      font-weight: bold;
    }

    .container5 {
      width: 80%;
      margin: 0 auto;
      display: flex;
      justify-content: center;
      margin-top: 60px;
      flex-direction: row;
    }

    .review-img {
      margin: 0 auto;
    }

    .box {
      width: 100%;
      height: 410px;
      background-color: #d1e3f363;
      margin: 0 10px;
      padding: 20px;
      border-radius: 10px;
    }


    .box h3 {
      color: #24416b;
    }

    iframe {
      width: 600px;
      height: 410px;
      border-radius: 10px;
    }

    .traveler {
      display: flex;
      margin-top: 50px;
      gap: 10px;
    }

    .traveler h4 {
      color: #24416b;
      margin-bottom: -5px;
    }

    .border-text {
      margin-top: 1px;
    }

    .border-text p {
      font-size: 12px;
      padding-top: 5px;
    }

    @media screen and (max-width: 1000px) {
      .container5 {
        display: flex;
        flex-direction: column;
      }

    }

    @media screen and (max-width: 680px) {
      iframe {
        width: 400px;
      }
    }

    @media screen and (max-width: 450px) {
      iframe {
        width: 100%;
      }
    }

    .border {
      height: 50px;
      width: 50px;
      border-radius: 50%;
      display: inline-block;
    }

    /* akhir review */

    /* travel guide */
    .travel-guide h1 {
      margin-top: 6rem;
      position: relative;
      display: inline-block;
      text-transform: uppercase;
      border-bottom: 4px solid #3498db;
      color: #24416b;
      font-size: 45px;
      font-family: serif;
      font-weight: bold;
      left: 42%;
    }

    .column {
      position: relative;
      max-width: 100%;
      margin-left: 85px;
      margin-right: 120px;
      margin-top: 70px;
      display: flex;
      padding-inline: 2rem;
      flex-direction: row;
    }

    .column img {
      border-radius: 5px;
      height: 200px;
      background-color: gray;
    }

    /* akhir travel guide */

    /* footer */
    .footer {
      margin: 0 auto;
      background-color: #24416b;
      width: 95%;
      height: max-content;
      color: white;
      margin-top: 5rem;
      border-radius: 20px;
    }


    .media-sosial {
      align-items: center;
      justify-content: center;
      display: flex;
      padding-left: 10px;
      flex-direction: row;
    }

    .fa-brands {
      padding: 10px 10px;
      font-size: 30px;
      width: 50px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
      border-radius: 40px;
    }

    .fa-snapchat {
      background-color: yellow;
      color: black;
    }

    .fa-twitter {
      background-color: #55acee;
      color: white;
    }

    .fa-instagram {
      background-color: maroon;
      color: white;
    }

    .fa-pinterest {
      background-color: red;
      color: white;
    }

    .text-media {
      text-align: center;
      margin-top: 30px;

    }

    .text-media a p {
      color: white;
      padding-bottom: 20px;
    }

    /* akhir footer */


    .header,
    .services,
    .destination,
    .review {
      padding-top: 5rem;
    }
  </style>

</head>

<body>
  <!-- start Header -->
  <section id="home">
    <div class="header">
      <nav>
        <div class="logo">
          <a href="#"><img src="" alt="Widodari Gedog" class="logo"></a>
        </div>
        <ul class="nav" id="myTopnav">
          <li class="list-nav"><a href="#home">Home</a></li>
          <li class="list-nav"><a href="#about-us">About Us</a></li>
          <li class="list-nav"><a href="#destination">Destination</a></li>
          <li class="list-nav"><a href="#review">Review</a></li>
          <li>
            <a class="login-button" href="/login">Admin</a>
          </li>
        </ul>
        <div class="toggle">
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </nav>
      <header class="v-header container">
        <div class="video-header">
          <video autoplay muted loop>
            <source src="asset/timelapsePatung.mp4" type="video/mp4">
          </video>
        </div>

        <div class="header-overlay"></div>
        <div class="header-content">
          <h1>Welcome Everyone</h1>
          <p>Bali appeals through its sheer natural beauty of looming volcanoes and lush terraced rice fields
            that exude peace and serenity!</p>
          <button class="btn btn-slide">
            <a href="#destination">Find Out More</a>
          </button>
        </div>
      </header>
    </div>
  </section>
  <!-- End Header -->
  <!-- destination -->
  <section class="destination">

    <h1>Destination</h1>
    <div class="cards">
      <?php foreach ($wisata as $i) : ?>
        <tr>
          <div class="card">
            <h2 class="card-title"><?= $i['nama_wisata'] ?></h2>
            <img src="<?= base_url('uploads/' . $i['gambar']); ?>" alt="">
            <p class="card-desc"><?= $i['deskripsi'] ?> <span><a href="<?= $i['lokasi']; ?>" target="_blank">lihat lokasi</a></span></p>

          </div>
        </tr>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- akhir destination -->

  <!-- review -->

  <section>
    <div class="review" id="review">

      <h1>WHAT THE SAY</h1>

      <div class="container5">
        <div class="review-img">
          <iframe src="https://www.youtube.com/embed/2b9txcAt4e0?autoplay=1" frameborder="0"></iframe>
        </div>
        <div class="box">
          <div class="review-text">
            <h3>The Beauty Of Bali</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti quibusdam odio voluptatum
              debitis dolor, suscipit blanditiis minima necessitatibus aspernatur dolorum obcaecati. Quas,
              consequuntur eos! Vitae quod ducimus eum vel culpa!</p>
          </div>
          <div class="traveler">
            <img src="asset/nathan punk.jpeg" class="border">

            <div class="border-text">
              <h4>By Nathan Punk</h4>
              <p>Traveler Handal</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- akhir review -->
  </section>

  <!-- footer -->
  <div class="footer">
    <div class="media-sosial">
      <a href="#" class="fa-brands fa-snapchat"></a>
      <a href="#" class="fa-brands fa-twitter"></a>
      <a href="#" class="fa-brands fa-instagram"></a>
      <a href="#" class="fa-brands fa-pinterest"></a>
    </div>
    <div class="text-media">
      <a href="https://wisatakreatifgedogpatriaoutbound.blogspot.com" target="_blank">
        <p>Kelompok 2 KKN UPN Veteran Jatim @ Kelurahan Gedog 2022</p>
      </a>
    </div>
  </div>
  <!-- akhir footer -->




  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script type="text/javascript">
    window.addEventListener("scroll", function() {
      var nav = document.querySelector("nav");
      nav.classList.toggle('sticky', window.scrollY > 0);
    });

    function myFunction() {
      let navlist = document.querySelectorAll
    }
  </script>

  <script>
    AOS.init();
  </script>
</body>

</html>