<div class="bottom_blocks">
    <div class="subscribe">
        Рассылка вкусных предложений
        <form>
            <input type="text" name="subscribe_phone" id="subscribe_phone" placeholder="Введите номер телефона">
            <input type="button" value=" " id="add_phone">
        </form>
        <div class="subscribe_message"></div>
    </div>
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
    </div>
    <div class="quality">
        <img src="<?php echo get_template_directory_uri(); ?>/img/qality.png">
        <h3><a href="http://700-700.ru/quality">Качество на первом месте.</a></h3>
        <p>Качество под контролем. Совершенство в развитии!</p>
    </div>
    <div class="clear"></div>
</div>

<div class="empty_inner"> </div>
</div>

<div id="footer">
    <div class="footer_wrap">
        <div class="copyright"><a href="./index_files/index.html">Мастер Пицца</a> 2013. Все права защищены</div>

        <div class="footmenu">
            <ul>
                <li id="menu-item-424" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-424"><a href="http://700-700.ru/pizza/">Пицца</a>
                </li>
                <li id="menu-item-425" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-425"><a href="http://700-700.ru/rolls/">Роллы</a>
                </li>
                <li id="menu-item-426" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-426"><a href="http://700-700.ru/drinks/">Напитки</a>
                </li>
                <li id="menu-item-431" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-431"><a href="http://700-700.ru/kontaktyi/">Контакты и доставка</a>
                </li>
                <li id="menu-item-432" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-432"><a href="http://700-700.ru/guestbook/">Гостевая книга</a>
                </li>
            </ul>
        </div>


    </div>
</div>

