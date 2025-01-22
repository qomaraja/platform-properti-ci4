<?= $this->extend('visit/layout/template'); ?>
<?= $this->section('content'); ?>

<main class="main">

  <?= $this->include('visit/layout/breadcrumb'); ?>

  <section id="listing" class="listing section">
    <div class="container">
      <div class="align-items-xl-center">
        <div class="row">
          <div class="col-lg-3" data-aos="fade-up">
            <div class="filter mb-3 p-3 ">
              <h5>Filter</h5>
              <a href="properti" class="btn btn-primary btn-sm w-100">Semua properti</a>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="search-listing">
              <nav class="navbar mb-2" data-aos="fade-up">
                <form class="d-flex w-100" role="search">
                  <div class="input-group">
                    <input class="form-control" type="search" placeholder="Cari lokasi..." aria-label="Search" disabled>
                    <button type="submit" class="btn btn-primary" disabled>
                      <i class="bi bi-search"></i>
                    </button>
                  </div>
                </form>
              </nav>
            </div>
            <div class="row g-2">
              <?php if (empty($allProp)): ?>
                <div class="col-12" data-aos="fade-up">
                  <div class="alert alert-primary text-center" role="alert" style="font-size: 12px;">
                    <strong>Pencarian tidak ditemukan</strong> - Tidak ada properti yang cocok dengan kata kunci yang Anda cari.
                  </div>
                  <a href="properti" class="btn btn-primary btn-sm w-100">Properti Lainnya</a>
                </div>
              <?php else: ?>
                <?php foreach ($allProp as $p): ?>
                  <div class="col-lg-4 col-6">
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
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <?= $pager->links('data_prop', 'prop_pagination') ?>
          </div>
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

<?= $this->endSection(); ?>