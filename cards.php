<section id="<?= $section['id']; ?>" class="py-5 section-cards">
    <div class="container">
        <h2 class="text-center mb-4 fs-2"><?= htmlspecialchars($section['title']); ?></h2>
        <div class="flex-container"> <!-- Flexbox container -->
            <?php foreach ($section['items'] as $item): ?>
                <div class="flex-item">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <p class="card-text fs-5 text-center"><?= htmlspecialchars($item); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
