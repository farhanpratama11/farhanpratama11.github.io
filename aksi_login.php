<?php 

require_once("conn.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = sha1($_POST['password']);

    $sql = "SELECT * FROM tb_user WHERE username='$username' OR email='$username' ";
  

   // $stmt-> = execute($params);
    $stmt=mysqli_query($conn,$sql);
    // jika user terdaftar

    $user = $stmt->fetch_assoc();

  
    if($user){
        // verifikasi password
        if($password == $user['password']){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman tiket
            header("Location: tiket.php");
        }
    }
}
?>