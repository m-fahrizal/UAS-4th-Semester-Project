<?php
 //untuk penghubung dengan file koneksi

 include 'koneksi.php';
 session_start();

 //cara menangkap data yang dikirim dari form

 if(isset($_POST['input'])){

  $username = $_POST['username'];

  $password = $_POST['password'];

  //ambil data dari database tabel login dengan username dan password yang sesuai

  $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE username='$username' AND password='$password'");

  if(mysqli_num_rows($data)){
    header("Location: homelogin.php");
    exit;
  }else{
    echo($message[] = 'incorrect email or password!');
  }
 }
 ?>