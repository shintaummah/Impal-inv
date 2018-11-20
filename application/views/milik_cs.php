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
                <th>ID Inventaris</th>
                <th>ID Milik</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($tb_milik as $key => $value) { ?>
              <tr>
                <td><?php echo $value['idinventaris'];?></td>
                <td><?php echo $value['idmilik'];?></td>
                <td>
                    <a class="btn btn-md btn-warning fas fa-edit" href="<?php echo site_url('cmilik/edit/'.$value['idinventaris']);?>"></a>
                    <a class="btn btn-md btn-danger fas fa-trash-alt" href="<?php echo site_url('cmilik/delete/'.$value['idinventaris']);?>" onclick="return confirm('Are you sure?')"></a>
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
