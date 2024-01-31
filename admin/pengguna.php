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
            <h4 class="fw-bold py-3 mb-4"></span>Tabel Petugas</h4>            
            <div class="card">
                <h5 class="card-header" id="dataTable">List Data Petugas
                    <a href="index.php?tujuan=tambahpengguna" class="btn btn-primary  right">
                        <span class="icon text-white-70">
                            <i class="bx bx-plus"></i>
                        </span>
                        <span class="text">Add Data Petugas</span>
                    </a>
                </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table ">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Pengguna</th>                        
                        <th>jabatan</th> 
                        <th>Alamat</th>
                        <th>No telephon</th> 
                        <th>Hak Akses</th>                                               
                        <th>User Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php
                        //panggil koneksi
                        include("../koneksi.php");
                        $qdata=mysqli_query($sambung, "SELECT * FROM pengguna");
                        $no=0;

                        while ($data=mysqli_fetch_array($qdata)) 
                        {
                            $no++; //$no=$no+1
                            ?>
                                <tr>
                                    <td><?php echo $no;?></td>                                    
                                    <td><?php echo $data["namapengguna"];?></td><!--namaarray["namakolom"]-->
                                    <td><?php echo $data["jabatan"];?></td>
                                    <td><?php echo $data["alamat"];?></td>
                                    <td><?php echo $data["notelephone"];?></td>
                                    <td><?php echo $data["hakakses"];?></td>
                                    <td><?php echo $data["username"];?></td>                                    
                                    <td><span class="badge bg-label-primary me-1"><?php echo $data["status"];?></span></td>
                                    <td>
                                        
                                            <a  href="index.php?tujuan=editpengguna&idpengguna=<?php echo $data ["idpengguna"];?>" 
                                                ><i class="bx bx-edit-alt me-1"></i> </a
                                            >
                                            <a  href="javascript:void(0);"
                                                ><i class="bx bx-trash me-1"></i></a>
                                                                                

                                        
                                    </td>
                                </tr>
                            <?php
                        }
                        
                        ?>
                                              
                    </tbody>
                  </table>
                </div>
            </div>

    </div>            
</div>