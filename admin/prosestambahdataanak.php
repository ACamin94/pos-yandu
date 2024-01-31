<?php
    include ('../koneksi.php');

    $namaanak     =mysqli_real_escape_string($sambung,$_POST['namaanak']);
    $nikanak      =mysqli_real_escape_string($sambung,$_POST['nikanak']);
    $jeniskelamin =mysqli_real_escape_string($sambung,$_POST['jeniskelamin']);
    $tempatlahir  =mysqli_real_escape_string($sambung,$_POST['tempatlahir']);
    $tanggallahir =mysqli_real_escape_string($sambung,$_POST['tanggallahir']);
    $idibu        =mysqli_real_escape_string($sambung,$_POST['idibu']);
    $alamat       =mysqli_real_escape_string($sambung,$_POST['alamat']);

    $simpan=mysqli_query($sambung,"INSERT INTO dataanak (namaanak,
                                                        nikanak,
                                                        jeniskelamin,
                                                        tempatlahir,
                                                        tanggallahir,
                                                        idibu,
                                                        alamat)
                                                VALUE ('$namaanak',
                                                        '$nikanak',
                                                        '$jeniskelamin',
                                                        '$tempatlahir',
                                                        '$tanggallahir',
                                                        '$idibu',
                                                        '$alamat')");

    //Tampil Pesan
    echo "<script>alert('Data Anak berhasil disimpan ^_^')</script>";
    //Pindah ke halaman kategori
    echo "<meta http-equiv='refresh' content='0; url=index.php?tujuan=dataanak'>";

?>