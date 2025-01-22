<div class="page-title" data-aos="fade-down">
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <?php foreach ($breadcrumbs as $index => $breadcrumb): ?>
                    <?php if ($breadcrumb['url']): ?>
                        <li>
                            <a href="<?= $breadcrumb['url']; ?>"><?= $breadcrumb['label']; ?></a>
                        </li>
                    <?php else: ?>
                        <li class="current"><?= $breadcrumb['label']; ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ol>
        </div>
    </nav>
</div>