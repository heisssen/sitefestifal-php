<section id="<?= $section['id']; ?>" class="py-5 nominations-section">
    <div class="container">
        <h2 class="text-center mb-4 fs-2"><?= $section['title']; ?></h2>
        <div class="row g-4">
            <?php foreach ($section['categories'] as $category): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body">
                            <h5 class="card-title fs-5"><?= $category['title']; ?></h5>
                            <p class="card-text"><?= $category['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
