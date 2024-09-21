<section id="<?= $section['id']; ?>" class="py-5 awards-substrate">
    <div class="container">
        <h2 class="text-center mb-4 fs-2"><?= $section['title']; ?></h2>
        <div class="row g-4">
            <?php foreach ($section['awards'] as $award): ?>
                <div class="col-md-6">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <h4 class="fs-5"><?= $award['title']; ?></h4>
                            <p class="fs-6"><?= $award['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Image Section -->
        <div class="row mt-5 text-center">
            <?php foreach ($section['images'] as $image): ?>
                <div class="col-md-6">
                    <img src="<?= $image['src']; ?>" alt="<?= $image['alt']; ?>" class="img-fluid rounded shadow-lg mb-3">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
