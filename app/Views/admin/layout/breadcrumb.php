<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $title; ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <?php foreach ($breadcrumbs as $index => $breadcrumb): ?>
                        <?php if ($breadcrumb['url']): ?>
                            <li class="breadcrumb-item">
                                <a href="<?= $breadcrumb['url']; ?>"><?= $breadcrumb['label']; ?></a>
                            </li>
                        <?php else: ?>
                            <li class="breadcrumb-item active"><?= $breadcrumb['label']; ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>
</div>