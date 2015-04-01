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
</div><!-- popup cartform -->