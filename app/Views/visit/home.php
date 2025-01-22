<?= $this->extend('visit/layout/template'); ?>
<?= $this->section('content'); ?>

<main class="main">
  <section id="hero" class="hero dark-background">
    <img src="visit/img/hero.jpg" alt="" />
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h2 data-aos="fade-up">Raih Rumah <span class="text-primary">Idaman, </span>Ciptakan <span class="text-primary">Kebahagiaan </span>Keluarga!</h2>
          <p data-aos="fade-up">"Temukan rumah idaman untuk keluarga Anda, tempat kenyamanan dan kebahagiaan bersatu, menciptakan momen tak terlupakan dan kehidupan yang hangat."</p>
        </div>
        <div class="col-lg-8" data-aos="fade-up">
          <div class="search-form shadow">
            <h3>Cari Rumah atau Properti Impianmu...</h3>
            <form action="properti/search" method="get">
              <?= csrf_field(); ?>
              <div class="row g-2 search-form-item text-dark">
                <div class="col-md-4">
                  <label for="prop_almt">Lokasi:</label>
                  <input type="text" class="form-control" placeholder="cth. jakarta" name="prop_almt" autofocus />
                </div>
                <div class="col-md-3">
                  <label for="tipe_id">Tipe:</label>
                  <select class="form-select" name="tipe_id">
                    <option value="" disabled selected>Pilih Kategori</option>
                    <?php foreach ($allTipe as $t): ?>
                      <option value="<?= $t['tipe_id']; ?>"><?= $t['tipe_nm']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="prop_hrg">Budget:</label>
                  <input
                    type="text"
                    id="prop_hrg"
                    class="form-control"
                    placeholder="Rp."
                    name="prop_hrg"
                    value="<?= old('prop_hrg') ? old('prop_hrg') : (isset($budget) ? number_format($budget, 0, ',', '.') : '') ?>"
                    oninput="formatRupiah(this)" />
                </div>
                <div class="col-md-2">
                  <button class="btn btn-primary w-100 h-100"><i class="bi bi-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="listing" class="listing section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Properti</h2>
    </div>
    <div class="container">
      <div class="align-items-xl-center">
        <div class="owl-carousel global-carousel" data-aos="fade-up">
          <?php foreach ($allProp as $p): ?>
            <div class="listing-item card" data-aos="fade-up">
              <div class="card-header">
                <a href="<?= 'properti/' . $p['prop_slug']; ?>">
                  <img class="img-fluid" src="<?= 'visit/img/properti/' . $p['prop_img1']; ?>" alt="">
                </a>
                <div class="card-type"><?= $p['tipe_nm']; ?></div>
              </div>
              <div class="card-body">
                <h5>Rp <?= number_format($p['prop_hrg'], 0, ',', '.'); ?></h5>
                <a href="<?= 'properti/' . $p['prop_slug']; ?>"><?= $p['prop_nm']; ?></a>
                <p class="card-almt"><i class="fa fa-map-marker-alt me-2"></i><?= $p['prop_almt']; ?></p>
              </div>
              <div class="card-footer d-flex">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i><?= $p['prop_lt']; ?> m2</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i><?= $p['prop_kt']; ?> KT</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i><?= $p['prop_km']; ?> KM</small>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="btn-lain d-flex justify-content-end" data-aos="fade-up">
          <a href="properti" class="btn btn-primary mt-3">lainnya</a>
        </div>
      </div>
    </div>
  </section>

  <section id="iklan" class="iklan section light-background">
    <div class="container" data-aos="fade-up">
      <?php
      $randomIklan = $allIklan[array_rand($allIklan)];
      ?>
      <div class="iklan-box">
        <div class="iklan-img">
          <a href="<?= $randomIklan['iklan_link']; ?>">
            <img src="<?= 'visit/img/iklan/' . $randomIklan['iklan_img']; ?>" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="blog" class="blog section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Toko</h2>
    </div>
    <div class="container">
      <div class="align-items-xl-center">
        <div class="owl-carousel global-carousel" data-aos="fade-up">
          <?php foreach ($allToko as $a): ?>
            <div class="blog-item card" data-aos="fade-up">
              <div class="card-header">
                <a href="<?= $a['toko_link']; ?>" target="_blank">
                  <img class="img-fluid" src="<?= 'visit/img/toko/' . $a['toko_img']; ?>" alt="">
                </a>
                <div class="card-type"><?= $a['kat_nm']; ?></div>
              </div>
              <div class="card-body">
                <div class="card-plat text-primary mb-1"><?= $a['plat_nm']; ?></div>
                <a href="<?= $a['toko_link']; ?>" target="_blank"><?= $a['toko_jdl']; ?></a>
              </div>
              <div class="card-footer d-flex">
                <div class="card-hrg text-primary">
                  Rp
                  <strong>
                    <?= number_format($a['toko_hrg'], 0, ',', '.'); ?>
                  </strong>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="btn-lain d-flex justify-content-end" data-aos="fade-up">
          <a href="toko" class="btn btn-primary mt-3">lainnya</a>
        </div>
      </div>
    </div>
  </section>

  <section id="iklan" class="iklan section light-background">
    <div class="container" data-aos="fade-up">
      <?php
      $randomIklan = $allIklan[array_rand($allIklan)];
      ?>
      <div class="iklan-box">
        <div class="iklan-img">
          <a href="<?= $randomIklan['iklan_link']; ?>">
            <img src="<?= 'visit/img/iklan/' . $randomIklan['iklan_img']; ?>" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  function formatRupiah(element) {
    let value = element.value.replace(/[^,\d]/g, '');
    let formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    element.value = 'Rp. ' + formattedValue;
  }

  document.querySelector('form').addEventListener('submit', function(e) {
    let prop_hrg_input = document.getElementById('prop_hrg');
    prop_hrg_input.value = prop_hrg_input.value.replace(/[^0-9]/g, '');
  });
</script>

<?= $this->endSection(); ?>