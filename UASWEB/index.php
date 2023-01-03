<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ILOMB UPNVJ</title>

    <link rel="stylesheet" type="text/css" href="web-lomba.css" media="screen" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
    <script language="JavaScript">
        function login() {
            nim_value = document.getElementById("nim").value;
            pass_value = document.getElementById("password").value;

            if(nim_value == "" || pass_value == ""){
                alert("Form Harus Diisi Dengan Lengkap");
            } 
        }
    </script>
</head>
<body>
    <div class="hero">
    <nav>
      <h2 class="logo"><a href="HOMEWEBLOMBA.php">ILOMB</a></h2>
      <ul>
        <li><a href="HOMEWEBLOMBA.php">Home</a></li>
        <li><a href="Profile.php">Profile</a></li>
        <li><a href="index.php">Info Kompetisi</a></li>
        <li><a href="index.php">Info Prestasi</a></li>
      </ul>
      <a href="#" class="btn">Login</a>
    </nav>
    </div>

    <div class="login">
        <h1>Login to your account</h1>
        <div class="inputlogin">
        <form action="login.php" method="post" name="form_input">
            <input type="text" name="username" id="nim" placeholder="NIM"><br>
            <input type="password" name="password" id="password" placeholder="Password"><br>
            <button type="submit" name="input" onclick="login()">LOGIN</button><br>
            <a href="#">Forget Password</a>
        </form>
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