<div class="overlay"></div>
<div class="popup cartform" data-noreg="1">
    <div class="close"></div>
    <div class="cart_preloader"></div>

    <div class="empty_cart" style="display: block;">
        <h2>Ваша корзина пустая</h2>
    </div>

    <div class="fastregister_wrap">
        <div class="fast_reg_step_1">
            <h2>Авторизация / Регистрация</h2>
            <p>Ваш телефон: <span id="your_fast_phone"></span>
            </p>

            <div class="fast_pass">
                <input type="password" id="fast_reg_pass1" placeholder="пароль, минимум 6 знаков" style="font-weight:normal;">
            </div>
            <p>Если Вы уже зарегистрированный пользователь, то введите свой пароль.</p>
            <p>Если нет, то придумайте новый пароль. Больше ничего не понадобится!</p>
            <a href="" id="register_in_order">Дальше</a>
            <div class="formline"><a href="" id="open_forget" style="color:#333; margin-top:10px;
            font-size:14px;">забыли пароль?</a>
            </div>
        </div>

        <div class="fast_reg_step_2">
            <h2>Подтверждение регистрации</h2>
            <div class="fast_pass">
                <input type="text" id="fast_reg_conf_code" placeholder="Код" data-newuserid="">
            </div>
            <p>Вам придет СМС с кодом подтверждения. Пожалуйста, введите код.</p>
            <a href="" id="confirmcode_in_order">Дальше</a>
        </div>

        <div class="fast_reg_step_3">
            <h2>Поздравляем!</h2>
            <p>Вы зарегистрировались на сайте компании "Пицца Мастер".
                <br>Теперь у Вас есть личный кабинет с множеством удобных функций для более быстрого и легкого оформления заказа!</p>
            <p><strong style="font-size:14px; color:#000;">Ваш заказ принят!<br>Ожидайте курьера в течении 60 минут!<br>Спасибо за Ваш выбор!</strong>
            </p>
        </div>

        <div class="fast_reg_step_4">
            <h2>Ваш заказ принят! </h2>
            <p>Ожидайте курьера в течении 60 минут! Спасибо за Ваш выбор!</p>
        </div>

        <div class="fastregister_errors"></div>
    </div>

    <div class="full_cart_data allcart" style="display: none;">

        <div class="big_cart_wrapper">
            <div class="present_drinks hide">
                <div class="pizza_present_buttons" pizza_discount="drinks" pizza_total_count="0" style="display: none;">
                    <h1>Вы можете воспользоваться одной из двух акций:</h1>
                    <div class="piza_spec active" spec="drinks">Бесплатный напиток</div>
                    <div class="piza_spec" spec="money">Скидка на пиццу <span id="pizza_discount">0</span> руб</div>
                </div>
                <div class="drinks_container">
                    <h1>Вы можете выбрать бесплатные напитки: <span id="drink_count">0</span></h1>
                    <div class="p_drink_one">
                        <div class="p_drink_img">
                            <img width="76" height="104" src="img/Fanta-1l_logo-76x104.jpg" class="attachment-menu_76" alt="Фанта 1л_logo"> </div>
                        <div class="p_drink_title">
                            <h4>Фанта 1л</h4>
                            <div class="number">
                                <span class="item_counter selected_drinks" code="777004" item_id="3066">0</span>
                                <div class="up set_drinks"></div>
                                <div class="down set_drinks" style="opacity:0.3;"></div>
                                <div class="up set_drinks indrinks"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p_drink_one">
                        <div class="p_drink_img">
                            <img width="76" height="104" src="img/sprayt-1l_logo-76x104.jpg" class="attachment-menu_76" alt="спрайт 1л_logo"> </div>
                        <div class="p_drink_title">
                            <h4>Спрайт 1л</h4>
                            <div class="number">
                                <span class="item_counter selected_drinks" code="777003" item_id="3064">0</span>
                                <div class="up set_drinks"></div>
                                <div class="down set_drinks" style="opacity:0.3;"></div>
                                <div class="up set_drinks indrinks"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p_drink_one">
                        <div class="p_drink_img">
                            <img width="76" height="104" src="img/koka-kola-1.5l_logo-76x104.jpg" class="attachment-menu_76" alt="кока-кола 1.5л_logo"> </div>
                        <div class="p_drink_title">
                            <h4>Кола 1л</h4>
                            <div class="number">
                                <span class="item_counter selected_drinks" code="777002" item_id="3060">0</span>
                                <div class="up set_drinks"></div>
                                <div class="down set_drinks" style="opacity:0.3;"></div>
                                <div class="up set_drinks indrinks"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p_drink_one">
                        <div class="p_drink_img">
                            <img width="76" height="104" src="img/Voda_Bonakva-1l_logo-76x104.jpg" class="attachment-menu_76" alt="Вода_Бонаква 1л_logo"> </div>
                        <div class="p_drink_title">
                            <h4>Бонаква 1л</h4>
                            <div class="number">
                                <span class="item_counter selected_drinks" code="777001" item_id="3058">0</span>
                                <div class="up set_drinks"></div>
                                <div class="down set_drinks" style="opacity:0.3;"></div>
                                <div class="up set_drinks indrinks"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="order_total">
            <a href="" class="order_more">Заказать что-то еще</a>
            <div class="order_total_price">
                <div class="self_discount" dsk="0">Ваша скидка: <span class="red">0 р</span>
                </div>
                Итого: <span class="red"><span class="total">0</span> р</span>
            </div>
            <div class="clear"></div>
        </div>

        <div class="order_formline">
            <h4>Способ доставки</h4>
            <div class="order_delivery first active" id="set_delivery_currier">
                <h2>Доставка<br>курьером</h2>
            </div>

            <div class="order_delivery" id="set_delivery_self">
                <h2>Cамовывоз<br>(г. Вологда, ул. Мальцева, 5)</h2>
            </div>
        </div>

        <div class="order_formline" style="display:none;">
            <div class="order_formcell">
                <label class="cardcell">
                    <input name="deliverymethod" type="radio" id="delivery_currier" checked="checked">Доставка курьером</label>
                <label class="cardcell">
                    <input name="deliverymethod" type="radio" id="delivery_self">Самовывоз</label>
            </div>
        </div>


        <div class="order_contacts">
            <div class="order_formline">
                <div class="order_formcell">
                    <label>Фамилия Имя Отчество</label>
                    <input type="text" name="fio" id="order_fio" style="width:640px">
                </div>
            </div>
            <div class="order_formline currier_hide">
                <div class="order_formcell">
                    <label>Улица <span class="red">*</span>
                    </label>
                    <input type="text" name="street" id="order_street" style="width:330px">
                </div>
                <div class="order_formcell">
                    <label>Дом</label>
                    <input type="text" name="house" id="order_house" style="width:40px">
                </div>
                <div class="order_formcell">
                    <label>Кв</label>
                    <input type="text" name="room" id="order_room" style="width:40px">
                </div>
                <div class="order_formcell">
                    <label>Подъезд</label>
                    <input type="text" name="porch" id="order_porch" style="width:40px">
                </div>
                <div class="order_formcell">
                    <label>Этаж</label>
                    <input type="text" name="stage" id="order_stage" style="width:40px">
                </div>

            </div>
            <div class="order_formline">
                <div class="order_formcell">
                    <label>Телефон <span class="red">*</span>
                    </label>
                    <input type="text" name="phone" id="order_phone" style="width:300px">
                </div>

                <div class="order_formcell currier_hide">
                    <label>Домашний телефон</label>
                    <input type="text" name="home_phone" id="order_home_phone" style="width:300px">
                </div>
            </div>

            <div class="order_formline">
                <div class="order_formcell">
                    <label>Примечание</label>
                    <textarea name="description" id="order_description"></textarea>
                </div>
            </div>

            <div class="order_formline">
                <h4>Способ оплаты</h4>
                <div class="paymethod first active" id="set_order_cash">
                    <h2>Оплата<br>наличными</h2>
                    <div class="paymethod_desc">
                        <p>Выбирайте этот метод оплаты, если Вы будете оплачивать заказ наличными деньгами.</p>
                        <p>Если Вам потребуется сдача, укажите, пожалуйста, с какой суммы.</p>
                        <p>
                            <label>Сдача с </label>
                            <input type="text" name="nominal" class="order_nominal" value=""> руб.
                        </p>
                    </div>
                </div>

                <div class="paymethod" id="set_order_online">
                    <h2>Моментальная<br>оплата</h2>
                    <div class="paymethod_desc">
                        <p>Выбирайте этот метод оплаты, если Вы хотите оплатить заказ в онлайн-режиме прямо сейчас.</p>
                        <p>Вы можете оплатить заказ банковской картой, электронными деньгами (Яндекс.Деньги, Webmoney, Qiwi и т.д.), с помощью СМС (Мегафон, Билайн, МТС), а так же с помощью мобильного приложения для IPhone.</p>
                    </div>
                </div>

                <div class="paymethod" id="set_order_cardpay">
                    <h2>Оплата<br>банковской картой</h2>
                    <div class="paymethod_desc">
                        <p>Выбирайте этот метод оплаты, если Вы будете оплачивать заказ при помощи банковской карты.</p>
                        <p>Курьер приедет к Вам с мобильным терминалом.</p>
                    </div>
                </div>


            </div>

            <div class="order_formline " id="payment_desc">
                <p>Выбирайте этот метод оплаты, если Вы будете оплачивать заказ наличными деньгами.</p>
                <p>Если Вам потребуется сдача, укажите, пожалуйста, с какой суммы.</p>
                <p>
                    <label>Сдача с </label>
                    <input type="text" name="nominal" class="order_nominal" value=""> руб.
                </p>
            </div>

            <div class="order_formline" style="display:none;">
                <div class="order_formcell">
                    <label class="cardcell">
                        <input name="paymethod" type="radio" id="order_cash" checked="checked">Я хочу оплачить заказ наличными</label>
                    <label class="cardcell">
                        <input name="paymethod" type="radio" id="order_cardpay">Я хочу оплатить заказ пластиковой картой</label>
                    <label class="cardcell">
                        <input name="paymethod" type="radio" id="order_online">Я хочу оплатить заказ онлайн (Robokassa)</label>
                </div>
            </div>



            <div class="order_formline ">
                <div class="errors_line">Заполните обязательные поля.</div>
                <input type="submit" value="Заказать" class="submit_button" id="send_order" style="display: block;">
            </div>
        </div>
    </div>

