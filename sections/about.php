<section id="about" class="py-5 about-section" style="background: linear-gradient(135deg, #f8f9fa 50%, #e3f2fd 50%);">
    <div class="container">
        <h2 class="text-center mb-4 fs-2"><?= $section['title']; ?></h2>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="pe-lg-5">
                    <p class="fs-4 mb-4"><?= $section['content']; ?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-wrap justify-content-around text-center">
                    <?php foreach ($section['details'] as $detail): ?>
                        <div class="p-3">
                            <i class="bi <?= $detail['icon']; ?> fs-1 <?= $detail['style']; ?>"></i>
                            <p class="mt-2 fs-5 fw-bold"><?= $detail['title']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
