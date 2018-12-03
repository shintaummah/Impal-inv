
      <section class="forms">
        <div class="container-fluid">
          <div class="col-lg-12">
               <br>
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Form Input Data Inventaris</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" method="POST" action="<?php echo site_url('cinvlogistik/updateinvlogistik/'.$inventaris['idinventaris']);?>">
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Id Inventaris</label>
                      <div class="col-sm-10">
                        <input disabled="disabled" type="text" class="form-control" name="idinventaris" value="<?php echo $inventaris['idinventaris']; ?>">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nama Inventaris</label>
                      <div class="col-sm-10">
                        <input disabled="disabled" type="text" class="form-control" name="nama_inv" value="<?php echo $inventaris['nama_inv']; ?>">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Kondisi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kondisi" value="<?php echo $inventaris['kondisi']; ?>">
                            </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                          <label class="col-sm-2 form-control-label">Id Pegawai </label>
                          <div class="col-sm-10">
                              <input disabled="disabled" type="text" class="form-control" name="idpegawai" value="<?php echo $inventaris['idpegawai']; ?>">
                          </div>
                    </div>
                    	<button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
       <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
