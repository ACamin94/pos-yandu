<?php
    include('../koneksi.php');

    $namakategori       =mysqli_real_escape_string($sambung,$_POST['namakategori']);
    $detailkategori     =mysqli_real_escape_string($sambung,$_POST['detailkategori']);
    
    //Proses Simpan ke tabel kategori
    
    $simpan=mysqli_query($sambung,"INSERT INTO kategori(namakategori,
                                                        detailkategori)
                                                        VALUES('$namakategori',
                                                        '$detailkategori')");
    //Tampil Pesan
    echo "<script>alert('Data Kategori berhasil disimpan ^_^')</script>";
    //Pindah ke halaman kategori
    echo "<meta http-equiv='refresh' content='0; url=index.php?tujuan=kategori'>";
?>