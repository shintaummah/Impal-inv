
      <section class="forms">
        <div class="container-fluid">
          <div class="col-lg-12">
               <br>
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Form Input Data Inventaris</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="<?php echo site_url('casset/addProses');?>">
                  <form class="form-horizontal" method="POST" action="<?php echo site_url('casset/addProses');?>">
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Id Asset</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="idasset" placeholder="Enter Id Asset">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nama Asset</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama" placeholder="Enter Nama Asset">
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
