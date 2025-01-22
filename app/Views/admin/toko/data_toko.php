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
              <h3 class="card-title">Data toko</h3>
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
                    <th>Kategori</th>
                    <th>Platform</th>
                    <th>Judul</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  ?>
                  <?php foreach ($allToko as $aa) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $aa['toko_updated_at']; ?></td>
                      <td><?= $aa['kat_nm']; ?></td>
                      <td><?= $aa['plat_nm']; ?></td>
                      <td><?= $aa['toko_jdl']; ?></td>
                      <td><?= $aa['toko_hrg']; ?></td>
                      <td>
                        <div class="d-flex">
                          <a href="<?= 'toko/ubah-toko/' . $aa['toko_id']; ?>" class="text-warning me-2">
                            <i class="fas fa-edit"></i>
                          </a>
                          <form
                            action="<?= 'toko/' . $aa['toko_id']; ?>"
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
                    <th>Jumlah: <?= $jmlToko; ?></th>
                    <th colspan="6"></th>
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