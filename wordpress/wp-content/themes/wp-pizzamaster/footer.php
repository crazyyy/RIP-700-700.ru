<div class="bottom_blocks">
    
    <div class="subscribe">
        Рассылка вкусных предложений
        <form>
            <input type="text" name="subscribe_phone" id="subscribe_phone" placeholder="Введите номер телефона">
            <input type="button" value=" " id="add_phone">
        </form>
        <div class="subscribe_message"></div>
    </div><!-- subscribe -->

    <div class="work">
        <img src="<?php echo get_template_directory_uri(); ?>/img/work.png">
        <h3>Хотите у нас работать?</h3>
        <a href="" id="wantwork">Заполните анкету!</a>
        <ul class="social">
            <li>
                <noindex>
                    <a href="http://vk.com/pizza700700" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/img/vk.jpg">
                    </a>
                </noindex>
            </li>
        </ul>
    </div><!-- work -->

    <div class="quality">
        <img src="<?php echo get_template_directory_uri(); ?>/img/qality.png">
        <h3><a href="http://700-700.ru/quality">Качество на первом месте.</a></h3>
        <p>Качество под контролем. Совершенство в развитии!</p>
    </div>
    <div class="clear"></div>
</div><!-- bottom_blocks -->

<div class="empty_inner"> </div>
</div>

<div id="footer">
    <div class="footer_wrap">
        <div class="copyright"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a> <?php echo date("Y"); ?>. Все права защищены</div>

        <div class="footmenu">
            <?php wpeFootNav(); ?>
        </div>
    </div>
</div>

<div class="overlay"></div>


<?php get_template_part('popup-cartform'); ?>
<?php get_template_part('popup-iwantwork'); ?>
<?php get_template_part('popup-feedback'); ?>
<?php get_template_part('popup-vote'); ?>
<?php get_template_part('popup-vote-complete'); ?>
<?php get_template_part('popup-close-site'); ?>
<?php get_template_part('popup-contest-loader'); ?>
<?php get_template_part('popup-logout'); ?>
<?php get_template_part('popup-halferror'); ?>


<div class="popup halferror">
    <div class="close"></div>
    <div class="full_cart_data">
        <div class="site_close">
            <h2>Закажите ещё одну половинку <span id="half_variant"></span>, количество заказаных половинок должно быть четным.</h2>
        </div>
    </div>
</div>

<div class="popup calconeoff">
    <div class="close"></div>
    <div class="full_cart_data">
        <div class="site_close">
            <h2>Скоро в нашем меню!</h2>
        </div>
    </div>
</div>

<div class="popup nohalfmessage">
    <div class="close"></div>
    <div class="full_cart_data">
        <div class="site_close">
            <h2>Данная пицца по половинкам не готовится.</h2>
        </div>
    </div>
</div>

<div class="popup center sous">
    <div class="close"></div>
    <div class="cart_preloader"></div>

    <div class="sous_data">
        <h2>Выберите бесплатный соус к корочкам</h2>
        <div class="sous_img" sous_id="85">
            <img width="76" height="76" src="img/chesnochnyiy-76x76.jpg" class="attachment-menu_76" alt="чесночный">
            <br>
            <div class="sous_title">Чесночный</div>
        </div>
        <div class="sous_img" sous_id="81">
            <img width="76" height="76" src="img/syirnyiy-76x76.jpg" class="attachment-menu_76" alt="сырный">
            <br>
            <div class="sous_title">Сырный</div>
        </div>
        <div class="sous_img" sous_id="79">
            <img width="76" height="76" src="img/kislo-sladkiy-76x76.jpg" class="attachment-menu_76" alt="кисло-сладкий">
            <br>
            <div class="sous_title">Кисло-сладкий</div>
        </div>
        <div class="sous_img" sous_id="70">
            <img width="76" height="76" src="img/barbekyu-76x76.jpg" class="attachment-menu_76" alt="барбекью">
            <br>
            <div class="sous_title">Барбекю</div>
        </div>
        <div class="with_heart">
            <span class="chekb_h" value="off"></span> Пицца в форме сердца
        </div>
        <a href="" class="add_souses">Заказать</a>
        <a href="" class="no-thanks">Спасибо, не надо</a>
    </div>

</div>

<div class="itempopup popup">
    <div class="close"></div>
    <div class="itempopup_wrap"></div>
</div>

