<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

  <?= $this->include('admin/layout/breadcrumb'); ?>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-primary">
              <h3 class="card-title">Data Properti</h3>
            </div>
            <div class="card-body">
              <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert <?= esc(session()->getFlashdata('warna')); ?>" role="alert">
                  <?= session()->getFlashdata('pesan'); ?>
                </div>
              <?php endif; ?>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Tipe</th>
                    <th>Nama</th>
                    <th>LB</th>
                    <th>LT</th>
                    <th>KT</th>
                    <th>KM</th>
                    <th>Alamat</th>
                    <th>Harga</th>
                    <th>KPR</th>
                    <th>Bunga</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  ?>
                  <?php foreach ($allProp as $ap) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $ap['prop_updated_at']; ?></td>
                      <td><?= $ap['tipe_nm']; ?></td>
                      <td><?= $ap['prop_nm']; ?></td>
                      <td><?= $ap['prop_lb']; ?></td>
                      <td><?= $ap['prop_lt']; ?></td>
                      <td><?= $ap['prop_kt']; ?></td>
                      <td><?= $ap['prop_km']; ?></td>
                      <td><?= $ap['prop_almt']; ?></td>
                      <td><?= $ap['prop_hrg']; ?></td>
                      <td><?= $ap['prop_kpr']; ?></td>
                      <td><?= $ap['prop_bunga']; ?></td>
                      <td>
                        <div class="d-flex">
                          <a href="<?= 'properti/ubah-properti/' . $ap['prop_id']; ?>" class="text-warning me-2">
                            <i class="fas fa-edit"></i>
                          </a>
                          <form
                            action="<?= 'properti/' . $ap['prop_id']; ?>"
                            method="post"
                            class="d-inline"
                            onsubmit="return confirmDelete(this);">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn-delete">
                              <i class="fas fa-trash text-danger"></i>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Jumlah: <?= $jmlProp; ?></th>
                    <th colspan="12"></th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>