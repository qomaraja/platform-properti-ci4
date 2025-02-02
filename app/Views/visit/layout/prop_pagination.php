<div class="pagination-item" data-aos="fade-up">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mb-0">
            <?php foreach ($pager->links() as $link): ?>
                <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                    <a class="page-link" href="<?= $link['uri'] ?>">
                        <?= $link['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
</div>