<div class="popup registerpopup">
    <div class="close"></div>
    <div class="full_cart_data site_close top_register_wrap">
        <div class="top_reg_step_1">
            <h2>Регистрация / Шаг 1</h2>
            <p>Введите ваш телефон для регистрации</p>
            <div class="formline">
                <input type="text" id="top_regphone" value="">
            </div>
            <div class="formline"><a href="" class="redbutton" id="top_register_step_1">Дальше</a>
            </div>
            <div class="top_reg_result_1"></div>
        </div>

        <div class="top_reg_step_2">
            <h2>Регистрация / Шаг 2</h2>
            <p>Придумайте пароль, минимум 6 символов</p>
            <div class="formline">
                <input type="password" id="top_regpass" value="" placeholder="пароль">
            </div>
            <input type="hidden" id="top_reg_id">
            <div class="formline"><a href="" class="redbutton" id="top_register_step_2">Дальше</a>
            </div>
            <div class="top_reg_result_2"></div>
        </div>

        <div class="top_reg_step_3">
            <h2>Регистрация / Шаг 3</h2>
            <p>На Ваш телефон отправлено смс с кодом подтверждения, введите его ниже в поле</p>
            <div class="formline">
                <input type="text" id="top_regcode" value="">
            </div>
            <div class="formline"><a href="" class="redbutton" id="top_register_step_3">Дальше</a>
            </div>
            <div class="top_reg_result_3"></div>
        </div>

        <div class="top_reg_step_4">
            <h2>Поздравляем!</h2>
            <p>Вы зарегистрировались на сайте компании "Пицца Мастер".
                <br>Теперь у Вас есть личный кабинет с множеством удобных функций для более быстрого и легкого оформления заказа!
                <br>Спасибо за Ваш выбор!</p>
            <div class="formline"><a href="http://700-700.ru/profile" class="redbutton">войти</a>
            </div>
        </div>

    </div>
</div>

<div class="popup loginpopup kurtz">
    <div class="close"></div>
    <div class="full_cart_data site_close">
        <div class="login_box">
            <h2>Вход в личный кабинет</h2>
            <form name="loginform" id="loginform" action="http://700-700.ru/login/" method="post">
                <div class="formline">
                    <input type="text" placeholder="Ваш телефон" name="log" id="user_login" class="phone_mask">
                </div>
                <div class="formline">
                    <input type="password" placeholder="Ваш пароль" name="pwd" id="user_pass">
                </div>

                <div class="formline">
                    <input type="submit" value="Войти" id="popup_login_button">
                    <input type="hidden" name="redirect_to" value="/profile">
                    <input type="hidden" id="security" name="security" value="81586d0fec">
                    <input type="hidden" name="_wp_http_referer" value="/"> </div>
                <div class="formline"><a href="" id="open_forget">забыли пароль?</a>
                </div>
                <div class="login_result"></div>
            </form>
        </div>

        <div class="forget_box">
            <h2>Забыли пароль?</h2>
            <div class="forget_step_1">
                <div class="formline">введите номер Вашего телефона</div>
                <div class="formline">
                    <input type="text" placeholder="Ваш телефон" name="log" id="forget_loginphone" class="phone_mask">
                </div>
                <div class="formline"><a href="" class="redbutton" id="forget_step_1">Дальше</a>
                </div>
                <div class="formline"><a href="" id="open_loginbox">вход</a>
                </div>
            </div>
            <div class="forget_step_2">
                <div class="formline">введите код подтверждения из SMS</div>
                <input type="hidden" value="" id="forget_true_code">
                <div class="formline">
                    <input type="text" placeholder="Код" name="log" id="forget_sms">
                </div>
                <div class="formline"><a href="" class="redbutton" id="forget_step_2">Получить пароль</a>
                </div>
                <div class="formline"><a href="" id="open_loginbox">вход</a>
                </div>
            </div>
            <div class="forget_step_3">
                <div class="formline">Новый пароль отправлен Вам в SMS.</div>
                <div class="formline"><a href="" class="redbutton" id="open_loginbox">вход</a>
                </div>
            </div>
            <div class="forget_errors"></div>
        </div>
    </div>
</div>

<div style="display:none" id="half_indicator" is_full="0"></div>
<div style="display:none" id="half_indicator_30" is_full="0"></div>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.form.min.js"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var _wpcf7 = {
            "loaderUrl": "http:\/\/700-700.ru\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
            "sending": "\u041e\u0442\u043f\u0440\u0430\u0432\u043a\u0430..."
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts(1).js"></script>

    <script>
        $(document).ready(function (e) {
            update_cart($.cookie('cart'));
        });
    </script>

</body>
</html>