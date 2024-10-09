<?php
// Define sections data using PHP arrays
$data = [
    'header' => [
        'brand' => [
            'name' => 'Простір талантів',
            'logo' => 'assets/logo.png',
            'logo_alt' => 'Logo',
            'link' => '#'
        ],
        'nav_items' => [
            ['name' => 'Про фестиваль', 'link' => '#about'],
            ['name' => 'Цілі та мета', 'link' => '#goals'],
            ['name' => 'Номінації', 'link' => '#nominations'],
            ['name' => 'Вікові категорії', 'link' => '#age-categories'],
            ['name' => 'Участь', 'link' => '#participation'],
            ['name' => 'Нагороди', 'link' => '#awards']
        ]
    ],
    'sections' => [
        [
            'id' => 'hero',
            'type' => 'hero',
            'title' => 'Фестиваль-Конкурс «Гармонія Мистецтва» 🎉',
            'subtitle' => 'Запрошуємо всіх бажаючих взяти участь у всеукраїнському фестивалі мистецтв, де зустрічаються таланти та творчість!',
            'button_text' => 'Взяти участь 🚀',
            'button_link' => '#participation',
            'button_style' => 'background-color: red; border-color: #FF69B4; color: white;'
        ],
        [
            'id' => 'about',
            'type' => 'about',
            'title' => 'Про фестиваль 📜',
            'content' => 'Фестиваль-Конкурс «Гармонія Мистецтва» — це публічний, відкритий суспільно корисний конкурс, який проводиться 21-23 вересня 2024 року.',
            'details' => [
                ['title' => 'Громадська подія', 'icon' => 'bi-people', 'style' => 'text-primary'],
                ['title' => 'Музика та мистецтво', 'icon' => 'bi-music-note-list', 'style' => 'text-success'],
                ['title' => 'Визнання талантів', 'icon' => 'bi-award', 'style' => 'text-warning'],
                ['title' => '21-23 вересня 2024', 'icon' => 'bi-calendar-event', 'style' => 'text-danger']
            ]
        ],
        [
            'id' => 'goals',
            'type' => 'cards',
            'title' => 'Цілі та мета фестивалю 🎯',
            'items' => [
                '🎤 Розкриття нових талантів',
                '✨ Презентація творчих досягнень обдарованих дітей та молоді.',
                '🌟 Популяризація української сучасної та народної культури.',
                '🌱 Сприяння розвитку талановитої і обдарованої молоді та дітей.',
                '🎨 Удосконалення естетичного виховання дітей і молоді.'
            ]
        ],
        [
            'id' => 'nominations',
            'type' => 'nominations',
            'title' => 'Жанрові Номінації 🎭',
            'categories' => [
                [
                    'title' => '🎶 Вокал',
                    'description' => 'Народний, естрадний, академічний, сучасний, авторська пісня, пісні народів світу, рок вокал, джазовий вокал. Хори та ансамблі.'
                ],
                [
                    'title' => '💃 Хореографія',
                    'description' => 'Народна, дитяча, класична, бальна, естрадна, сучасна, Street dance.'
                ],
                [
                    'title' => '🎻 Інструментальний жанр',
                    'description' => 'Інструментально-вокальний жанр, струно-смичкові, клавішні, духові, ударні, народні інструменти.'
                ],
                [
                    'title' => '🎭 Театральний жанр',
                    'description' => 'Художнє читання, театри мод, мюзикли, лялькові театри.'
                ],
                [
                    'title' => '📚 Музично-теоретичний напрямок',
                    'description' => 'Презентація, відео, доповідь, есе.'
                ],
                [
                    'title' => '🌾 Етнографічний напрямок',
                    'description' => 'Фольклорні традиції, святково-обрядові традиції, традиційно-побутова культура.'
                ],
                [
                    'title' => '📺 Телемистецтво',
                    'description' => 'Відео кліпи, рекламні ролики, інтерв’ю, короткометражні фільми, мультимедійні твори, репортажі.'
                ],
                [
                    'title' => '✍️ Авторська проза та поезія',
                    'description' => 'Оповідання, новела, нарис, парабола, казка, віршований твір, есе.'
                ],
                [
                    'title' => '🖌️ Декоративно-прикладне мистецтво',
                    'description' => 'Роботи, які зроблені своїми руками в будь-якій техніці.'
                ],
                [
                    'title' => '🎨 Образотворче мистецтво',
                    'description' => 'Роботи, викладені на Google Drive.'
                ],
                [
                    'title' => '📸 Фотомистецтво',
                    'description' => 'Фото робіт в різних жанрах, таких як натюрморт, документальна, пейзаж, портрет тощо.'
                ],
                [
                    'title' => '🏅 Спортивні змагання',
                    'description' => 'Учасники матимуть можливість продемонструвати свої навички у спортивних дисциплінах'
                ]
            ]
        ],
        [
            'id' => 'age-categories',
            'type' => 'age-categories',
            'title' => 'Вікові категорії 👶👦👩🧓',
            'items' => [
                '🎉 Дебют (перший раз на сцені)',
                '👶 Малюки - (3-6 років)',
                '👦 I - (7 - 9 років)',
                '👧 II - (10 - 12 років)',
                '🧒 III - (13 - 15 років)',
                '👩‍🎓 IV - (16 - 19 років)',
                '🎓 Студенти середніх та вищих навчальних закладів',
                '🏅 Професіонали',
                '🎨 Аматори старші за 20 років'
            ]
        ],
        [
            'id' => 'participation',
            'type' => 'participation',
            'title' => 'Етапи участі 📝',
            'items' => [
                '🔗 Заповнити заявку: Перейдіть на наш сайт та заповніть форму заявки: Artprostir.com.ua',
                '💳 Оплата: Сплатіть внески за участь та надішліть підтвердження оплати.',
                '📧 Підтвердження: Отримайте підтвердження від оргкомітету про отримання Вашої заявки.',
                '👍 Підписка: Підпишіться на нашу групу у Фейсбук для оновлень та оголошення результатів.'
            ]
        ],
        [
            'id' => 'awards',
            'type' => 'awards',
            'title' => 'Нагороди 🏆',
            'awards' => [
                [
                    'title' => '🏅 Звання Переможців',
                    'description' => 'Гран-Прі, Лауреати I, II і III премій.'
                ],
                [
                    'title' => '🎖 Медалі та Кубки',
                    'description' => 'Нагородження для колективів.'
                ],
                [
                    'title' => '📜 Дипломи',
                    'description' => 'Електронні та друковані дипломи за участь.'
                ],
                [
                    'title' => '🥇 Спеціальні Відзнаки',
                    'description' => 'Нагороди від журі за видатні досягнення.'
                ]
            ],
            'images' => [
                [
                    'src' => 'assets/diplom.png',
                    'alt' => 'Diploma Image'
                ]
            ]
        ]
    ]
];

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
