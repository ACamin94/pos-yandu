<?php
    include('../koneksi.php');//panggil file koneksi
    $idpengguna=mysqli_real_escape_string($sambung,$_GET['idpengguna']);//ambil idpengguna dari link edit

    //pnggil data berdasarkan idpengguna yang dikirim
    $qdata=mysqli_query($sambung,"SELECT * FROM pengguna WHERE idpengguna='$idpengguna'");
    $data=mysqli_fetch_array($qdata);
?>

<div class="content-wrapper">     
  <div class="container-xxl flex-grow-1 container-p-y" >                    
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Form Edit Data User</h5>                      
        </div>

        <div class="card-body">
          <form action="proseseditpengguna.php" method="post">
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="namapengguna">Nama Pengguna </label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"
                    ><i class="bx bx-user"></i
                  ></span>
                  <input value="<?php echo $data["namapengguna"];?>" type="text" class="form-control" id="namapengguna" name="namapengguna" required>                
                    
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="jabatan">Jabatan</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text"
                    ><i class="bx bx-buildings"></i
                  ></span>
                  <input value="<?php echo $data["jabatan"];?>" type="text" class="form-control" id="jabatan" name="jabatan" required>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="alamat">Alamat</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text"
                    ><i class="bx bx-map"></i
                  ></span>
                  <input value="<?php echo $data["alamat"];?>" type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="notelephone">No Telephone</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text"
                    ><i class="bx bx-phone"></i
                  ></span>
                  <input value="<?php echo $data["notelephone"];?>" type="text" class="form-control" id="notelephone" name="notelephone" required>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="hakakses">Hak Akses</label>
              <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                        <select type="text" class="form-control" id="hakakses" name="hakakses" required>
                            <?php
                              if ($data['hakakses'])
                              {
                                  echo"<option value='$data[hakakses]' selected>$data[hakakses]</option>";
                              }
                            ?>
                            <option>-- Pilih Hak Akses --</option>
                            <option value="Pimpinan">Pimpinan</option>
                            <option value="Admin">Admin</option>                                        
                        </select>
                    
                    </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="username">User Name</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-user"></i></span>
                  <input value="<?php echo $data["username"];?>" type="text" class="form-control" id="username" name="username" required>
                  
                </div>
                
              </div>
            </div>
            <div class="row mb-3">
              <label  class="col-sm-2 form-label" for="password">Password</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-phone2" class="input-group-text"
                    ><i class="bx bx-key"></i
                  ></span>
                  <input type="text" class="form-control" id="password" name="password" required>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="status">Status</label>
              <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                        <select type="text" class="form-control" id="status" name="status" required>
                            <?php
                                if ($data['status'])
                                {
                                    echo"<option value='$data[status]' selected>$data[status]</option>";
                                }

                            ?>
                            <option>-- Pilih Status --</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>                                    
                        </select>
                    
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