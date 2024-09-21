<?php
// Load JSON data from sections.json file
$json = file_get_contents('sections.json');
$data = json_decode($json, true);

// Begin HTML output
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гармонія Мистецтва - Фестиваль-Конкурс</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Navbar -->
<?php include 'header.php'; ?>

<!-- Dynamic Sections -->
<?php
foreach ($data['sections'] as $section) {
    include "sections/{$section['type']}.php";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>
