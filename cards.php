<section id="<?= $section['id']; ?>" class="py-5 goals-section">
    <div class="container">
        <h2 class="text-center mb-4 fs-2"><?= $section['title']; ?></h2>
        <div class="row g-4">
            <?php foreach ($section['items'] as $item): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <p class="card-text fs-5 text-center"><?= $item; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
