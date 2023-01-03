<!DOCTYPE html>
<html>
<head>
  <title>ILOMB UPNVJ</title> 

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" type="text/css" href="style-regist.css" media="screen" />
    <script language="JavaScript">
        function reg() {
            email_value = document.getElementById("email").value;
            nama_value = document.getElementById("nama").value;
            nim_value = document.getElementById("nim").value;
            fakultas_value = document.getElementById("fakultas").value;
            prodi_value = document.getElementById("prodi").value;
            notelp_value = document.getElementById("notelp").value;

            if (email_value == "" || nama_value == "" || nim_value == "" || fakultas_value == "" ||
                prodi_value == "" || notelp_value == "") {
                alert("Form Harus Diisi Dengan Lengkap");
            }
            else {
                alert("Anda sudah terdaftar dalam lomba\n" + "Nama: " + nama_value);
            }
        }
    </script>
</head>
<body>
    <body>
    <div class="hero2">
      <nav>
        <h2 class="logo"><a href="homelogin.php">ILOMB</a></h2>
        <ul>
          <li><a href="homelogin.php">Home</a></li>
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
  </div> 
  <div class="data">
    <h1>REGISTRASI POSTER CONTEST DAN WEBINAR EFFORT</h1>
    <h4 align="center">Silahkan daftar diri anda pada form yang telah disediakan</h4><br><br><br>
    <form action="" method="POST">
        <table style="margin:auto">
            <tr>
                <td class="name">Email</td>
                <td><input class="email" id="email" name="email"/></td>
            </tr>
            <tr>
                <td class="name">Nama</td>
                <td><input class="nama" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td class="name">NIM</td>
                <td><input class="nim" id="nim" name="nim" /></td>
            </tr>
            <tr>
                <td class="name">Fakultas</td>
                <td> <select class="fak" id="fakultas" name="fakultas">
                <option value="">Pilih Fakultas</option>
                <option value="Fakultas Ilmu Komputer">Fakultas Ilmu Komputer</option>
                <option value="Fakultas Ilmu Hukum">Fakultas Ilmu Hukum</option>
                <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
                <option value="Fakultas Ilmu Sosial dan Ilmu Politik">Fakultas Ilmu Sosial dan Ilmu Politik</option>
                <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
                <option value="Fakultas Ilmu Kesehatan">Fakultas Ekonomi dan Bisnis</option>
                <option value="Fakultas Teknik">Fakultas Teknik</option>
                </select>
                </td>
            </tr>
            <tr>
                <td class="name">Program Studi</td>
                <td><input class="prodi" id="prodi" name="prodi"/></td>
            </tr>
            <tr>
                <td class="name">Nomor Telepon</td>
                <td><input class="nomor" id="notelp" name="notelp" /></td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr align="center">
                <td></td>
                <td>
                    <button type="submit" class="button" onclick="reg()" name="register">Daftar</button><br>
                </td>
            </tr>
        </table>
    </form>
  </div>
  <!-- <footer>
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
  </footer> -->
</body>
</html>

<?php
    include "koneksi.php";

    if (isset($_POST['register'])) {
        mysqli_query($koneksi, "insert into register set
        email = '$_POST[email]',
        nama ='$_POST[nama]',
        NIM = '$_POST[nim]',
        fakultas = '$_POST[fakultas]',
        program_studi = '$_POST[prodi]',
        no_telp = '$_POST[notelp]'
        ");
    }
    if (isset($_POST['submit'])) {
        mysqli_query($koneksi, "insert into masukan set
        email = '$_POST[email]',
        pesan ='$_POST[pesan]'
        ");
    }
?>