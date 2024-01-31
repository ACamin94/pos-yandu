<div class="container-fluid">
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
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Ticket List</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html" class="text-muted">Apps</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Ticket List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-5 align-self-center">
                    <div class="customize-input float-right">
                        <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                            <option selected>Aug 19</option>
                            <option value="1">July 19</option>
                            <option value="2">Jun 19</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header" id="dataTable">User List
            <a href="index.php?tujuan=tambahticket" class="btn btn-primary  right">
                <span class="icon text-white-70">
                    <i class="bx bx-plus"></i>
                </span>
                <span class="text">Creat Ticket</span>
            </a>
        </h5>
        <div class="table-responsive text-nowrap">
            <table class="table ">
            <thead>
                <tr>
                <th>No</th>
                <th>Hak Akses</th>
                <th>Sub Divisi</th>
                <th>Nama Pengguna</th>
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
                            <td><?php echo $data["hakakses"];?></td>
                            <td><?php echo $data["subdivisi"];?></td>
                            <td><?php echo $data["namapengguna"];?></td><!--namaarray["namakolom"]-->
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