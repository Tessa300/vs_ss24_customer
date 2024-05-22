<!DOCTYPE html>

<html>
<head>
    <title><?= (isset($title)) ? $title : "Blizzard" ?></title>
    <meta name="description" content="<?= (isset($description)) ? $description : "Das tolle Restaurant Blizzard in der Fußgängerzone" ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>favicon_io/favicon-16x16.png">

    <!-- my styles -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/stylesheet.css">

</head>
<body>
    <header>
        <img src="<?= base_url() ?>pictures/Flamme.png">
        <p>Blizzard</p>
    </header>
    <nav>
        <ul>
            <li><a href="<?= site_url('menu/') ?>">Menü</a></li>
            <li><a href="<?= site_url('menu/getContact') ?>">Kontakt</a></li>
        </ul>
    </nav>
    <main>