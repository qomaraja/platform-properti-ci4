<?= $this->extend('visit/layout/template'); ?>
<?= $this->section('content'); ?>

<main class="main">

    <?= $this->include('visit/layout/breadcrumb'); ?>

    <section id="detail-listing" class="detail-listing section">
        <div class="container">
            <div class="align-items-xl-center">
                <div class="row g-3">
                    <div class="col-lg-4">
                        <div class="desk-listing">
                            <div class="desk-listing-main" data-aos="fade-up">
                                <div class="desk-listing-header border-bottom mb-2">
                                    <span class="desk-listing-type"><?= $prop['tipe_nm']; ?></span>
                                    <h5><?= $prop['prop_nm']; ?></h5>
                                </div>
                                <div class="desk-listing-body">
                                    <ul class="p-2">
                                        <li class="d-flex justify-content-between">
                                            <h6>Harga Minimum:</h6>
                                            <span>Rp. <?= number_format($prop['prop_hrg'], 0, ',', '.'); ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <h6>KPR mulai dari:</h6>
                                            <span>Rp. <?= number_format($prop['prop_kpr'], 0, ',', '.'); ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <h6 class="mb-0">Suku bunga:</h6>
                                            <span><?= $prop['prop_bunga']; ?>%</span>
                                        </li>
                                        <span style="font-style: italic;">*<?= $prop['prop_info_kpr']; ?></span>
                                    </ul>
                                </div>
                            </div>
                            <div class="desk-listing-maps-1" data-aos="fade-up">
                                <iframe
                                    src="https://www.google.com/maps?q=<?= $prop['prop_kd_almt']; ?>&hl=es;z=14&output=embed"
                                    frameborder="0"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    class="responsive-iframe">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="info-listing rounded overflow-hidden" data-aos="fade-up">
                            <div class="info-listing-header">
                                <div class="img-main">
                                    <img src="<?= 'visit/img/properti/' . $prop['prop_img1']; ?>" alt="">
                                </div>
                                <div class="img-other">
                                    <div class="owl-carousel img-carousel">
                                        <?php for ($i = 0; $i < 6; $i++): ?>
                                            <div class="img-item">
                                                <img src="<?= 'visit/img/properti/' . $prop["prop_img" . ($i + 1)]; ?>" alt="">
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="info-listing-body" data-aos="fade-up">
                                <h5 class="border-bottom">Informasi Properti</h5>
                                <div class="info-listing-desk mt-2">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-top">
                                                <p class="me-2">Alamat:</p>
                                                <p class="m-0"><?= $prop['prop_almt']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="social-links d-block d-lg-flex">
                                                <a href="https://twitter.com/intent/tweet?url=<?= base_url('properti/' . $prop['prop_slug']); ?>&text=Pasti+Murah!" class="mb-1" target="_blank">
                                                    <i class="bi bi-twitter"></i>
                                                </a>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(site_url('properti/' . $prop['prop_slug'])); ?>" class="mb-1" target="_blank">
                                                    <i class="bi bi-facebook"></i>
                                                </a>
                                                <a href="https://wa.me/?text=Pasti+Murah!%20<?= base_url('properti/' . $prop['prop_slug']); ?>" class="mb-1" target="_blank">
                                                    <i class="bi bi-whatsapp"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-listing-detail p-2">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-3">
                                            <small class="d-flex justify-content-center">
                                                <span class="text-primary me-2"><strong>LT</strong></span><?= $prop['prop_lt']; ?> m2
                                            </small>
                                        </div>
                                        <div class="col-3">
                                            <small class="d-flex justify-content-center">
                                                <span class="text-primary me-2"><strong>LB</strong></span><?= $prop['prop_lb']; ?> m2
                                            </small>
                                        </div>
                                        <div class="col-3">
                                            <small class="d-flex justify-content-center">
                                                <span><i class="fa fa-bed text-primary me-2"></i><?= $prop['prop_kt']; ?> KT</span>
                                            </small>
                                        </div>
                                        <div class="col-3">
                                            <small class="d-flex justify-content-center">
                                                <span><i class="fa fa-bath text-primary me-2"></i><?= $prop['prop_km']; ?> KM</span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-listing-desk mt-2">
                                    <p><?= $prop['prop_isi']; ?></p>
                                </div>
                            </div>
                            <div class="desk-listing-maps-2">
                                <iframe
                                    src="https://www.google.com/maps?q=<?= $prop['prop_kd_almt']; ?>&hl=id;z=14&output=embed"
                                    frameborder="0"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    class="responsive-iframe">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="listing" class="listing section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Properti Lainnya</h2>
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