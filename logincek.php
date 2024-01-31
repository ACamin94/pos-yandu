<?php
    //Panggil koneksi
    include("koneksi.php");
    //Memulai session
    session_start();

    //ambil data dari form login (pada file index.php)
    $username=mysqli_real_escape_string($sambung,$_POST["username"]);
    $password=mysqli_real_escape_string($sambung,$_POST["password"]);

    //ubah password biasa menjadi terenkripsi md5
    $password=md5($password);

    //cek username dan password, ada pada tabel pengguna atau tidak
    $qcek=mysqli_query($sambung,"SELECT * FROM pengguna WHERE username='$username' AND password='$password' AND status='aktif'");
    $jml=mysqli_num_rows($qcek);//menghitung jumlah pengguna yang ditemukan
    $data=mysqli_fetch_array($qcek); //menyimpan data ke dalam array
    
    //jika username dan atau password tidak ditemukan, maka halaman pindah
    //ke index.php dan memicu tampilan pesan dengan nilai 1
    if ($jml==0) 
    {
        header('location:index.php?pesan=1');    
    }
    //jika username dan atau password cocok
    else 
    {
        $_SESSION["namapengguna"] =$data["namapengguna"];
        $_SESSION["hakakses"] =$data["hakakses"];
        $_SESSION["username"] =$data["username"];
        $_SESSION["password"] =$data["password"];

        if($data['hakakses']=='Admin')
        {
            header('location:admin/');
        }
        else 
        {
            header('location:Pimpinan/');
        }
    }
?>
