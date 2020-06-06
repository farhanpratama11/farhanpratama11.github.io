<?php

require_once('conn.php');

if(isset($_POST['submit'])){

    // filter data yang diinputkan
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // enkripsi password
    $password = sha1($_POST["password"]);


    // menyiapkan query
    $sql = "INSERT INTO tb_user (username, email, password) 
            VALUES ('$username', '$email', '$password')";
    $stmt = mysqli_query($conn,$sql);


    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($stmt) header("Location: login.php");
}

?>