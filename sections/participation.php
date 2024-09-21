<section id="<?= $section['id']; ?>" class="py-5 participation-substrate">
    <div class="container">
        <h2 class="text-center mb-4 fs-2"><?= $section['title']; ?></h2>
        <div class="row g-4">
            <?php foreach ($section['items'] as $item): ?>
                <div class="col-md-6 col-lg-6">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <p class="fs-6"><?= $item; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
