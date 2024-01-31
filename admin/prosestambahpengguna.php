<?php
    include('../koneksi.php');

    $namapenguna            =mysqli_real_escape_string($sambung,$_POST['namapengguna']);
    $jabatan                =mysqli_real_escape_string($sambung,$_POST['jabatan']);
    $alamat                 =mysqli_real_escape_string($sambung,$_POST['alamat']);
    $notelephone            =mysqli_real_escape_string($sambung,$_POST['notelephone']);
    $hakakses               =mysqli_real_escape_string($sambung,$_POST['hakakses']);
    $username               =mysqli_real_escape_string($sambung,$_POST['username']);
    $password               =mysqli_real_escape_string($sambung,$_POST['password']);
    $status                 =mysqli_real_escape_string($sambung,$_POST['status']);

    $password=md5($password); //mengubah password biasa menjadi enskripsi md5

    //cek username sudah ada atau belum, jika sudah ada isi data lagi
    $qusername=mysqli_query($sambung,"SELECT * FROM pengguna WHERE username='$username'");
    $cekdata=mysqli_num_rows($qusername);

    if($cekdata>0)
    {
        echo "<script>alert('Data username sudah ada ^_^')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php?tujuan=tambahpengguna'>";
    }

    else
    {
        //Proses Simpan ke tabel pengguna
        $simpan=mysqli_query($sambung,"INSERT INTO pengguna (namapengguna,
                                                            jabatan,
                                                            alamat,
                                                            notelephone,
                                                            hakakses,
                                                            username,
                                                            password,
                                                            status)
                                                            VALUES('$namapenguna',
                                                            '$jabatan',
                                                            '$alamat',
                                                            '$notelephone',
                                                            '$hakakses',
                                                            '$username',
                                                            '$password',
                                                            '$status')");
        //header('location:index.html');
        echo "<script>alert('Data Pengguna berhasil disimpan ^_^')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php?tujuan=pengguna'>";
    }
?>