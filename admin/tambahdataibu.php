<div class="content-wrapper">  
    
    <div class="container-xxl flex-grow-1 container-p-y" >
                    
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Form Tambah Data Ibu</h5>                      
          </div>
          
          <div class="card-body">
            <form action="prosestambahdataibu.php" method="post">
              <div class="row mb-3">
                <label class="col-sm-2 form-label" for="namaibu">Nama Ibu</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-user"></i
                    ></span>
                    <input type="text" class="form-control" id="namaibu" name="namaibu" required>                
                      
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 form-label" for="nikibu">NIK</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-detail"></i
                    ></span>
                    <input type="text" class="form-control" id="nikibu" name="nikibu" required>                
                      
                  </div>
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

              <div class="row mb-3">
                <label class="col-sm-2 form-label" for="notelephone">No Telephone</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-phone"></i
                    ></span>
                    <input type="text" class="form-control" id="notelephone" name="notelephone" required>                
                      
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