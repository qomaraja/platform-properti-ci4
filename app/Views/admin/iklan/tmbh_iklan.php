<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

  <?= $this->include('admin/layout/breadcrumb'); ?>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Tambah Iklan</h3>
        </div>
        <form action="iklan/simpan-iklan" method="post" enctype="multipart/form-data">
          <?= csrf_field(); ?>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <label for="customFile">Gambar</label>
                <div class="form-group">
                  <div class="row">
                    <div class="col-3">
                      <div class="img-preview" id="img-preview">
                        <img src="visit/img/iklan/default.png" class="img-thumbnail preview-image" alt="Preview" />
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input file-input" id="customFile" name="iklan_img" onchange="previewImg()" />
                        <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="iklan_link">Link</label>
                  <input
                    class="form-control"
                    type="text"
                    name="iklan_link" />
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