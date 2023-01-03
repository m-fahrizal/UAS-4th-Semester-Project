<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

	<title>INFO PRESTASI</title>
</head>
<body>
	<div class="hero1">
      <nav>
        <h2 class="logo"><a href="HOMELOGIN.php">ILOMB</a></h2>
        <ul>
          <li><a href="HOMELOGIN.php">Home</a></li>
          <li><a href="PROFILELOGIN.php">Profile</a></li>
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
      	<h1>INFORMASI PRESTASI MAHASISWA</h1>
      </div>
    </div>

    <div class="fotoslide">
	<div class="slide-container">
		<span class="slider-span" id="slider-span1"></span>
		<span class="slider-span" id="slider-span2"></span>
		<span class="slider-span" id="slider-span3"></span>
		<span class="slider-span" id="slider-span4"></span>
		<span class="slider-span" id="slider-span5"></span>
		<span class="slider-span" id="slider-span6"></span>

		<div class="image-slider">
			<div class="slide-div" id="slide-1">
				<img src="img1.jpg" alt="" class="img" id="img">
				<a href="#slider-span1" class="button2" id="button-1"></a>
			</div>
			<div class="slide-div" id="slide-2">
				<img src="img2.jpg" alt="" class="img" id="img">
				<a href="#slider-span2" class="button2" id="button-2"></a>
			</div>
			<div class="slide-div" id="slide-3">
				<img src="img3.jpg" alt="" class="img" id="img">
				<a href="#slider-span3" class="button2" id="button"></a>
			</div>
			<div class="slide-div" id="slide-4">
				<img src="img4.jpg" alt="" class="img" id="img">
				<a href="#slider-span4" class="button2" id="button"></a>
			</div>
			<div class="slide-div" id="slide-5">
				<img src="img5.jpg" alt="" class="img" id="img">
				<a href="#slider-span5" class="button2" id="button"></a>
			</div>
			<div class="slide-div" id="slide-6">
				<img src="img6.jpg" alt="" class="img" id="img">
				<a href="#slider-span6" class="button2" id="button"></a>
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