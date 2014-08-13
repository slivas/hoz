<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language; ?>">
<head prefix="og: http://ogp.me/ns#
    fb: http://ogp.me/ns/fb#
    article: http://ogp.me/ns/article#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
    <meta charset="<?php echo Yii::app()->charset; ?>"/>
    <meta name="keywords" content="<?php echo CHtml::encode($this->keywords);?>"/>
    <meta name="description" content="<?php echo CHtml::encode($this->description); ?>"/>
    <meta property="og:title" content="<?php echo CHtml::encode($this->pageTitle); ?>"/>
    <meta property="og:description" content="<?php echo $this->description; ?>"/>
    <?php
    $mainAssets = Yii::app()->AssetManager->publish(
        Yii::app()->theme->basePath . "/web/"
    );

    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/style.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/yupe.css');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/blog.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/bootstrap-notify.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.li-translit.js');
    ?>
    <script type="text/javascript">
        var yupeTokenName = '<?php echo Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?php echo Yii::app()->getRequest()->csrfToken;?>';
    </script>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<div class="navbar-bg"></div>
<div class="header-bg"></div>
<div class="menu-bg"></div>
<div class="wrapper">
    <div class="navbar">
        <div class="navbar-inner header-wrapper">
            <ul class="nav nav-menu">
                <li><a href="#">Как купить</a></li>
                <li><a href="#">Доставка</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
            <form class="pull-left header-search">
                <input type="search" placeholder="Поиск по ключевому слову">
                <input class="search-submit" type="submit" title="Искать" value="">
            </form>
            <ul class="nav registration pull-right">
                <li><a href="#">Вход</a></li>
                <li><a href="#">Регистрация</a></li>
            </ul>
        </div>
    </div>
    <div class="header">
        <div class="wrapper">
            <div class="pull-left">
                <a href="/" title="На главную">
                    <img src="/web/images/logo.png" class="logo">
                </a>
            </div>
            <div class="pull-left header-contacts">
                <h4>Телефоны для заказов и консультаций</h4>
                <p class="pull-left">+38 (067) 123-45-67</p>
                <p class="pull-left">+38 (095) 123-45-67</p>
                <div class="clear"></div>
            </div>
            <div class="pull-left basket">
                <div class="basket-img pull-left"></div>
                <ul class="pull-left">
                    <li>
                        <h5>Корзина</h5>
                    </li>
                    <li>Товаров в корзине: нет</li>
                    <li>Общая сумма: 0</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="wrapper">
            <ul class="nav category-menu">
                <li class="dropdown inline-block" >
                    <a class="dropdown-toggle"data-target="#" href="top_page.html">
                        Электроинструмент
                    </a>
                    <ul class="dropdown-menu parent" >
                        <li class="dropdown-submenu" >
                            <a tabindex="-1" href="middle_page.html">
                                Дрели
                            </a>
                            <!--                            <ul class="dropdown-menu">-->
                            <!--                                <li>-->
                            <!--                                    <a tabindex="-1" href="page.html">-->
                            <!--                                        Еще один уровень субменю-->
                            <!--                                    </a>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                        </li>
                        <li class="dropdown-submenu" >
                            <a tabindex="-1" href="middle_page.html">
                                Болгарки
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown inline-block">
                    <a class="dropdown-toggle"data-target="#" href="top_page.html">
                        Оборудование
                    </a>
                    <ul class="dropdown-menu parent" >
                        <li class="dropdown-submenu" >
                            <a tabindex="-1" href="middle_page.html">
                                Дрели
                            </a>
                        </li>
                        <li class="dropdown-submenu" >
                            <a tabindex="-1" href="middle_page.html">
                                Болгарки
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown inline-block">
                    <a class="dropdown-toggle"data-target="#" href="top_page.html">
                        Дом и сад
                    </a>
                    <ul class="dropdown-menu parent" >
                        <li class="dropdown-submenu" >
                            <a tabindex="-1" href="middle_page.html">
                                Дрели
                            </a>
                        </li>
                        <li class="dropdown-submenu" >
                            <a tabindex="-1" href="middle_page.html">
                                Болгарки
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown inline-block">
                    <a class="dropdown-toggle"data-target="#" href="top_page.html">
                        Активный отдых
                    </a>
                    <ul class="dropdown-menu parent" >
                        <li class="dropdown-submenu" >
                            <a tabindex="-1" href="middle_page.html">
                                Дрели
                            </a>
                        </li>
                        <li class="dropdown-submenu" >
                            <a tabindex="-1" href="middle_page.html">
                                Болгарки
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown inline-block">
                    <a class="dropdown-toggle"data-target="#" href="top_page.html">
                        Тепло и уют
                    </a>
                    <ul class="dropdown-menu parent" >
                        <li class="dropdown-submenu" >
                            <a tabindex="-1" href="middle_page.html">
                                Дрели
                            </a>
                        </li>
                        <li class="dropdown-submenu" >
                            <a tabindex="-1" href="middle_page.html">
                                Болгарки
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown inline-block">
                    <a class="dropdown-toggle"data-target="#" href="top_page.html">
                        Авто
                    </a>
                    <ul class="dropdown-menu parent" >
                        <li class="dropdown-submenu" >
                            <a tabindex="-1" href="middle_page.html">
                                Дрели
                            </a>
                        </li>
                        <li class="dropdown-submenu" >
                            <a tabindex="-1" href="middle_page.html">
                                Болгарки
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>