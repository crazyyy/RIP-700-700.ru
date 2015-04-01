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
<?php get_template_part('popup-other'); ?>



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