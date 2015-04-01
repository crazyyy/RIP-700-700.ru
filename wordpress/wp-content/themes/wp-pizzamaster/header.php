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
                </div><!-- headcart -->

                <div class="menubg"></div>

                <div class="left_menu">
                	<?php wpeHeadNav(); ?>
                </div>
                <div class="right_menu">
                	<?php wpeSideNav(); ?>
                </div>
            </div>
        </div>
        <!-- header -->