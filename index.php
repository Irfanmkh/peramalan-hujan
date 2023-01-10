<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Yatra+One&display=swap" rel="stylesheet">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- my css -->
    <link rel="stylesheet" href="style.css" />
    <title>forecast</title>
  </head>
  <body>
    <!-- navbar -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Definisi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projek">Peramalan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Grafik</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#grafik">Grafik</a>
            </li> -->
          </ul>
        </div>
      </nav>
    </div>
    <!-- navbar end -->

    <!-- jumbotron -->
    <section class="jumbotron text-center" id="home">
      <img src="images/aaa.png" width="200" />
      <h1 class="metode">SIMPLE MOVING AVERAGE</h1>
      <p class="lead">Irfan Maulana Khakiki (190441100113) | Rizal Alfianto (190441100024)</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0099ff"
          fill-opacity="1"
          d="M0,32L21.8,48C43.6,64,87,96,131,128C174.5,160,218,192,262,192C305.5,192,349,160,393,149.3C436.4,139,480,149,524,133.3C567.3,117,611,75,655,48C698.2,21,742,11,785,53.3C829.1,96,873,192,916,234.7C960,277,1004,267,1047,240C1090.9,213,1135,171,1178,176C1221.8,181,1265,235,1309,218.7C1352.7,203,1396,117,1418,74.7L1440,32L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- jumbotron end -->

    <!-- about -->

    <section id="about">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col" data-aos="fade-down" data-aos-duration="1000">
            <h2>Simple Moving Average</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-4 text-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
            <img src="images/portrait-happy-excited-man-holding-laptop-computer.png" width="500" alt="">
          </div>
          <div class="col-sm-9" data-aos="fade-left" data-aos-duration="1000">
            <p class="definisi">
              Simple Moving Average merupakan model dalam melakukan prediksi. Teknik moving average digunakan dalam memprediksi permintaan dengan cara melakukan perhitungan nilai rata-rata dan nilai permintaan sesungguhnya dari sejumlah periode yang spesifik sebelumnya.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,128L40,154.7C80,181,160,235,240,261.3C320,288,400,288,480,293.3C560,299,640,309,720,282.7C800,256,880,192,960,186.7C1040,181,1120,235,1200,245.3C1280,256,1360,224,1400,208L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- about end -->

    <!-- projek -->
    <section id="projek">
      <div class="container">
        <div class="col">
            <h2 class="judul">Simple Moving Average</h2>
            <p class="subJudul">Peramalan / Forecast Data Curah Hujan</p>
        </div>
        <?php
        include 'lihat_data.php';
        ?>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0099ff"
          fill-opacity="1"
          d="M0,224L6.3,197.3C12.6,171,25,117,38,122.7C50.5,128,63,192,76,218.7C88.4,245,101,235,114,218.7C126.3,203,139,181,152,186.7C164.2,192,177,224,189,218.7C202.1,213,215,171,227,176C240,181,253,235,265,218.7C277.9,203,291,117,303,101.3C315.8,85,328,139,341,154.7C353.7,171,366,149,379,160C391.6,171,404,213,417,234.7C429.5,256,442,256,455,245.3C467.4,235,480,213,493,224C505.3,235,518,277,531,277.3C543.2,277,556,235,568,213.3C581.1,192,594,192,606,197.3C618.9,203,632,213,644,213.3C656.8,213,669,203,682,208C694.7,213,707,235,720,245.3C732.6,256,745,256,758,240C770.5,224,783,192,796,165.3C808.4,139,821,117,834,138.7C846.3,160,859,224,872,256C884.2,288,897,288,909,256C922.1,224,935,160,947,160C960,160,973,224,985,213.3C997.9,203,1011,117,1023,101.3C1035.8,85,1048,139,1061,154.7C1073.7,171,1086,149,1099,133.3C1111.6,117,1124,107,1137,122.7C1149.5,139,1162,181,1175,197.3C1187.4,213,1200,203,1213,186.7C1225.3,171,1238,149,1251,133.3C1263.2,117,1276,107,1288,101.3C1301.1,96,1314,96,1326,106.7C1338.9,117,1352,139,1364,160C1376.8,181,1389,203,1402,218.7C1414.7,235,1427,245,1434,250.7L1440,256L1440,320L1433.7,320C1427.4,320,1415,320,1402,320C1389.5,320,1377,320,1364,320C1351.6,320,1339,320,1326,320C1313.7,320,1301,320,1288,320C1275.8,320,1263,320,1251,320C1237.9,320,1225,320,1213,320C1200,320,1187,320,1175,320C1162.1,320,1149,320,1137,320C1124.2,320,1112,320,1099,320C1086.3,320,1074,320,1061,320C1048.4,320,1036,320,1023,320C1010.5,320,998,320,985,320C972.6,320,960,320,947,320C934.7,320,922,320,909,320C896.8,320,884,320,872,320C858.9,320,846,320,834,320C821.1,320,808,320,796,320C783.2,320,771,320,758,320C745.3,320,733,320,720,320C707.4,320,695,320,682,320C669.5,320,657,320,644,320C631.6,320,619,320,606,320C593.7,320,581,320,568,320C555.8,320,543,320,531,320C517.9,320,505,320,493,320C480,320,467,320,455,320C442.1,320,429,320,417,320C404.2,320,392,320,379,320C366.3,320,354,320,341,320C328.4,320,316,320,303,320C290.5,320,278,320,265,320C252.6,320,240,320,227,320C214.7,320,202,320,189,320C176.8,320,164,320,152,320C138.9,320,126,320,114,320C101.1,320,88,320,76,320C63.2,320,51,320,38,320C25.3,320,13,320,6,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- projek end-->

    <!-- contact me -->
    <section id="contact">
      <div class="container">
          <div class="col">
             <h2 class="judul">Simple Moving Average</h2>
            <p class="subJudul">Grafik</p>
        </div>
        <?php
        include 'grafik.php';
        ?>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0d6efd" fill-opacity="1" d="M0,160L120,181.3C240,203,480,245,720,240C960,235,1200,181,1320,154.7L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
      </svg>
    </section>
    <!-- contact me end -->

    <!-- footer -->
    <footer class="bg-primary text-center text-white pb-5">Created by <a class="text-white fw-bold">Irfan Maulana Khakiki | Rizal Alfianto (FORECASTING BUSINESS 5A)</a></footer>

    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
