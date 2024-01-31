<div class="content-wrapper">  
    
    <div class="container-xxl flex-grow-1 container-p-y" >
                    
      <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Form Tambah Data Anak</h5>                      
                </div>
            
                <div class="card-body">
                    <form action="prosestambahdataanak.php" method="post">
                    <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="namaanak">Nama Anak</label>
                            <div class="col-xl-4">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                    ><i class="bx bx-user"></i
                                    ></span>
                                    <input type="text" class="form-control" id="namaanak" name="namaanak" required>                
                                    
                                </div>
                            </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="nikanak">NIK</label>
                        <div class="col-xl-4">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                            ><i class="bx bx-detail"></i
                            ></span>
                            <input type="text" class="form-control" id="nikanak" name="nikanak" required>                
                            
                        </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="jeniskelamin">Jenis Kelamin</label>
                            <div class="col-xl-4">
                                <select id="jeniskelamin" name="jeniskelamin" class="form-select" required>
                                    <option>-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                
                                </select>
                            
                            </div>
                    </div>

                    <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="tempatlahir">Tempat Tanggal lahir</label>
                            <div class="col-xl-4">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                    ><i class="bx bx-map"></i
                                    ></span>
                                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" required>             
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                    ><i class="bx bx-calender"></i
                                    ></span>
                                    <input type="date" value="2021-06-18" class="form-control" id="tanggallahir" name="tanggallahir" required>             
                                </div>
                            </div>
                    </div>

                    <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="dataibu">Nama Ibu</label>
                            <div class="col-xl-4">
                            <select name="idibu" id="idibu" class="form-select" required data_rel="chosen">
                                    <option>-- Pilih Nama Ibu --</option>
                                    <?php
                                        include("../koneksi.php");
                                        $qdataibu=mysqli_query($sambung,"SELECT * FROM dataibu");
                                        while ($dataibu=mysqli_fetch_array($qdataibu))
                                        {
                                            echo "<option value='$dataibu[idibu]'>$dataibu[namaibu]</option>";
                                        }
                                    
                                    ?>
                                    
                                
                                </select>
                            </div>
                    </div>

                    


                    <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="alamat">Alamat</label>
                            <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-map"></i
                                ></span>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>                
                                
                            </div>
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