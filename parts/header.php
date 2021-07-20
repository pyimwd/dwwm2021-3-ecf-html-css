<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($title)) {echo $title . ' - ';} ?>DWWM</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/helpers.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="main-header">
        <div class="container">
            <span class="logo">DWWM</span>
            <nav class="main-nav">
                <button class="toggle-menu" aria-expanded="false" aria-controls="menu">Menu</button>
                <ul class="menu" role="list" hidden>
                    <li class="menu-item">
                        <a href="index.php" class="menu-link <?php if(isset($page) && $page === 'home') {echo 'active';} ?>">accueil</a>
                    </li>
                    <li class="menu-item">
                        <a href="features.php" class="menu-link <?php if(isset($page) && $page === 'features' || $page === 'feature-item') {echo 'active';} ?>">la formation</a>
                    </li>
                    <li class="menu-item">
                        <a href="team.php" class="menu-link <?php if(isset($page) && $page === 'team' || $page === 'student') {echo 'active';} ?>">les étudiants</a>
                    </li>
                    <li class="menu-item">
                        <a href="news.php" class="menu-link <?php if(isset($page) && $page === 'news' || $page === 'new-item') {echo 'active';} ?>">actualités</a>
                    </li>
                    <li class="menu-item">
                        <a href="contact.php" class="menu-link <?php if(isset($page) && $page === 'contact') {echo 'active';} ?>">nous contacter</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
