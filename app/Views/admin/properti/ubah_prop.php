<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

  <?= $this->include('admin/layout/breadcrumb'); ?>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Ubah Properti</h3>
        </div>
        <form action="<?= 'properti/update-properti/' . $prop['prop_id']; ?>" method="post" enctype="multipart/form-data">
          <?= csrf_field(); ?>
          <?php for ($i = 1; $i <= 6; $i++): ?>
            <input type="hidden" name="imgLama<?= $i ?>" value="<?= $prop["prop_img{$i}"]; ?>">
          <?php endfor; ?>
          <div class="card-body">
            <div class="row">
              <div class="col-md-9">
                <div class="form-group">
                  <label for="prop_nm">Nama</label>
                  <input
                    class="form-control"
                    type="text"
                    name="prop_nm"
                    value="<?= $prop['prop_nm']; ?>" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="tipe_id">Tipe</label>
                  <select class="form-control select2bs4" name="tipe_id" style="width: 100%;">
                    <option value="<?= $selectTipe['tipe_id']; ?>" disabled selected><?= $selectTipe['tipe_nm']; ?></option>
                    <?php foreach ($tipe as $t): ?>
                      <option value="<?= $t['tipe_id']; ?>"><?= $t['tipe_nm']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <label for="prop_lb">LB</label>
                  <input class="form-control" type="number" name="prop_lb" value="<?= $prop['prop_lb']; ?>" />
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <label for="prop_lt">LT</label>
                  <input class="form-control" type="number" name="prop_lt" value="<?= $prop['prop_lt']; ?>" />
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <label for="prop_kt">KT</label>
                  <input class="form-control" type="number" name="prop_kt" value="<?= $prop['prop_kt']; ?>" />
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <label for="prop_km">KM</label>
                  <input class="form-control" type="number" name="prop_km" value="<?= $prop['prop_km']; ?>" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="prop_almt"><?= $prop['prop_almt']; ?></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="form-group">
                    <label>Koordinat</label>
                    <textarea class="form-control" name="prop_kd_almt"><?= $prop['prop_kd_almt']; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="prop_isi">Deskripsi</label>
                  <textarea id="summernote" name="prop_isi"><?= $prop['prop_isi']; ?></textarea>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="prop_hrg">Harga</label>
                  <input class="form-control" type="number" name="prop_hrg" value="<?= $prop['prop_hrg']; ?>" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="prop_kpr">KPR</label>
                  <input class="form-control" type="number" name="prop_kpr" value="<?= $prop['prop_kpr']; ?>" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="prop_bunga">Bunga</label>
                  <input class="form-control" type="number" name="prop_bunga" value="<?= $prop['prop_bunga']; ?>" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="prop_info_kpr">Info KPR</label>
                  <input class="form-control" type="text" name="prop_info_kpr" value="<?= $prop['prop_info_kpr']; ?>" />
                </div>
              </div>
              <div class="col-md-12">
                <label for="customFile">Gambar</label>
                <div class="form-group">
                  <div class="row">
                    <?php for ($i = 0; $i < 6; $i++): ?>
                      <div class="col-3">
                        <div class="img-preview" id="img-preview<?= $i ?>">
                          <img src="<?= 'visit/img/properti/' . $prop["prop_img" . ($i + 1)]; ?>" class="img-thumbnail preview-image" alt="Preview" />
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input file-input" id="customFile<?= $i ?>" name="prop_img<?= $i + 1 ?>" />
                          <label class="custom-file-label" for="customFile<?= $i ?>"><?= $prop["prop_img" . ($i + 1)]; ?></label>
                        </div>
                      </div>
                    <?php endfor; ?>
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
  function previewImage(input, previewId) {
    const files = input.files;
    const previewContainer = document.getElementById(previewId);

    previewContainer.innerHTML = '';

    Array.from(files).forEach(file => {
      const reader = new FileReader();

      reader.onload = function(e) {
        const imgElement = document.createElement('img');
        imgElement.src = e.target.result;
        imgElement.classList.add('img-thumbnail');
        previewContainer.appendChild(imgElement);
      };

      reader.readAsDataURL(file);
    });
  }

  document.querySelectorAll('.file-input').forEach((input, index) => {
    input.addEventListener('change', function() {
      previewImage(input, 'img-preview' + index);
    });
  });
</script>

<?= $this->endSection(); ?>