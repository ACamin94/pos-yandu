<?php
    include('../koneksi.php');
     //pemanggilan data dari form (file editpengguna.php)
    $namapenguna            =mysqli_real_escape_string($sambung,$_POST['namapengguna']);
    $jabatan                =mysqli_real_escape_string($sambung,$_POST['jabatan']);
    $alamat                 =mysqli_real_escape_string($sambung,$_POST['alamat']);
    $notelephone            =mysqli_real_escape_string($sambung,$_POST['notelephone']);
    $hakakses               =mysqli_real_escape_string($sambung,$_POST['hakakses']);    
    $password               =mysqli_real_escape_string($sambung,$_POST['password']);
    $status                 =mysqli_real_escape_string($sambung,$_POST['status']);
    $idpengguna             =mysqli_real_escape_string($sambung,$_POST['idpengguna']);

    //Proses simpan jika password kosong
   if(empty($password))
   {
       $edit=mysqli_query($sambung,"UPDATE pengguna SET namapengguna='$namapengguna',
                                                        jabatan='$jabatan',
                                                        alamat='$alamat',
                                                        notelephone='$notelephone',
                                                       hakakses='$hakakses',
                                                       status='$status'
                                                       WHERE idpengguna='$idpengguna'");
                                                       
   }
   //proses simpan jika password diisi
   else 
   {
       $password=md5($password);
       $edit=mysqli_query($sambung,"UPDATE pengguna SET namapengguna='$namapengguna',
                                                        jabatan='$jabatan',
                                                        alamat='$alamat',
                                                        notelephone='$notelephone',
                                                        hakakses='$hakakses',
                                                       password='$password',                                                      
                                                       status='$status'
                                                       WHERE idpengguna='$idpengguna'");
   }

    
    //proses menampilkan pesan
    echo "<script>alert('Data Pengguna berhasil disimpan ^_^')</script>";
   //proses berpindah kehalaman pengguna 
    echo "<meta http-equiv='refresh' content='0; url=index.php?tujuan=pengguna'>";
    
?>