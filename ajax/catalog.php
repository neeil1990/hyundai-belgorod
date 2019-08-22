<?php

switch ($_REQUEST['action']) {
    case 'get_car_order_form':
        ?>
        <div class="car-order-form form">
            <div class="errors js-errors"></div>
            <div class="success js-success"></div>
            <form action="">
                <div class="hide-this">
                    <input type="text" name="AUTO" id="AUTO"  class="js-car-id" title="">
                </div>
                <div class="form-row">
                    <i class="form-input custom-text-input">
                        <input
                            type="text"
                            placeholder="Имя*"
                            name="NAME"
                            id="NAME"
                        />
                    </i>
                </div>

                <div class="form-row">
                    <i class="form-input custom-text-input">
                        <input
                            type="text"
                            placeholder="Номер телефона*"
                            class="js-phone-mask"
                            name="PHONE"
                            id="PHONE"
                        />
                    </i>
                </div>

                <div class="form-row">
                    <i class="form-input custom-text-input">
                        <input
                            type="text"
                            placeholder="Email*"
                            name="EMAIL"
                            id="EMAIL"
                        />
                    </i>
                </div>

                <div class="form-row2">
                    Удобный способ связи
                </div>
                <div class="form-row3">
                    <label>
                        <input class="js-custom-checkbox default-checkbox" type="radio" value="Телефон" name="METHOD_COMMUNICATION">
                        Телефон
                    </label>
                    <label>
                        <input class="js-custom-checkbox default-checkbox" type="radio" value="Электронная почта" name="METHOD_COMMUNICATION">
                        Электронная почта
                    </label>
                </div>
                <hr>
                <div class="form-row4">
                    <label>
                        <input class="js-custom-checkbox default-checkbox" type="checkbox" value="1" name="AGREE_DATA_PROCESSING">
                        <span style="display: inline-block;">Я согласен на обработку<br><a href="/ajax/obrabotka-dannykh.php" class="js-ajax-content" style="outline: none;">персональных данных</a></span>
                    </label>
                </div>

                <div class="form-row">
                    <button class="button-order">
					<span class="button-order-title">
						Забронировать
					</span>
                    </button>
                </div>
                <input type="reset" class="form_reset" style="display: none;" />
            </form>
        </div>
        <?
        break;
    case 'get_car_testdrive_form':
        ?>
        <div class="car-order-form form">
            <div class="errors js-errors"></div>
            <div class="success js-success"></div>
            <form action="">
                <div class="hide-this">
                    <input type="text" name="AUTO" id="AUTO"  class="js-car-id" title="">
                </div>
                <div class="form-row">
                    <i class="form-input custom-text-input">
                        <input type="text" placeholder="Имя*" name="NAME" id="NAME">
                    </i>
                </div>

                <div class="form-row">
                    <i class="form-input custom-text-input">
                        <input
                            type="text"
                            placeholder="Номер телефона*"
                            class="js-phone-mask"
                            name="PHONE"
                            id="PHONE"
                        />
                    </i>
                </div>

                <div class="form-row">
                    <i class="form-input custom-text-input">
                        <input
                            type="text"
                            placeholder="Email*"
                            name="EMAIL"
                            id="EMAIL"
                        />
                    </i>
                </div>

                <div class="form-row2">Удобный способ связи</div>
                <div class="form-row2">
                    <label>
                        <input class="js-custom-checkbox default-checkbox" type="radio" value="Телефон" name="METHOD_COMMUNICATION">
                        Телефон
                    </label>
                    <label>
                        <input class="js-custom-checkbox default-checkbox" type="radio" value="Электронная почта" name="METHOD_COMMUNICATION">
                        Электронная почта
                    </label>
                </div>
                <hr>
                <div class="form-row4">
                    <label>
                        <input class="js-custom-checkbox default-checkbox" type="checkbox" value="1" name="AGREE_DATA_PROCESSING">
                        <span style="display: inline-block;">Я согласен на обработку<br><a href="/ajax/obrabotka-dannykh.php" class="js-ajax-content" style="outline: none;">персональных данных</a></span>
                    </label>

                </div>
                <div class="form-row">
                    <button class="button-order">
                        <span class="button-order-title">Подать заявку на тест-драйв</span>
                    </button>
                </div>
                <input type="reset" class="form_reset" style="display: none;" />
            </form>
        </div>
        <?
        break;
    case 'get_car_question_form':
        ?>
        <div class="car-order-form form">
            <div class="errors js-errors"></div>
            <div class="success js-success"></div>
            <form action="">
                <div class="hide-this">
                    <input type="text" name="AUTO" id="AUTO"  class="js-car-id" title="">
                </div>
                <div class="form-row">
                    <i class="form-input custom-text-input">
                        <input type="text" placeholder="Имя*" name="NAME" id="NAME">
                    </i>
                </div>

                <div class="form-row">
                    <i class="form-input custom-text-input">
                        <input
                            type="text"
                            placeholder="Номер телефона*"
                            class="js-phone-mask"
                            name="PHONE"
                            id="PHONE"
                        />
                    </i>
                </div>

                <div class="form-row">
                    <i class="form-input custom-text-input">
                        <input
                            type="text"
                            placeholder="Email*"
                            name="EMAIL"
                            id="EMAIL"
                        />
                    </i>
                </div>

                <div class="form-row2">
                    Удобный способ связи
                </div>
                <div class="form-row3">
                    <label>
                        <input class="js-custom-checkbox default-checkbox" type="radio" value="Телефон" name="METHOD_COMMUNICATION">
                        Телефон
                    </label>
                    <label>
                        <input class="js-custom-checkbox default-checkbox" type="radio" value="Электронная почта" name="METHOD_COMMUNICATION">
                        Электронная почта
                    </label>
                </div>

                <div class="form-row">
                    <i class="form-textarea">
                        <textarea placeholder="Ваш вопрос" name="QUESTION"></textarea>
                    </i>
                </div>

                <div class="form-row4">
                    <label>
                        <input class="js-custom-checkbox default-checkbox" type="checkbox" value="1" name="AGREE_DATA_PROCESSING">
                        <span style="display: inline-block;">Я согласен на обработку<br><a href="/ajax/obrabotka-dannykh.php" class="js-ajax-content" style="outline: none;">персональных данных</a></span>
                    </label>

                </div>
                <div class="form-row">
                    <button class="button-order">
					<span class="button-order-title">
						Задать вопрос
					</span>
                    </button>
                </div>
                <input type="reset" class="form_reset" style="display: none;" />
            </form>
        </div>
        <?
        break;

        case 'get_credit_info_form':
        ?>
        <div class="car-order-form form">
            <div class="errors js-errors"></div>
            <div class="success js-success"></div>
            <form action="">
                <div class="hide-this">
                    <input type="text" name="CAR" id="CAR"  class="js-car-id" title="">
                    <input type="text" name="CREDIT_INFO_LINK" id="CREDIT_INFO_LINK"  class="js-credit-info-link" title="">
                    <input type="text" name="CREDIT_PROGRAM" id="CREDIT_PROGRAM"  class="js-credit-program" title="">
                    <input type="text" name="CREDIT_DOWN_PAYMENT_PERCENTAGE" id="CREDIT_DOWN_PAYMENT_PERCENTAGE"  class="js-credit-down-payment" title="">
                    <input type="text" name="CREDIT_TERM_MONTHS" id="CREDIT_TERM_MONTHS"  class="js-credit-term" title="">
                </div>
                <div class="form-row">
                    <i class="form-input custom-text-input">
                        <input
                                type="text"
                                placeholder="Фамилия*"
                                name="SURNAME"
                                id="SURNAME"
                        />
                    </i>
                </div>
                <div class="form-row">
                    <i class="form-input custom-text-input">
                        <input
                                type="text"
                                placeholder="Имя*"
                                name="NAME"
                                id="NAME"
                        />
                    </i>
                </div>

                <div class="form-row">
                    <i class="form-input custom-text-input">
                        <input
                                type="text"
                                placeholder="Email*"
                                name="EMAIL"
                                id="EMAIL"
                        />
                    </i>
                </div>

                <div class="form-row4">
                    <label>
                        <input class="js-custom-checkbox default-checkbox" type="checkbox" value="1" name="AGREE_DATA_PROCESSING">
                        <span style="display: inline-block;">Я согласен на обработку<br><a href="/ajax/obrabotka-dannykh.php" class="js-ajax-content" style="outline: none;">персональных данных</a></span>
                    </label>
                </div>

                <div class="form-row">
                    <button class="button-order">
                        <span class="button-order-title">Отправить</span>
                    </button>
                </div>

            </form>
        </div>
        <?
        break;
}
?>
