<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/<?= $style ?>.css">
    <script src="https://kit.fontawesome.com/5cd0ea3ebf.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="wrapper">
        <header class="header">
            <div class="header__inner container">
                <b class="header__logo">WEB TECHNOLOGY</b>
                <div class="header__themeSwitcher left" onclick="switchTheme(this)">
                    <span class="header__themeSwitcher-circle"></span>
                </div>
            </div>
        </header>

        <nav class="navigation">
            <div class="navigation__inner container">
                <ul class="navigation__ul">
                    <li class="navigation__li"><a class="navigation__li-a" href="/">О себе</a></li>
                    <li class="navigation__li"><a class="navigation__li-a" href="interesting">Мои интересы</a></li>
                    <li class="navigation__li"><a class="navigation__li-a" href="resume">Мои Резюме</a></li>
                    <li class="navigation__li"><a class="navigation__li-a" href="contacts">Мои Контакты</a></li>
                </ul>
            </div>
        </nav>

        <main>
            <?= $content ?>
        </main>

        <footer class="footer">
            <div class="footer__inner container">
                <p class="footer__copyright">Сайт разработан @insmurfi, 2023</p>
            </div>
        </footer>
        <script src="scripts/script.js"></script>
    </div>
</body>

</html>