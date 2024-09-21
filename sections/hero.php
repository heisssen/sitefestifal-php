<section class="hero-section text-center text-white d-flex align-items-center" style="height: 80vh; background: linear-gradient(135deg, #FFDEE9 0%, #B5FFFC 100%);">
    <div class="container">
        <h1 class="display-2 fw-bold text-dark"><?= $section['title']; ?></h1>
        <p class="lead mt-4 fs-3 text-dark"><?= $section['subtitle']; ?></p>
        <a href="<?= $section['button_link']; ?>" class="btn btn-outline-light btn-lg mt-4 px-5 py-3 rounded-pill" style="<?= $section['button_style']; ?>">
            <?= $section['button_text']; ?>
        </a>
    </div>
</section>
