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
                <form method="get" action="toko">
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
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button <?= isset($selectedKat) && $selectedKat ? '' : 'collapsed' ?>"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#panelsStayOpen-collapseTwo"
                          aria-expanded="<?= isset($selectedKat) && $selectedKat ? 'true' : 'false' ?>"
                          aria-controls="panelsStayOpen-collapseTwo">
                          Kategori
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse <?= isset($selectedKat) && $selectedKat ? 'show' : '' ?>">
                        <div class="accordion-body">
                          <ul class="list-group">
                            <li class="list-group-item">
                              <input class="form-check-input me-1" type="radio" id="kat0" name="kat_nm" value="semua" <?= $selectedKat === 'semua' ? 'checked' : ''; ?> onchange="this.form.submit()">
                              <label class="form-check-label" for="kat0">Semua</label>
                            </li>
                            <?php $i = 1;
                            foreach ($allKat as $k): ?>
                              <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" id="kat<?= $i; ?>" name="kat_nm" value="<?= $k['kat_id']; ?>" <?= $selectedKat === $k['kat_id'] ? 'checked' : ''; ?> onchange="this.form.submit()">
                                <label class="form-check-label" for="kat<?= $i; ?>"><?= $k['kat_nm']; ?></label>
                              </li>
                            <?php $i++;
                            endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button <?= isset($selectedPlat) && $selectedPlat ? '' : 'collapsed' ?>"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#panelsStayOpen-collapseThree"
                          aria-expanded="<?= isset($selectedPlat) && $selectedPlat ? 'true' : 'false' ?>"
                          aria-controls="panelsStayOpen-collapseThree">
                          Platform
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse <?= isset($selectedPlat) && $selectedPlat ? 'show' : '' ?>">
                        <div class="accordion-body">
                          <ul class="list-group">
                            <li class="list-group-item">
                              <input class="form-check-input me-1" type="radio" id="plat0" name="plat_nm" value="semua" <?= $selectedPlat === 'semua' ? 'checked' : ''; ?> onchange="this.form.submit()">
                              <label class="form-check-label" for="plat0">Semua</label>
                            </li>
                            <?php $i = 1;
                            foreach ($allPlat as $k): ?>
                              <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" id="plat<?= $i; ?>" name="plat_nm" value="<?= $k['plat_id']; ?>" <?= $selectedPlat === $k['plat_id'] ? 'checked' : ''; ?> onchange="this.form.submit()">
                                <label class="form-check-label" for="plat<?= $i; ?>"><?= $k['plat_nm']; ?></label>
                              </li>
                            <?php $i++;
                            endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <a href="toko" class="btn btn-primary btn-sm w-100">Reset filter</a>
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
                <form class="d-flex w-100" method="get" action="toko">
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
              <?php if (empty($allToko)): ?>
                <div class="col-12" data-aos="fade-up">
                  <div class="alert alert-primary text-center" role="alert" style="font-size: 12px;">
                    <strong>Pencarian tidak ditemukan</strong> - Tidak ada barang atau kode yang cocok dengan kata kunci yang Anda cari.
                  </div>
                </div>
              <?php else: ?>
                <?php foreach ($allToko as $a): ?>
                  <div class="col-lg-4 col-6">
                    <div class="blog-item card" data-aos="fade-up">
                      <div class="card-header">
                        <a href="<?= $a['toko_link']; ?>" target="_blank">
                          <img class="img-fluid" src="<?= 'visit/img/toko/' . $a['toko_img']; ?>" alt="">
                        </a>
                        <div class="card-type"><?= $a['kat_nm']; ?></div>
                      </div>
                      <div class="card-body">
                        <div class="card-plat text-primary mb-1"><?= $a['plat_nm']; ?></div>
                        <a href="<?= $a['toko_link']; ?>" class="m-0" target="_blank"><?= $a['toko_jdl']; ?></a>
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
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <?= $pager->links('data_toko', 'prop_pagination') ?>
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