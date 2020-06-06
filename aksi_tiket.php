<?php 

require_once('conn.php');

if(isset($_POST['pesan'])){
    
    $Nama_pemesan = filter_input(INPUT_POST,'Nama_pemesan',FILTER_SANITIZE_STRING);
    $Tanggal_Keberangkatan = filter_input(INPUT_POST,'Tanggal_Keberangkatan',FILTER_SANITIZE_STRING);
    $Jumlah_Kursi = filter_input(INPUT_POST,'Jumlah_Kursi',FILTER_SANITIZE_STRING);
    $Kelas = filter_input(INPUT_POST,'Kelas',FILTER_SANITIZE_STRING);
    $Kota_Asal = filter_input(INPUT_POST,'Kota_Asal', FILTER_SANITIZE_STRING);
    $Kota_Tujuan = filter_input(INPUT_POST,'Kota_Tujuan',FILTER_SANITIZE_STRING);
    $Nomor_Handphone = filter_input(INPUT_POST,'Nomor_Handphone', FILTER_SANITIZE_STRING);
    $sql = "INSERT INTO tb_tiket_bus(Nama_pemesan,Tanggal_Keberangkatan,Jumlah_Kursi,Kelas,Kota_Asal,Kota_Tujuan,Nomor_Handphone) 
            VALUES ('$Nama_pemesan', '$Tanggal_Keberangkatan', '$Jumlah_Kursi','$Kelas','$Kota_Asal','$Kota_Tujuan','$Nomor_Handphone')";

   // $stmt-> = execute($params);
    $stmt=mysqli_query($conn,$sql);
    // jika user terdaftar

    if($stmt){
          header("Location: pesan.php");
    }
  
}
?>