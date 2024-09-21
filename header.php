<?php
// Render the navbar using JSON data
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?= $data['header']['brand']['link']; ?>">
            <img src="<?= $data['header']['brand']['logo']; ?>" alt="<?= $data['header']['brand']['logo_alt']; ?>" style="width: 40px; height: 40px; margin-right: 10px;"> 
            <?= $data['header']['brand']['name']; ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php foreach ($data['header']['nav_items'] as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $item['link']; ?>"><?= $item['name']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
