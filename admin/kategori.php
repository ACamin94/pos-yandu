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
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Maintenance Kategori</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">                                    
                                    <li class="breadcrumb-item text-muted active" aria-current="page">TICKET</li>
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
            <h5 class="card-header" id="dataTable">Data Maintenance Kategori
                <a href="index.php?tujuan=tambahkategori"  class="btn btn-primary right"  >
                    <span class="icon text-white-70">
                        <i class="bx bx-plus"></i>
                    </span>
                    <span class="text">Add Kategori</span>
                </a>
                
            </h5>
            <div class="table-responsive text-nowrap">
                <table class="table ">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Detai Kategori</th>                    
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php
                    //panggil koneksi
                    include("../koneksi.php");
                    $qdata=mysqli_query($sambung, "SELECT * FROM kategori");
                    $no=0;

                    while ($data=mysqli_fetch_array($qdata)) 
                    {
                        $no++; //$no=$no+1
                        ?>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["namakategori"];?></td>
                                <td><?php echo $data["detailkategori"];?></td>                                                     
                                <td>                                    
                                        <a  href="index.php?tujuan=editkategori&idkategori=<?php echo $data ["idkategori"];?>" 
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