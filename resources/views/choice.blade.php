<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Кондитерская Ванилька"/>
    <meta property="og:image" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.vanilka.by"/>
    <meta name="keywords"
          content="Кондитерская Ванилька | Главная страница | Сладости, торты на заказ, корпоративные подарки">
    <meta name="description"
          content="Кондитерская Ванилька | Главная страница | Сладости, торты на заказ, корпоративные подарки">

    <title></title>
    <!--[if IE]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->

    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
    <link type="text/css" rel="stylesheet" href="../../public/css/libs.min.css">
    <link type="text/css" rel="stylesheet" href="../../public/css/main.css">
</head>
<body>
<div class="choose-role-page__wrapper">

    @include('parts.menu')

    <div class="choose-role__wrapper">
        <a href="main.html" class="choose-role__button choose-role__individual">
            <span class="choose-role__label">
                Физическое лицо
            </span>
        </a>
        <a href="entity.html" class="choose-role__button choose-role__entity">
            <span class="choose-role__label">
                Юридическое лицо
            </span>
        </a>
    </div>

    @include('parts.choice_page_footer')
</div>
</body>
</html>