<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Detail Lomba External</title>
    <style>
      *{
  padding: 0;
  margin: 0;
  font-family: 'Josefin Sans', sans-serif;
  box-sizing: border-box;
}

.hero{
  width: 100%;
  background-color: #88B2CC;
  background-size: cover;
  background-position: center;

}

nav{
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-right: 8%;
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
  margin-left: 450px;
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

img {
 margin: auto;
 width: 600px;
}

.kotak{
  background-color: #fff;
}

.card {
 border-radius: 5px;
 padding: 40px;
 margin: auto;
 text-align: center;
 background-color: white;
 width: 100%;
}

.card h2{
  color:#E98973 ;
  font-size: 30px;
  width: 1130px;
  margin: 10px auto;
  margin-top: 1px;
  text-align: center;
}

.info {
  text-align: justify;
  font-size: 12pt;
  padding: 30px;
  color: black;
  background-color: white;
}

.button {
  border-radius: 30px; /*untuk bikin buletan disamping */
  padding: 10px 20px;
  font-family: "Open Sans", sans-serif;
  background-color: #658EA9;
  margin-left: 55px;
  margin-bottom: 50px;
  width: 220px;
  text-decoration: none;
  color: white;
  box-shadow:  0px 0px 7px #658EA9, 0px 0px 15px #858585;
}

a:link {
  text-decoration: none;
  color: white;
}

.button:hover {
  text-decoration: none;
  color: white;
  transform: scale(1.2);
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

.newslatter form{
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
  width: 50%;
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
    <div class="hero">
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

      <div class="kotak">
        <div class="card">
          <h2>"𝗧𝗛𝗘 𝗡𝗘𝗫𝗧 𝗗𝗜𝗚𝗜𝗧𝗔𝗟 𝗚𝗘𝗡𝗘𝗥𝗔𝗧𝗜𝗢𝗡” 𝗩𝗶𝗱𝗲𝗼 𝗖𝗼𝗺𝗽𝗲𝘁𝗶𝘁𝗶𝗼𝗻"</h2>
          <br><br>
          <img src="external.webp" alt="lomba2" /><br><br><br>
          <hr>
        </div>
  
        <div class="info">
          <pre>
        🚨 𝐁𝐔𝐀𝐓 𝐊𝐀𝐋𝐈𝐀𝐍 𝐀𝐍𝐀𝐊 𝐒𝐌𝐀 & 𝐊𝐔𝐋𝐈𝐀𝐇 🚨
          
        Yuk ikutan Video Competition ini dan dapatkan BEASISWA!
          
        ✨ @generadhika.media 𝐏𝐫𝐨𝐮𝐝𝐥𝐲 𝐏𝐫𝐞𝐬𝐞𝐧𝐭 ✨
          
        "𝗧𝗛𝗘 𝗡𝗘𝗫𝗧 𝗗𝗜𝗚𝗜𝗧𝗔𝗟 𝗚𝗘𝗡𝗘𝗥𝗔𝗧𝗜𝗢𝗡” 𝗩𝗶𝗱𝗲𝗼 𝗖𝗼𝗺𝗽𝗲𝘁𝗶𝘁𝗶𝗼𝗻"
          
        Video dibuat dengan menjawab semua topik yang ada dibawah ini:
          
        ✔️ Apa itu Teknologi Digital?
        ✔️ Pengaruh teknologi digital dalam dunia pekerjaan dan kehidupan manusia
        ✔️ Bagaimana cara generasi muda mempersiapkan diri agar bisa beradaptasi dan sukses di Era Digital ini?
          
        🥇 𝗝𝗨𝗔𝗥𝗔 𝟭
        - Beasiswa belajar di @Purwadhikaschool senilai Rp 50.000.000 + uang tunai sebesar Rp 3.000.000
        - Digital Tech Adventure
        - Mendapat pengalaman mengunjungi berbagai kantor Startup terbaik
        - Menjadi Brand Ambassador Generadhika Media dan mendapat E-Certificate & E-Money
          
        🥈 𝗝𝗨𝗔𝗥𝗔 𝟮
        - Beasiswa belajar di @Purwadhikaschool senilai Rp 30.000.000 + uang tunai sebesar Rp 2.000.000
        - Menjadi Brand Ambassador Generadhika Media dan mendapat E-Certificate & E-Money
          
        🚨 𝟳𝟱 𝗣𝗘𝗠𝗘𝗡𝗔𝗡𝗚 𝗟𝗢𝗠𝗕𝗔 𝗬𝗔𝗡𝗚 𝗧𝗘𝗥𝗣𝗜𝗟𝗜𝗛
        - Beasiswa belajar di @Purwadhikaschool senilai Rp 12.000.000
        - Menjadi Brand Ambassador Generadhika Media dan mendapat E-Certificate & E-Money
          
        * Beasiswa bisa ditukarkan untuk mengikuti International Degree Program (Dengan gelar dari Universitas ternama di Australia dan UK) 
        atau Program Job Connector di bidang (Digital Marketing, UI/UX, Data Science, dsb)
          
        ➖➖➖➖➖➖➖➖➖➖➖➖➖
          
        📱 Contact Person: (+62) 851-6317-6715
        </pre>
        <br>
          <div class="button">
            <a href="https://linktr.ee/generadhikamedia" target="_blank">Informasi Lebih Lengkap</a>
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