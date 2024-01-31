<?php
    include('../koneksi.php');//panggil file koneksi
    $idkategori=mysqli_real_escape_string($sambung,$_GET['idkategori']);//ambil idkategori dari link edit

    //panggil data berdasarkan idkategori yang dikirim
    $qdata=mysqli_query($sambung,"SELECT * FROM kategori WHERE idkategori='$idkategori'");
    $data=mysqli_fetch_array($qdata);
?>

<div class="content-wrapper">     
  <div class="container-xxl flex-grow-1 container-p-y" >                    
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Kategori</h6>
        </div>

        <div class="card-body">
            <form action="prosestambahkategori.php" method="post">
                <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="namakategori">Nama Kategori </label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                            ></span>
                            <input type="text" id="namakategori" name="namakategori" value="<?php echo $data["namakategori"];?>" class="form-control" required>
                        </div>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="detailkategori">Detail Kategori</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                                ><i class="bx bx-buildings"></i
                            ></span>
                            <input type="text" id="detailkategori" name="detailkategori" value="<?php echo $data["detailkategori"];?>" class="form-control" required>
                                               
                            
                        </div>
                        <input type="hidden" id="idkategori" name="idkategori" value="<?php echo $data ["idkategori"];?>"> 
                    </div>
                </div>                        
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>

            
      </div>
    </div>
  </div>            
</div>

