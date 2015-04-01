<!-- /* Template Name: Category Template */  -->
<?php get_header(); ?>
<div class="main">
    <div class="content_wrap">


    <h2><span class="left_pimpa">~~~</span>  Пицца<span class="right_pimpa">~~~</span></h2>


    <div class="promo">
        <div class="img_cont">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/Skidka__kachestvo-900x140.jpg">
            </a>
        </div>
    </div>


    <div class="open_filter">▾ открыть фильтр</div>
    <div class="pizza_filter">
        <ul>
            <li data-type="klassika">Классика</li>
            <li data-type="kolbasnyie">Колбасные</li>
            <li data-type="myasnyie">Мясные</li>
            <li data-type="ovoshhnyie">Овощные</li>
            <li data-type="ostryie">Острые</li>
            <li data-type="s-gribami">С грибами</li>
            <li data-type="s-kuritsey">С курицей</li>
            <li data-type="s-ryiboy-i-moreproduktami">С рыбой и морепродуктами</li>
        </ul>
    </div><!-- pizza_filter -->




        <div class="pizzalist">



            <div class="pizza_one klassika kolbasnyie">
                <div class="pizza_title"><a href="http://700-700.ru/servelatto-7987/" class="item_popup_link" data-id="7987">Сервелатто</a>
                </div>
                <a href="http://700-700.ru/servelatto-7987/" title="Сервелатто" class="item_popup_link" data-id="7987"><img width="210" height="180" src="<?php echo get_template_directory_uri(); ?>/img/Servelatto_logo1-210x180.jpg" class="attachment-menu_210" alt="Servelatto_logo">
                </a>
                <div class="pizza_all_meta">
                    <div class="components"><span>Состав:</span> Соус фирменный, сыр «Моцарелла», много-много сервелата</div>
                    <div class="pizza_meta">
                        <div class="variants_buttons">
                            <div data-variant="30" class="pizza30">30см</div>
                            <div data-variant="40" class="current pizza40">40см</div>
                            <div data-variant="half" class="halfer">половина</div>
                        </div>
                        <div class="variant_selector">
                            <select item_id="7987">
                                <option value="full40" selected="selected">Пицца 40см</option>

                                <option value="half40">Половина пиццы 40см</option>
                                <option value="full30">Пицца 30см</option>
                                <option value="half30">Половина пиццы 30см</option>
                            </select>
                        </div>
                        <div class="weight">

                            <ul class="variants">
                                <li class="full40 current" item_id="7987">800 г – <span>400 р</span>
                                </li>
                                <li class="full30" item_id="7976">450 г – <span>350 р</span>
                                </li>
                                <li class="half40" item_id="7985">400 г – <span>240 р</span>
                                </li>
                                <li class="half30" item_id="7980">200 г – <span>150 р</span>
                                </li>
                            </ul>
                        </div>
                        <div class="buy_button add_to_cart" item_id="7987" is_pizza="1">В корзину</div>

                        <div class="clear"></div>
                    </div>
                </div>
                <div class="rating_wrap">
                    <div class="rating_stars " data-id="7987">
                        <div class="star" data-position="1"></div>
                        <div class="star" data-position="2"></div>
                        <div class="star" data-position="3"></div>
                        <div class="star" data-position="4"></div>
                        <div class="star" data-position="5"></div>
                    </div>
                    <div class="stars_back  " data-current-rating="5" style="width: 120px;"></div>
                    <div class="total_voters">Всего оценок: <span>1038</span>
                    </div>
                    <div class="vote_result vr_7987"></div>
                </div>
            </div><!-- pizza_one -->
        </div><!-- pizzalist -->


    </div><!-- content_wrap -->
</div><!-- main -->
<?php get_footer(); ?>