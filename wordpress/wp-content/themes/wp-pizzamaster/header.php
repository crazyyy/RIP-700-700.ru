<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>
        <?php wp_title( '' ); ?>
        <?php if ( wp_title( '', false ) ) { echo ':'; } ?>
        <?php bloginfo( 'name' ); ?>
    </title>

    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- <meta name="viewport" content="maximum-scale=4, minimum-scale=0.1, width=1300">     -->

    <!-- icons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.gif" type="image/x-icon">

    <!-- css + javascript -->
    <?php wp_head(); ?>
    <!--[if IE]>
    	<link href="http://700-700.ru/wp-content/themes/pizzamaster2/css/ie.css" rel="stylesheet" media="all" />
    <![endif]-->

    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.0.6.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/mask.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/cookie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/mousewheel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/timeto.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/fancybox.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox-media.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scrollbar.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery(1).js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js"></script>
    <script type="text/javascript">
        var ajaxurl = 'http://700-700.ru/wp-admin/admin-ajax.php';
    </script>

</head>

<body <?php body_class(); ?>>
<!-- <body minorder="350" minorderself="60" hola-ext-player="1"> -->

    <div class="wrap">
        <div class="pseudohead"></div>

        <div class="header">
            <div class="head_wrap">
                <div class="logo">
                    <a href="./index_files/index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/Master_logo_vologda700700_2.png" title="Пицца-Мастер" alt="Доставка пиццы в Вологде">
                    </a>
                </div>

                <div class="userlinks">
                    <a href="" class="loginpopup_open">Личный кабинет</a> | <a href="" class="open_register">Регистрация</a>
                </div>
                <div class="freedelivery">
                    <div class="phones">700-700
                        <br>70-9999</div>
                    <div class="freedel_text">Бесплатная
                        <br>доставка
                        <br>в Вологде</div>
                </div>
                <div class="headcart">
                    <div class="cart_counter opencartpopup">0</div>
                    <a href="" class="order opencartpopup">Оформить заказ</a>
                    <h1>Корзина</h1>
                    <p>товар(-ов) на <span class="totalcartsum">0</span> руб.</p>

                </div>

                <div class="menubg"></div>
                <div class="left_menu">
                    <ul>
                        <li id="menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-16"><a href="./index_files/index.html">Главная</a>
                        </li>
                        <li id="menu-item-950" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-950"><a href="http://700-700.ru/menu">Меню</a>
                            <ul class="sub-menu">
                                <li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14"><a href="http://700-700.ru/pizza/">Пицца</a>
                                </li>
                                <li id="menu-item-15" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15"><a href="http://700-700.ru/rolls/">Роллы</a>
                                </li>
                                <li id="menu-item-1178" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1178"><a href="http://700-700.ru/masters/">Мастерсы</a>
                                </li>
                                <li id="menu-item-11634" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-11634"><a href="http://700-700.ru/zakuski/">Закуски</a>
                                </li>
                                <li id="menu-item-1882" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1882"><a href="http://700-700.ru/salat/">Салаты</a>
                                </li>
                                <li id="menu-item-44" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-44"><a href="http://700-700.ru/drinks/">Напитки</a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-951" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-951"><a href="http://700-700.ru/constructor-pizza/">Конструктор пиццы</a>
                        </li>
                    </ul>
                </div>

                <div class="right_menu">
                    <ul>
                        <li id="menu-item-11618" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11618"><a href="http://700-700.ru/pochemu-myi/">Почему мы?</a>
                        </li>
                        <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a href="http://700-700.ru/kontaktyi/">Доставка</a>
                        </li>
                        <li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a href="http://700-700.ru/guestbook/">Гостевая книга</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- header -->