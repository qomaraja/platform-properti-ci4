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
              <h3 class="card-title">Data Platform</h3>
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
                    <th>Platform</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  ?>
                  <?php foreach ($allPlat as $ap) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $ap['updated_at']; ?></td>
                      <td><?= $ap['plat_nm']; ?></td>
                      <td>
                        <div class="d-flex">
                          <a href="<?= 'platform/ubah-platform/' . $ap['plat_id']; ?>" class="text-warning me-2">
                            <i class="fas fa-edit"></i>
                          </a>
                          <form
                            action="<?= 'platform/' . $ap['plat_id']; ?>"
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
                    <th>Jumlah: <?= $jmlPlat; ?></th>
                    <th colspan="3"></th>
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