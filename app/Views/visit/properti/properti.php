<?= $this->extend('visit/layout/template'); ?>
<?= $this->section('content'); ?>

<main class="main">

  <?= $this->include('visit/layout/breadcrumb'); ?>

  <section id="listing" class="listing section">
    <div class="container">
      <div class="align-items-xl-center">
        <div class="row">
          <div class="col-lg-3" data-aos="fade-up">
            <div id="filterSection" class="filter-section">
              <div class="filter mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <h5 class="p-3 m-0">Filter</h5>
                  <button class="btn btn-primary d-lg-none" onclick="document.getElementById('filterSection').classList.remove('show')">
                    <i class="bi bi-x-lg"></i>
                  </button>
                </div>
                <form method="get" action="properti">
                  <div class="accordion" id="accordionPanelsStayOpenExample">

                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button <?= isset($selectedOrder) && $selectedOrder ? '' : 'collapsed' ?>"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#panelsStayOpen-collapseOne"
                          aria-expanded="<?= isset($selectedOrder) && $selectedOrder ? 'true' : 'false' ?>"
                          aria-controls="panelsStayOpen-collapseOne">
                          Urutkan
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse <?= isset($selectedOrder) && $selectedOrder ? 'show' : '' ?>">
                        <div class="accordion-body">
                          <ul class="list-group">
                            <li class="list-group-item">
                              <input class="form-check-input me-1" type="radio" id="urut1" name="order" value="terbaru" <?= $selectedOrder === 'terbaru' ? 'checked' : ''; ?> onchange="this.form.submit()">
                              <label class="form-check-label" for="urut1">Terbaru</label>
                            </li>
                            <li class="list-group-item">
                              <input class="form-check-input me-1" type="radio" id="urut2" name="order" value="terlama" <?= $selectedOrder === 'terlama' ? 'checked' : ''; ?> onchange="this.form.submit()">
                              <label class="form-check-label" for="urut2">Terlama</label>
                            </li>
                            <li class="list-group-item">
                              <input class="form-check-input me-1" type="radio" id="urut3" name="order" value="termurah" <?= $selectedOrder === 'termurah' ? 'checked' : ''; ?> onchange="this.form.submit()">
                              <label class="form-check-label" for="urut3">Termurah</label>
                            </li>
                            <li class="list-group-item">
                              <input class="form-check-input me-1" type="radio" id="urut4" name="order" value="termahal" <?= $selectedOrder === 'termahal' ? 'checked' : ''; ?> onchange="this.form.submit()">
                              <label class="form-check-label" for="urut4">Termahal</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button <?= isset($selectedTipe) && $selectedTipe ? '' : 'collapsed' ?>"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#panelsStayOpen-collapseThree"
                          aria-expanded="<?= isset($selectedTipe) && $selectedTipe ? 'true' : 'false' ?>"
                          aria-controls="panelsStayOpen-collapseThree">
                          Tipe
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse <?= isset($selectedTipe) && $selectedTipe ? 'show' : '' ?>">
                        <div class="accordion-body">
                          <ul class="list-group">
                            <li class="list-group-item">
                              <input class="form-check-input me-1" type="radio" id="tipe0" name="tipe_nm" value="semua" <?= $selectedTipe === 'semua' ? 'checked' : ''; ?> onchange="this.form.submit()">
                              <label class="form-check-label" for="tipe0">Semua</label>
                            </li>
                            <?php $i = 1;
                            foreach ($allTipe as $t): ?>
                              <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" id="tipe<?= $i; ?>" name="tipe_nm" value="<?= $t['tipe_id']; ?>" <?= $selectedTipe === $t['tipe_id'] ? 'checked' : ''; ?> onchange="this.form.submit()">
                                <label class="form-check-label" for="tipe<?= $i; ?>"><?= $t['tipe_nm']; ?></label>
                              </li>
                            <?php $i++;
                            endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                          Harga
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <div class="m-2">
                            <div class="input-group mb-2">
                              <input
                                class="form-control"
                                name="min_harga"
                                type="text"
                                id="prop_hrg"
                                placeholder="<?= isset($minHarga) && $minHarga !== '' ? 'Rp. ' . number_format($minHarga, 0, ',', '.') : 'Minimum'; ?>"
                                value="<?= old('min_harga') ? old('min_harga') : (isset($budget) ? number_format($budget, 0, ',', '.') : '') ?>"
                                oninput="formatRupiah(this)">
                            </div>
                            <div class="input-group mt-2">
                              <input
                                class="form-control"
                                name="max_harga"
                                type="text"
                                id="prop_hrg"
                                placeholder="<?= isset($maxHarga) && $maxHarga !== '' ? 'Rp. ' . number_format($maxHarga, 0, ',', '.') : 'Maksimum'; ?>"
                                value="<?= old('max_harga') ? old('max_harga') : (isset($budget) ? number_format($budget, 0, ',', '.') : '') ?>"
                                oninput="formatRupiah(this)">
                            </div>
                            <button class="btn btn-primary btn-sm w-100 mt-2" onchange="this.form.submit()">Cari</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                          Luas Tanah
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body p-2">
                          <div class="input-group mb-2">
                            <input class="form-control" type="number" name="min_luas" placeholder="<?= isset($minLuas) && $minLuas !== '' ? $minLuas : 'Minimum'; ?>" value="<?= $minLuas ?? ''; ?>">
                            <span class="input-group-text">m²</span>
                          </div>
                          <div class="input-group mt-2">
                            <input class="form-control" type="number" name="max_luas" placeholder="<?= isset($maxLuas) && $maxLuas !== '' ? $maxLuas : 'Maksimum'; ?>" value="<?= $maxLuas ?? ''; ?>">
                            <span class="input-group-text">m²</span>
                          </div>
                          <button class="btn btn-primary btn-sm w-100 mt-2" onchange="this.form.submit()">Cari</button>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <a href="properti" class="btn btn-primary btn-sm w-100">Reset filter</a>
                      </h2>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-9">

            <div class="floating-filter-btn d-lg-none mb-2" data-aos="fade-up">
              <button style="font-size: 12px;" class="btn btn-primary w-100" onclick="document.getElementById('filterSection').classList.toggle('show')">
                <i class="bi bi-funnel"></i> Filter
              </button>
            </div>

            <div class="search-listing">
              <nav class="navbar mb-2" data-aos="fade-up">
                <form class="d-flex w-100" method="get" action="properti">
                  <div class="input-group">
                    <input
                      class="form-control"
                      type="search"
                      name="keyword"
                      placeholder="<?= isset($keyword) && $keyword ? $keyword : 'Cari...'; ?>"
                      value="<?= $keyword ?? ''; ?>"
                      aria-label="Search"
                      autofocus>
                    <button type="submit" class="btn btn-primary">
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

<script>
  function formatRupiah(element) {
    let value = element.value.replace(/[^,\d]/g, '');
    let formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    element.value = 'Rp. ' + formattedValue;
  }

  document.querySelector('form').addEventListener('submit', function(e) {
    let min_hrg_input = document.getElementById('min_harga');
    min_hrg_input.value = min_hrg_input.value.replace(/[^0-9]/g, '');
  });

  document.querySelector('form').addEventListener('submit', function(e) {
    let max_hrg_input = document.getElementById('max_harga');
    max_hrg_input.value = max_hrg_input.value.replace(/[^0-9]/g, '');
  });
</script>

<?= $this->endSection(); ?>