</div>

<div class="popup iwantwork">
    <div class="close"></div>
    <div class="cart_preloader"></div>
    <div class="full_cart_data">

        <div class="work_step_1">
            <h4>Выберите должность</h4>
            <div class="order_formline">
                <div class="order_formcell">
                    <label>Должность <span class="red">*</span>
                    </label>
                    <select id="anketa_place" style="width:660px">
                        <option value="povar">Повар на пиццу</option>
                        <option value="kurer">Водитель-курьер</option>
                        <option value="uborshhik">Уборщик</option>
                        <option value="logist-operator">Диспетчер</option>
                        <option value="administrator">Администратор</option>
                    </select>
                </div>
            </div>
            <div class="order_formline">
                <div class="workplace_desc" data-place="povar" style="display:block;"></div>
                <div class="workplace_desc" data-place="kurer">
                    <p>1) С личным автомобилем.
                        <br> 2) Работа в 2 смены. Оплата почасовая + за заказ.
                        <br> 3) Знание города приветствуется.
                        <br> Заполняйте анкету и мы с вами свяжемся!</p>
                </div>
                <div class="workplace_desc" data-place="uborshhik"></div>
                <div class="workplace_desc" data-place="logist-operator"></div>
                <div class="workplace_desc" data-place="administrator"></div>
            </div>
            <div class="order_formline">
                <input type="button" value="Дальше" class="send_button" id="work_step_2">
            </div>
        </div>

        <div class="work_step_2">
            <h4>Напишите немного о себе и мы свяжемся с Вами</h4>
            <div class="order_formline">
                <div class="order_formcell">
                    <label>Ф.И.О. <span class="red">*</span>
                    </label>
                    <input type="text" id="anketa_fio" style="width:640px">
                </div>
            </div>


            <div class="order_formline">
                <div class="order_formcell">
                    <label>Телефон <span class="red">*</span>
                    </label>
                    <input type="text" id="anketa_phone" class="w300">
                </div>
                <div class="order_formcell">
                    <label>Email <span class="red">*</span>
                    </label>
                    <input type="text" id="anketa_mail" class="w300">
                </div>
            </div>

            <div class="order_formline">
                <div class="order_formcell">
                    <label>День рождения<span class="red">*</span>
                    </label>
                    <input type="text" id="anketa_day" class="w180">
                </div>
                <div class="order_formcell">
                    <label>Месяц рождения<span class="red">*</span>
                    </label>
                    <input type="text" id="anketa_month" class="w180">
                </div>
                <div class="order_formcell">
                    <label>Год рождения<span class="red">*</span>
                    </label>
                    <input type="text" id="anketa_year" class="w180">
                </div>
            </div>

            <div class="order_formline">
                <div class="order_formcell">
                    <label>Напишите немного о себе <span class="red">*</span>
                    </label>
                    <textarea id="anketa_text"></textarea>
                </div>
            </div>


            <div class="order_formline">
                <div class="errors_line">Заполните обязательные поля</div>
                <input type="submit" value="Отправить" class="send_button" id="send_anketa">
            </div>
        </div>
    </div>
