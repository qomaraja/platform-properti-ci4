<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

  <?= $this->include('admin/layout/breadcrumb'); ?>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Ubah Platform</h3>
        </div>
        <form action="<?= 'platform/update-platform/' . $platform['plat_id']; ?>" method="post">
          <?= csrf_field(); ?>
          <div class="card-body">
            <div class="form-group">
              <label for="plat_nm">Nama</label>
              <input
                class="form-control"
                type="text"
                name="plat_nm"
                value="<?= $platform['plat_nm']; ?>" />
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary w-100">
              Simpan
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>