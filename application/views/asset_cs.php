<!-- Page Header-->
<header>
 <div class="card-header d-flex align-items-center">
        <h4>Inventaris</h4>
      </div>
</header>
<div class="row">
  <div class="col-lg-10">
    <div class="card">
      <div class="card-header">
        <h4>Tabel Inventaris Barang</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <p><?php echo $this->session->flashdata('msg'); ?></p>
          <table class="table">
            <thead>
              <tr>
                <th>ID Asset</th>
                <th>Nama</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($tb_asset as $key => $value) { ?>
              <tr>
                <td><?php echo $value['idasset'];?></td>
                <td><?php echo $value['nama'];?></td>
                <td>
                    <a class="btn btn-md btn-warning fas fa-edit" href="<?php echo site_url('cbrg/edit/'.$value['idbarang']);?>"></a>
                    <a class="btn btn-md btn-danger fas fa-trash-alt" href="<?php echo site_url('cbrg/delete/'.$value['idbarang']);?>" onclick="return confirm('Are you sure?')"></a>
                </td>
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
