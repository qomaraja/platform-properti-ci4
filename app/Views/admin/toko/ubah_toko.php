<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

  <?= $this->include('admin/layout/breadcrumb'); ?>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Ubah Toko</h3>
        </div>
        <form action="<?= 'toko/update-toko/' . $toko['toko_id']; ?>" method="post" enctype="multipart/form-data">
          <?= csrf_field(); ?>
          <input type="hidden" name="imgLama" value="<?= $toko['toko_img']; ?>">
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="toko_jdl">Judul</label>
                  <input
                    class="form-control"
                    type="text"
                    name="toko_jdl"
                    value="<?= $toko['toko_jdl']; ?>" />
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="kat_id">Kategori</label>
                  <select class="form-control select2bs4" name="kat_id" style="width: 100%;">
                    <option value="<?= $selectKat['kat_id']; ?>" disabled selected><?= $selectKat['kat_nm']; ?></option>
                    <?php foreach ($kat as $k): ?>
                      <option value="<?= $k['kat_id']; ?>"><?= $k['kat_nm']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="plat_id">Platform</label>
                  <select class="form-control select2bs4" name="plat_id" style="width: 100%;">
                    <option value="<?= $selectPlat['plat_id']; ?>" disabled selected><?= $selectPlat['plat_nm']; ?></option>
                    <?php foreach ($plat as $k): ?>
                      <option value="<?= $k['plat_id']; ?>"><?= $k['plat_nm']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label for="toko_link">Link</label>
                  <input
                    class="form-control"
                    type="text"
                    name="toko_link"
                    value="<?= $toko['toko_link']; ?>" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="toko_hrg">Harga</label>
                  <input
                    class="form-control"
                    type="text"
                    name="toko_hrg"
                    value="<?= $toko['toko_hrg']; ?>" />
                </div>
              </div>
              <div class="col-md-12">
                <label for="customFile">Gambar</label>
                <div class="form-group">
                  <div class="row">
                    <div class="col-3">
                      <div class="img-preview" id="img-preview">
                        <img src="<?= 'visit/img/toko/' . $toko['toko_img']; ?>" class="img-thumbnail preview-image" alt="Preview" />
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input file-input" id="customFile" name="toko_img" onchange="previewImg()" />
                        <label class="custom-file-label" for="customFile"><?= $toko['toko_img']; ?></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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

<script>
  function previewImg() {
    const logo = document.querySelector('#customFile');
    const imgPreview = document.querySelector('.preview-image');

    const fileLogo = new FileReader();
    fileLogo.readAsDataURL(logo.files[0]);

    fileLogo.onload = function(e) {
      imgPreview.src = e.target.result;
    }
  }
</script>

<?= $this->endSection(); ?>