</div>

<div class="popup feedback">
    <div class="close"></div>
    <div class="cart_preloader"></div>
    <div class="full_cart_data">
        <h4>Оставьте свой отзыв</h4>
        <div class="order_formline">
            <div class="order_formcell">
                <label>ФИО <span class="red">*</span>
                </label>
                <input type="text" name="f_fio" id="feedback_fio" style="width:640px">
            </div>
        </div>


        <div class="order_formline">
            <div class="order_formcell">
                <label>Телефон</label>
                <input type="text" name="f_phone" id="feedback_phone" style="width:300px">
                <small>Телефон не будет отображаться на сайте.</small>
            </div>

            <div class="order_formcell">
                <label>Email</label>
                <input type="text" name="f_email" id="feedback_mail" style="width:300px">
            </div>
        </div>

        <div class="order_formline">
            <div class="order_formcell">
                <label>Текст отзыва <span class="red">*</span>
                </label>
                <textarea name="description" id="feedback_text"></textarea>
            </div>
        </div>

        <div class="order_formline">
            <div class="errors_line">Заполните обязательные поля</div>
            <input type="submit" value="Отправить" class="send_button" id="send_feedback">
        </div>
    </div>
</div>


<div class="popup vote">
    <div class="close"></div>
    <div class="full_cart_data">
        <div class="site_close">
            <h2>Выберите социальную сеть для голосования</h2>
            <input type="hidden" id="vote_url" value="">
            <input type="hidden" id="vote_id" value="">
            <input type="hidden" id="vote_count" value="">
            <input type="hidden" id="vote_title" value="">
            <input type="hidden" id="vote_desc" value="">
            <input type="hidden" id="vote_img" value="">
            <a href="" id="vk" class="voter"><img src="<?php echo get_template_directory_uri(); ?>/img/v_vk.png">
            </a>
            <a href="" id="fb" class="voter"><img src="<?php echo get_template_directory_uri(); ?>/img/v_fb.png">
            </a>
            <a href="" id="tw" class="voter"><img src="<?php echo get_template_directory_uri(); ?>/img/v_tw.png">
            </a>
            <a href="" id="ok" class="voter"><img src="<?php echo get_template_directory_uri(); ?>/img/v_ok.png">
            </a>
            <a href="" id="mm" class="voter"><img src="<?php echo get_template_directory_uri(); ?>/img/v_mm.png">
            </a>
        </div>
    </div>
</div>

<div class="popup vote_complete">
    <div class="close"></div>
    <div class="full_cart_data">
        <div class="site_close">
            <h2>Вы уже проголосовали!</h2>
        </div>
    </div>
</div>






<div class="popup close_site" value="0">
    <div class="close"></div>
    <div class="full_cart_data">
        <div class="site_close">
            <h2>Мы всегда рады Вам, но сейчас наши мастера сладко спят :)</h2> Мы сможем принять Ваш заказ с 10.00 </div>
    </div>
</div>

<div class="popup contest_loader">

    <div class="full_cart_data">
        <div class="site_close">
            <h2>Отправка...</h2>

        </div>
    </div>
    <div class="cart_preloader"></div>
</div>

<div class="popup logout">
    <div class="close"></div>
    <div class="full_cart_data">
        <div class="site_close">
            <h2>Вы вышли из личного кабинета. Ждем Вас снова!</h2>
        </div>
    </div>
</div>

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