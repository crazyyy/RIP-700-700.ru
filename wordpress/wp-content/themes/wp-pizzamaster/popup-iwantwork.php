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
</div><!-- popup iwantwork -->