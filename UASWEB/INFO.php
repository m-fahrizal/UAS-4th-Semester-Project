<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
    *{
      padding: 0;
      margin: 0;
      font-family: 'Josefin Sans', sans-serif;
      box-sizing: border-box;
      }

    .searching {
      text-align: center;
      margin-top: 100px;
      margin-bottom: 70px;
    }

    .input {
      padding: 15px;
      width: 500px;
      border-radius: 15px;
    }

    .find {
      padding: 15px;
      border-radius: 15px;
      font-size: 16px;
      background-color: #658EA9;
      border: 2px solid #000;
      color: #fff;
      font-weight: normal;
    }

    .find:hover {
      background-color: #E98973;
      transition: .3s;
    }

    .lesson-wrapper1 {
      margin-top: 50px;
      margin-bottom: 110px;
      padding: 0 5%;
      height: 500px;
      text-align: center;
    }

    .lesson-wrapper2{
      margin-top: 50px;
      margin-bottom: 110px;
      padding: 0 5%;
      height: 600px;
      text-align: center;
    }
    .heading {
      text-align: left;
      color: black;
    }

    .heading h2 {
      font-size: 30px;
      font-weight: bolder;
      margin-top: 80px;
      margin-bottom: 25px;
    }
    .lessons {
      display: flex;
      justify-content: center;

    }
    .lesson {
      width: 1000px;
      height: 430px;
      background-color: #E2EAF7;
      border-radius: 10px;
      margin-right: 10px;
      margin-left: 10px;
      padding-bottom: 20px;
      margin-top: 10px;
      border-radius: 10px;
      transition: transform .4s;
    }
    .lesson:hover {
      transform: scale(1.05);
    }

    .lesson-image {
    height: 200px;
    margin-bottom: 20px;
    border-radius: 10px 10px 0 0;
    
    }

    .card1 {
      background-image: url('Kontes Robot - Poster-1.png');
      background-size: cover;
      background-position: 5px 5px;
    }
    .card2 {
      background-image: url('Poster Semua Lomba.png');
      background-size: cover;
      background-position: 5px 5px;
    } 
    .card3 {
      background-image: url('lombaupn.jpg');
      background-size: cover;
    } 
    .card4 {
      background-image: url('internal.jpg');
      background-size: cover;
    }
    
    .card5 {
      background-image: url('CODE AMIKOM.jpg');
      background-size: cover;
      background-position: 5px 5px;
    }
    .card6 {
      background-image: url('external.webp');
      background-size: cover;
    } 
    .card7 {
      background-image: url('CaptureFlag.PNG');
      background-size: cover;
      background-position: 5px 10px;
    } 
    .card8 {
      background-image: url('G20.jpeg');
      background-size: cover;
      background-position: 5px 10px;
    }
  
    .lesson h2 {
      color: #658EA9;
      width: 80%;
      font-size: 18px;
      margin: 5px auto;
      line-height: 20px;
    }
    .buy {
      margin: 20px auto;
    }

    .apply {
      background-color: #E98973;
      padding: 10px 40px;
      border-radius: 10px;
      font-size: 16px;
      color: #f2f2f2;
      font-weight: bold;
      text-decoration: none;
    }

    .apply:hover{ 
      background-color: #658EA9;
      transition: .4s;
    }

    .text-contents {
      margin-top: 40px;
      margin-bottom: 15px;
      width: 80%;
      display: inline-block;
      font-size: 15px;
      color: #b3aeb5;
      text-align: justify;
    }

    span {
      font-weight: bold;
    }

    .hero{
      height: 100vh;
      width: 100%;
      background: url('UPNVJ.png');
      background-size: cover;
      background-position: center;

    }

    .hero1{
      height: 50vh;
      width: 100%;
      background: #88B2CC;
      background-size: cover;
      background-position: center;
    }

    .profileweb h1{
      color: white;
      margin-top: 100px;
      font-size: 35px;
      font-weight: bold;
      text-align: center;
    }

    nav{
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-top: 35px;
      padding-right: 5%;
      padding-left: 8%;

    }

    .logo{
      color: white;
      font-size: 35px;
      letter-spacing: 1px;
      cursor: pointer;
      margin-left: 1px;
      margin-right: 40px;
    }

    .logo a{
      color: white;
      text-decoration: none;
    }

    nav ul li{
      list-style-type: none;
      display: inline-block;
      padding: 10px 25px;

    }

    nav ul li a{
      color: white;
      text-decoration: none;
      text-transform: capitalize;
    }

    nav ul li a:hover{
      color: #E98973 ;
      transition: .4s ;
    }

    .akun{
      margin-left: 500px;
    }
    .akun i{
      font-size: 25px;
      display: block;
      text-align: left;
      color: #E98973;
      float: left;
      transition: transform .4s;
    }

    .akun i:hover{
      color: white;
    }

    .content{
      position: absolute;
      top: 50%;
      left: 8%;
      transform: translateY(-50%);
    }

    h1{
      color: white;
      margin: 20px 0px 20px;
      font-size: 75px;
      font-weight: bold;
    }

    h3{
      color: #E7D4C0 ;
      font-size: 25px ;
      margin-bottom: 15px;
    }

    h4{
      color: #E7D4C0;
      letter-spacing: 2px;
      font-size: 20px;
    }
    footer{
      position: relative;
      width: 100%;
      height: 330px;
      background-color: #E98973;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .ilombpart{
      margin-right: 100px;
    }

    .ilombpart h3{
      color: floralwhite ;
      font-size: 25px;
      text-align: left;
      font-weight: bold;
      margin-top: 40px;
    }

    .ilombpart p{
      color: white;
      font-size: 15px;
      width: 500px;
      text-align: left;
      line-height: 26px;
    }

    .social{
      display: flex;
    }

    .social a{
      width: 45px;
      height: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #88B2CC;
      border-radius: 50%;
      margin: 0px 10px;
      margin-top: 20px;
    }

    .social a:hover{
      transform: scale(1.2);
    }

    .contactupnvj{
      margin-right: 100px;
      margin-top: 40px;
    }

    .contactupnvj h4{
      color: #E7D4C0 ;
      font-size: 20px;
      text-align: left;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .newslatter .sent-email{
      width: 300px;
      max-width: 100%;
      position: relative;
    }

    .newslatter form input:nth-child(1){
      display: inline-block;
      width: 100%;
      padding: 14px 80px 14px 15px;
      border: 2px solid white;
      outline: none;
      border-radius: 30px;
      margin-bottom: 10px;
    }

    .newslatter form input:nth-child(3){
      display: inline-block;
      width: 100%;
      height: 100px;
      padding: 14px 80px 14px 15px;
      border: 2px solid white;
      outline: none;
      border-radius: 30px;
      margin-bottom: 10px;
    }

    .newslatter form input:nth-child(5){
      position: absolute;
      display: inline-block;
      width: 10%;
      padding: 10px 30px;
      border: none;
      outline: none;
      border-radius: 30px;
      background-color: #88B2CC;
      color: white;
      font-weight: bold;
      box-shadow: 0px 0px 5px #88B2CC, 0px 0px 15px #658EA9;
      align-items: center;
      justify-content: center;
    }

    .serviceweb{
      margin-right: 100px;
      margin-top: 40px;
    }

    .serviceweb h4{
      color: #E7D4C0 ;
      font-size: 20px;
      text-align: left;
      font-weight: bold;
      align-items: top;
      margin-top: 10px;
      margin-bottom: 20px;
    }

    .serviceweb p{
      color: white ;
      font-size: 15px;
      text-align: left;
      line-height: 26px;
      margin-bottom: 90px;
    }

    .serviceweb p a{
      color: white;
      text-decoration: underline;
      text-transform: capitalize;
    }
    </style>
</head>
<body>
  <div class="hero1">
    <nav>
      <h2 class="logo"><a href="HOMELOGIN.php">ILOMB</a></h2>
      <ul>
        <li><a href="HOMELOGIN.php">Home</a></li>
        <li><a href="PROFILELOGIN.php">Profile</a></li>
        <li><a href="#">Info Kompetisi</a></li>
        <li><a href="INFOPRESTASI.php">Info Prestasi</a></li>
      </ul>
      <div class="akun">
        <i class="fa-solid fa-user"></i>
      </div>
      <div class="log">
      <ul>  
        <li><a href="HOMEWEBLOMBA.php">Log Out</a></li>
      </ul>
      </div>
    </nav>
    <div class="profileweb">
      <h1>INFORMASI LOMBA MAHASISWA UPNVJ</h1>
    </div>
  </div>

  <form class="searching">
    <input class="input" type="search" placeholder="Search...">
    <input class="find" type="submit" value="Search">  
  </form>

  <div class="lesson-wrapper1">
    <div class="container">
      <div class="heading">
        <h2>Kompetisi di UPNVJ</h2>
      </div>
      <div class="lessons">
        <div class="lesson">
          <div class="lesson-image card1"></div>
          <h2>PORSIMNAS WIMAYA KONTES ROBOT 2022</h2>
          <p class="text-contents"><span>Pendaftaran : </span>28 Maret 2022 - 25 April 20222</p>
          <div class="buy">
            <a href="#" class="apply">Apply Now</a>
          </div>
        </div>
        <div class="lesson">
          <div class="lesson-image card2"></div>
          <h2>FIK FAIR COMPETITION UPNVJ 2021</h2>
          <p class="text-contents"><span>Pendaftaran : </span>14 September 2021 - 8 November 2021</p>
          <div class="buy">
            <a href="#" class="apply">Apply Now</a>
          </div>
        </div>
        <div class="lesson">
          <div class="lesson-image card3"></div>
          <h2>LOMBA VIDEO MEDIA SOSIAL</h2>
          <p class="text-contents"><span>Pengumpulan : </span>24 Mei 2022 - 30 Mei 2022</p>
          <div class="buy">
            <a href="#" class="apply">Apply Now</a>
          </div>
        </div>
        <div class="lesson">
          <div class="lesson-image card4"></div>
          <h2>POSTER CONTEST dan WEBINAR EFFORT</h2>
          <p class="text-contents"><span>Pendaftaran : </span>20 Mei 2022 - 26 Mei 2022</p>
          <div class="buy">
            <a href="detail-lomba-inter.php" class="apply">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="lesson-wrapper2">
    <div class="container">
      <div class="heading">
        <h2>Kompetisi dari Luar UPNVJ</h2>
      </div>
      <div class="lessons">
        <div class="lesson">
          <div class="lesson-image card5"></div>
          <h2>COMPETITION OF DEVELOPERS (CODE)</h2>
          <p class="text-contents"><span>Pendaftaran : </span>7 Juni 2021 - 13 Agustus 2021</p>
          <div class="buy">
            <a href="#" class="apply">Apply Now</a>
          </div>
        </div>
        <div class="lesson">
          <div class="lesson-image card6"></div>
          <h2>"THE NEXT DIGITAL GENERATION" VIDEO</h2>
          <p class="text-contents"><span>Pendaftaran : </span>29 Juni 2022 - 31 Juli 2022</p>
          <div class="buy">
            <a href="detail-lomba.php" class="apply">Apply Now</a>
          </div>
        </div>
        <div class="lesson">
          <div class="lesson-image card7"></div>
          <h2>CAPTURE THE FLAG ARA 2022</h2>
          <p class="text-contents"><span>Pendaftaran : </span>1 Marret 2021 - 22 April 2021</p>
          <div class="buy">
            <a href="#" class="apply">Apply Now</a>
          </div>
        </div>
        <div class="lesson">
          <div class="lesson-image card8"></div>
          <h2>STARTUP FOR INDUSTRY 2022</h2>
          <p class="text-contents"><span>Pendaftaran : </span>19 April 2021 - 25 Juni 2021</p>
          <div class="buy">
            <a href="#" class="apply">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <table>
      <td>
        <div class="ilombpart">
          <h3>ILOMB UPNVJ</h3>
          <p>Bidang Kemahasiswaan dan Kerja Sama</p>
          <p>Universitas Pembangunan Nasional Veteran Jakarta<br>
        Jl. RS. Fatmawati, Pondok Labu, Jakarta Selatan, DKI Jakarta. 12450.<br>
        <p>+6221-765 6971</p>
        </div>
        <div class="social">
          <a href="https://www.facebook.com/upnjakarta/"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/upnveteranjakarta/?hl=en"><i class="fab fa-instagram-square"></i></a>
          <a href="https://www.youtube.com/c/UPNVeteranJakarta/featured"><i class="fab fa-youtube-square"></i></a>
          <a href="https://www.linkedin.com/school/universitas-pembangunan-nasional-veteran-jakarta/?originalSubdomain=id"><i class="fa-brands fa-linkedin"></i></a>
        </div>
      </td>
      <td>
        <div class="contactupnvj">
          <h4>Get In Touch</h4>
          <div class="newslatter">
          <form action="" method="POST">
              <input type="email" name="email" id="mail" placeholder="Enter Your Email"><br>
              <input type="message" name="pesan" id="pesan" placeholder="Enter Your Message"><br>
              <input type="submit" name="submit" value="Sent">
            </form>
          </div>
        </div>
      </td>
      <td>
        <div class="serviceweb">
          <h4>Our Service</h4>
          <p><a href="#">Info Kompetisi</a><br>
          <a href="#">Daftar Kompetisi</a><br>
          <a href="#">Info Prestasi</a><br>
        </p>
      </div>
      </td>
    </table>
  </footer>
</body>
</html>

<?php
    include "koneksi.php";

    if (isset($_POST['submit'])) {
        mysqli_query($koneksi, "insert into masukan set
        email = '$_POST[email]',
        pesan ='$_POST[pesan]'
        ");
    }
?>