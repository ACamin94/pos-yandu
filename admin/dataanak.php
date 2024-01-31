<div class="content-wrapper">
      
    <style media="screen">
    
    .left{
        float: left;
        display: block;
    }
    .right{
        float: right;
        display: block;
    }       
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"></span>Table Data Anak</h4>            
            <div class="card">
                <h5 class="card-header" id="dataTable">List Data Anak
                    <a href="index.php?tujuan=tambahdataanak" class="btn btn-primary  right">
                        <span class="icon text-white-70">
                            <i class="bx bx-plus"></i>
                        </span>
                        <span class="text">Add Data Anak</span>
                    </a>
                </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table ">
                  <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Anak</th>
                            <th class="text-center">NIK Anak</th>
                            <th class="text-center">Tempat Lahir</th>
                            <th class="text-center">Tanggal Lahir</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">Nama Ibu</th>
                            <th class="text-center">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        //panggil koneksi
                        include("../koneksi.php");
                        //inisialisasi variabel nomor
                        $nomor=0;
                        //SQL panggil data tabel menu inner join dengan tabel kategori
                        $qdata=mysqli_query($sambung,"SELECT * FROM dataanak inner join dataibu on dataanak.idibu=dataibu.idibu");
                        //perulangan
                        WHILE($data=mysqli_fetch_array($qdata))   
                        {
                            //pembuatan nomor urut
                            $nomor++;
						?>
                        <tr>
                            <td><?php echo $nomor;?></td>
                            <td><?php echo $data['namaanak'];?></td> 
                            <td><?php echo $data['nikanak'];?></td>
                            <td><?php echo $data['tempatlahir'];?></td>
                            <td><?php echo $data['tanggallahir'];?></td>
                            <td><?php echo $data['jeniskelamin'];?></td>
                            <td><?php echo $data['namaibu'];?></td>
                            <td><?php echo $data['alamat'];?></td>
                            <td>
                            <?php
                                
                            ?>
                            </td>
                            <td class="text-center">
                            <!-- Link untuk mengedit menu -->
                                <a href="index.php?tujuan=editmenu&idmenu=<?php echo $data['idmenu'];?>" onclick="return confirm('Apakah data akan diedit?')">
                                <i class="fas fa-fw fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                            <?php
                            //akhir perulangan
                            } 
                    ?>

                    </tbody>
                  </table>
                </div>
            </div>

    </div>            
</div>