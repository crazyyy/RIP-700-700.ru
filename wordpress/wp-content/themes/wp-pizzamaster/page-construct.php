<!-- /* Template Name: Construct Template */  -->
<?php get_header(); ?>

        <div class="main">
            <div class="content_wrap constructor">

                <h1>Приготовь свою пиццу сам!</h1>
                <div class="ingr_cats">

                    <ul style="display:none;" class="testo">
                        <li ingr_id="720" price="50" weight="350">Тесто <span>350 гр. / 50 руб.</span>
                            <div class="del_ingr"></div>
                        </li>
                    </ul>


                    <div class="ingr">
                        <h3 cat_id="sous">Соус</h3>
                        <ul cat_id="sous"></ul>
                    </div>
                    <div class="ingr">
                        <h3 cat_id="syir">Сыр</h3>
                        <ul cat_id="syir"></ul>
                    </div>
                    <div class="ingr">
                        <h3 cat_id="myaso">Мясо</h3>
                        <ul cat_id="myaso"></ul>
                    </div>
                    <div class="ingr">
                        <h3 cat_id="ryiba">Рыба</h3>
                        <ul cat_id="ryiba"></ul>
                    </div>
                    <div class="ingr">
                        <h3 cat_id="gribyi">Грибы</h3>
                        <ul cat_id="gribyi"></ul>
                    </div>
                    <div class="ingr">
                        <h3 cat_id="ovoshhi">Овощи</h3>
                        <ul cat_id="ovoshhi"></ul>
                    </div>
                    <div class="ingr">
                        <h3 cat_id="spetsii">Специи</h3>
                        <ul cat_id="spetsii"></ul>
                    </div>
                </div>


                <div class="hello_master">
                    <h2>Здравствуйте, Мастер!</h2> Итак, используя самые непревзойденные ингредиенты из правой колонки, <span>какую пиццу мы приготовим сегодня?</span>
                </div>

                <div class="ingr_list">
                </div>

                <div class="c_check">
                    <div class="check_price"><b class="c_w">350</b> гр. <span>/</span> <span class="red"><b class="c_p">50</b> руб.</span>
                    </div>
                    <a href="" id="order_construct" construct_id="1"><img src="<?php echo get_template_directory_uri(); ?>/img/order_c.png">
                    </a>
                    <div id="constr_message">Минимальная сумма заказа 300руб. Добавьте ещё ингредиенты.</div>
                    <div id="nosous_message">Добавьте, пожалуйста, соус для основы</div>
                </div>

                <div class="korzh">
                    <div class="baloon1"></div>
                    <div class="baloon2"></div>
                    <div class="baloon3"></div>
                    <div class="ingr_one" style="opacity:0; z-index:1200;" ingr_id="734"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/salyami1.png" class="attachment-post-thumbnail wp-post-image" alt="салями">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1300;" ingr_id="731"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Pengasius.png" class="attachment-post-thumbnail wp-post-image" alt="Пенгасиус">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1300;" ingr_id="729"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Morskoy-kokteyl.png" class="attachment-post-thumbnail wp-post-image" alt="Морской-коктейль">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1200;" ingr_id="727"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/kopchenaya-kuritsa.png" class="attachment-post-thumbnail wp-post-image" alt="копченая-курица">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1300;" ingr_id="722"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Krevetki.png" class="attachment-post-thumbnail wp-post-image" alt="Креветки">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:0;" ingr_id="720"></div>
                    <div class="ingr_one" style="opacity:0; z-index:1600;" ingr_id="715"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Bazilik.png" class="attachment-post-thumbnail wp-post-image" alt="Базилик">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1203;" ingr_id="714"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Bekon.png" class="attachment-post-thumbnail wp-post-image" alt="Бекон">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1000;" ingr_id="713"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Belyiy-slivochnyiy.png" class="attachment-post-thumbnail wp-post-image" alt="Белый-сливочный">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1500;" ingr_id="712"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/bolgarskiy.png" class="attachment-post-thumbnail wp-post-image" alt="болгарский">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1500;" ingr_id="711"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/brokkoli.png" class="attachment-post-thumbnail wp-post-image" alt="брокколи">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1200;" ingr_id="710"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Vetchina.png" class="attachment-post-thumbnail wp-post-image" alt="Ветчина">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1600;" ingr_id="709"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Vostochnyie-pripravyi.png" class="attachment-post-thumbnail wp-post-image" alt="Восточные-приправы">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1200;" ingr_id="708"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Govyadina1.png" class="attachment-post-thumbnail wp-post-image" alt="Говядина">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1600;" ingr_id="707"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Zelen.png" class="attachment-post-thumbnail wp-post-image" alt="Зелень">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1500;" ingr_id="706"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Zelenyiy-luk1.png" class="attachment-post-thumbnail wp-post-image" alt="Зеленый-лук">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1300;" ingr_id="705"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Kalmar.png" class="attachment-post-thumbnail wp-post-image" alt="Кальмар">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1200;" ingr_id="704"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Karbonat.png" class="attachment-post-thumbnail wp-post-image" alt="Карбонат">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1500;" ingr_id="703"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/kukuruza.png" class="attachment-post-thumbnail wp-post-image" alt="кукуруза">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1200;" ingr_id="702"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Kuritsa1.png" class="attachment-post-thumbnail wp-post-image" alt="Курица">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1500;" ingr_id="700"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Luk-repchatyiy.png" class="attachment-post-thumbnail wp-post-image" alt="Лук-репчатый">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1500;" ingr_id="699"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/marinovannyie.png" class="attachment-post-thumbnail wp-post-image" alt="маринованные">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1500;" ingr_id="698"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/maslinyi.png" class="attachment-post-thumbnail wp-post-image" alt="маслины">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1500;" ingr_id="696"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/olivki.png" class="attachment-post-thumbnail wp-post-image" alt="оливки">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1400;" ingr_id="695"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Opyata.png" class="attachment-post-thumbnail wp-post-image" alt="Опята">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1200;" ingr_id="694"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/ohotnichi1.png" class="attachment-post-thumbnail wp-post-image" alt="охотничьи">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1500;" ingr_id="693"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/perets-chili.png" class="attachment-post-thumbnail wp-post-image" alt="перец-чили">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1500;" ingr_id="692"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Pomidoryi.png" class="attachment-post-thumbnail wp-post-image" alt="Помидоры">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1200;" ingr_id="690"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/salyami.png" class="attachment-post-thumbnail wp-post-image" alt="салями">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1200;" ingr_id="689"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Svinina2.png" class="attachment-post-thumbnail wp-post-image" alt="Свинина">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1300;" ingr_id="688"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/semga.png" class="attachment-post-thumbnail wp-post-image" alt="семга">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1000;" ingr_id="687"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Slivochno-gorchichnyiy.png" class="attachment-post-thumbnail wp-post-image" alt="Сливочно-горчичный">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1000;" ingr_id="686"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Sous-Master.png" class="attachment-post-thumbnail wp-post-image" alt="Соус-Мастер">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1000;" ingr_id="685"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Sous-Master-ostryiy.png" class="attachment-post-thumbnail wp-post-image" alt="Соус-Мастер-острый">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1100;" ingr_id="684"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Syir-Gauda.png" class="attachment-post-thumbnail wp-post-image" alt="Сыр-Гауда">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1100;" ingr_id="683"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Syir-Golladnskiy.png" class="attachment-post-thumbnail wp-post-image" alt="Сыр-Голладнский">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1100;" ingr_id="681"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Syir-motsarela.png" class="attachment-post-thumbnail wp-post-image" alt="Сыр-моцарела">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1100;" ingr_id="680"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/Syir-Parmezan.png" class="attachment-post-thumbnail wp-post-image" alt="Сыр-Пармезан">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1600;" ingr_id="679"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/CHernyiy-perets.png" class="attachment-post-thumbnail wp-post-image" alt="Черный-перец">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1500;" ingr_id="677"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/CHerri.png" class="attachment-post-thumbnail wp-post-image" alt="Черри">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1400;" ingr_id="676"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/SHampinonyi.png" class="attachment-post-thumbnail wp-post-image" alt="Шампиньоны">
                    </div>
                    <div class="ingr_one" style="opacity:0; z-index:1200;" ingr_id="673"><img width="552" height="552" src="<?php echo get_template_directory_uri(); ?>/img/YAzyik2.png" class="attachment-post-thumbnail wp-post-image" alt="Язык">
                    </div>
                </div>

                <div class="clear"></div>

                <div class="alert_message">Обращаем ваше внимание на то, что вид готовой пиццы может отличаться от изображения на экране.</div>

            </div>

        </div>


        <?php get_footer(); ?>