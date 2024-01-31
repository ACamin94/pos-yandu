<?php
    include('../koneksi.php');

    $namaibu          =mysqli_real_escape_string($sambung,$_POST['namaibu']);
    $nikibu           =mysqli_real_escape_string($sambung,$_POST['nikibu']);    
    $alamat           =mysqli_real_escape_string($sambung,$_POST['alamat']);
    $notelephone      =mysqli_real_escape_string($sambung,$_POST['notelephone']);

    //Proses Simpan ke tabel kategori
    
    $simpan=mysqli_query($sambung,"INSERT INTO dataibu(namaibu,
                                                        nikibu,
                                                        alamat,
                                                        notelephone)
                                                        VALUES('$namaibu',
                                                        '$nikibu',
                                                        '$alamat',
                                                        '$notelephone')");
    //Tampil Pesan
    echo "<script>alert('Data Kategori berhasil disimpan ^_^')</script>";
    //Pindah ke halaman kategori
    echo "<meta http-equiv='refresh' content='0; url=index.php?tujuan=dataibu'>";
?>