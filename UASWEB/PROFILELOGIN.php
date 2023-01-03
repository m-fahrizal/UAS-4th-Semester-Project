<!DOCTYPE html>
<html>
<head>
  <title>ILOMB UPNVJ</title>
  <link rel="stylesheet" type="text/css" href="style.css">    

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
  <div class="hero1">
    <nav>
      <h2 class="logo"><a href="HOMELOGIN.php">ILOMB</a></h2>
      <ul>
        <li><a href="HOMELOGIN.php">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="INFO.php">Info Kompetisi</a></li>
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
      <h1>PROFILE WEBSITE INFORMASI LOMBA MAHASISWA UPNVJ</h1>
    </div>
  </div>

  <!----About Sect---->
  <section class="about">
    <table>
    <div class="main">
      <td>
      <img src="Prestasi.jpg"></td>
      <td>
      <div class="about-text">
        <h2>ILOMB MAHASISWA UPNVJ</h2>
          <p>Informasi Lomba (ILOMB) Mahasiswa UPNVJ merupakan sistem pengelolaan informasi perlombaan dari segala bidang baik di lingkungan internal Universitas Pembangunan Nasional Veteran Jakarta maupun di lingkungan luar dari perlombaan nasional hingga internasional. ILOMB Mahasiswa UPNVJ dirancang untuk memfasilitasi beragam kebutuhan mahasiswa akan informasi perlombaan demi meningkatkan prestasi mahasiswa Universitas Pembangunan Nasional Veteran Jakarta agar tujuan peningkatan kualitas mahasiswa yang diharapkan dapat tercapai secara efektif.
          </p>
      </div>
    </td>
    </div>
  </table>

  <div class="vidprofile">
  	<h2>VIDEO PROFILE UPNVJ</h2>
  	<iframe width="1000" height="562" src="https://www.youtube.com/embed/d7aUvW73x8Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

	</section>

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