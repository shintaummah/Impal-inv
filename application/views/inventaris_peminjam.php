<!-- Page Header-->

<section>
  <div class="container-fluid"><header>
 <div class="card-header d-flex align-items-center">
        <h4>Inventaris</h4>
      </div>
</header>
<div class="row">
  <div class="col-lg-10">
    <div class="card">
      <div class="card-header">
        <h4>Tabel Inventaris</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <p><?php echo $this->session->flashdata('msg'); ?></p>
          <table class="table">
            <thead>
              <tr>
                <th>ID Inventaris</th>
                <th>Nama Inventaris</th>
                <th>Kondisi</th>
                <th>ID Pegawai</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($inventaris as $key => $value) { ?>
              <tr>
                <td><?php echo $value['idinventaris'];?></td>
                <td><?php echo $value['nama_inv'];?></td>
                <td><?php echo $value['kondisi'];?></td>
                <td><?php echo $value['idpegawai'];?></td>
              </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
