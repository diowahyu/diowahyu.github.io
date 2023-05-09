<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['subject']) && empty($_POST['message'])){

   

    die("Akses dilarang...");

} else {
     // ambil data dari formulir
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];
     
     
 
     // buat query
     $sql = "INSERT INTO contact (name, email, subject, message) VALUE ('$name', '$email', '$subject', '$message')";

    //  var_dump($sql); die();
     $query = mysqli_query($db, $sql);
 
    //  // apakah query simpan berhasil?
    //  if( $query ) {
    //      // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    //      header('Location: index.php?status=sukses');
    //  } else {
    //      // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    //      header('Location: index.php?status=gagal');
    //  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="list.php">lihat database</a>
</body>
</html>