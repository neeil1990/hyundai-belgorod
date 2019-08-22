<script>
    $(document).ready(function () {
        $('body').addClass('autos');
    });
</script>

<script>
    $(document).ready(function(){
        $('body').addClass('inner');
    });
</script>


<script>
    $(document).ready(function () {
        /*
         * Кредитный калькулятор
         *
         */

        function creditCalc(options) {
            var self = this;
            this.elements = options.elements;
            this.creditParameters = options.parameters;
            this.creditParameters.fee.val = this.creditParameters.fee.default;
            this.creditParameters.term.val = this.creditParameters.term.default;
            this.programList = options.programList;
            this.init();
        }

        creditCalc.prototype.open = function () {
            this.elements.$holder.addClass('is-open');
        }

        creditCalc.prototype.close = function () {
            this.elements.$holder.removeClass('is-open');
        }

        creditCalc.prototype.init = function () {
            var self = this;
            this.elements.$close.on('click', function (event) {
                event.preventDefault();
                self.close();
            });

            // Ползунки
            this.sliders = {
                fee: {
                    $item: $(".js-calc-range-slider--initial-fee"),
                    min: self.creditParameters.fee.min,
                    max: self.creditParameters.fee.max,
                    from: self.creditParameters.fee.default,
                    step: 1,
                    units: '%',
                    grid_num: 1,
                },
                term: {
                    $item: $(".js-calc-range-slider--сredit-term"),
                    min: self.creditParameters.term.min,
                    max: self.creditParameters.term.max,
                    from: self.creditParameters.term.default,
                    step: 12,
                    units: '',
                    grid_num: 2,
                }
            }

            // проценты в рублях первоначального взноса
            var $feeSumInput = $('.js-initial-fee-value');
            var $feeSumShow = $('.js-initial-fee-value-show');
            var $monthShow = $('.js-initial-term-value-show');
            this.sliders.fee.$item.on('slider.change slider.start slider.update', function (event, $slider, slider) {
                var percentVal = (self.creditParameters.amount / 100) * slider.from;
                self.creditParameters.fee.val = slider.from;
                $feeSumInput.val(Math.round(percentVal) + ' р');
                $feeSumShow.text(number_format(Math.round(percentVal), 0, '.', ' '));
                if ($('#pseudo').length) {
                    $('#pseudo').remove();
                }
                var css = '<style id="pseudo">.autos.inner .js-calc-range-slider--initial-fee .irs-slider::before{content: "' + slider.from + '%";}</style>';
                document.head.insertAdjacentHTML('beforeEnd', css);
            });

            this.sliders.term.$item.on('slider.change slider.start slider.update', function (event, $slider, slider) {
                self.creditParameters.term.val = slider.from;
                $monthShow.text(slider.from);

                if ($('#pseudo--сredit-term').length) {
                    $('#pseudo--сredit-term').remove();
                }
                var css = '<style id="pseudo--сredit-term">.autos.inner .js-calc-range-slider--сredit-term .irs-slider::before{content: "' + slider.from + '";}</style>';
                document.head.insertAdjacentHTML('beforeEnd', css);
            });

            // изменение первоначального взноса в рублях
            $feeSumInput.on('input change paste keyup', function () {
                var ionRangeSlider = self.sliders.fee.ionRangeSlider;
                var sum = parseInt($(this).val());
                var percentOfSum = sum / (self.creditParameters.amount / 100);
                percentOfSum = Math.round(percentOfSum);
                ionRangeSlider.update({
                    from: percentOfSum,
                });
            });


            for (var sliderName in this.sliders) {
                // тут вешаю ползунки

                (function (sliderData) {
                    var $rangeSlider = sliderData.$item.find('.js-range-slider__holder'),
                        $rangeSliderValue = sliderData.$item.find('.js-range-slider-value');


                    $rangeSlider.ionRangeSlider({
                        min: sliderData.min,
                        max: sliderData.max,
                        from: sliderData.from,
                        /* сетка */
                        grid: true,
                        grid_num: sliderData.grid_num,
                        hide_min_max: true,
                        hide_from_to: true,
                        /* Добавление едениц */
                        postfix: sliderData.units,
                        prettify: function (n) {
                            return n + sliderData.units;
                        },
                        onChange: function (slider) {
                            // Установлю значение
                            $rangeSliderValue.val(slider.from + sliderData.units);
                            $rangeSlider.trigger('slider.change', [$rangeSlider, slider]);
                        },
                        onStart: function (slider) {
                            $rangeSliderValue.val(slider.from + sliderData.units);
                            $rangeSlider.trigger('slider.start', [$rangeSlider, slider]);
                        },
                        onUpdate: function (slider) {
                            $rangeSliderValue.val(slider.from + sliderData.units);
                            $rangeSlider.trigger('slider.update', [$rangeSlider, slider]);
                        },
                        onFinish: function (slider) {
                            $rangeSliderValue.val(slider.from + sliderData.units);
                            $rangeSlider.trigger('slider.update', [$rangeSlider, slider]);
                        },
                        step: sliderData.step
                    });

                    // Saving it's instance to var
                    var ionRangeSlider = $rangeSlider.data("ionRangeSlider");
                    sliderData.ionRangeSlider = ionRangeSlider;
                    // При изменении значения в input обновлю слайдер
                    $rangeSliderValue.on('input change paste keyup', function () {
                        ionRangeSlider.update({
                            from: $(this).val(),
                        });
                    });

                })(this.sliders[sliderName]);
            }

            // Переключение вариантов
            $('body').on('click', '.js-condition-item__radio-button', function () {
                $('.js-credit-calc__condition-item').removeClass('credit-calc__condition-item--active');
                $(this).parents('.js-credit-calc__condition-item').addClass('credit-calc__condition-item--active');
            });
        }

        /**
         * Обновление калькулятора
         *
         */

        creditCalc.prototype.update = function () {
            this.calc();
            var programList = this.getProgramList();

            if (programList.length > 0) {
                var minMonthlyPayment = this.getMinMonthlyPayment(programList);
                $('.js-credit-calc__monthly-payment').html(number_format(minMonthlyPayment, 0, '.', ' '));
            }

            this.updateProgramListView(programList);
            $('.js-credit-calc__payment-sum').html(number_format(this.creditParameters.creditSumm, 0, '.', ' '));


        };

        /**
         * Получение минимального ежемесячного платежа
         *
         */

        creditCalc.prototype.getMinMonthlyPayment = function (programList) {
            var paymentList = [];
            programList.forEach(function (item) {
                paymentList.push(item.PAYMENT);
            });
            return Math.min.apply(null, paymentList);

        };

        /**
         * Обновляет html списка предложений
         *
         */

        creditCalc.prototype.updateProgramListView = function (programList) {
            var programListHtml = '';
            var self = this;

            if (programList.length > 0) {

                programList.forEach(function (item) {

                    var calcData = {
                        // 'show-html':1, // debug
                        'car_id': self.creditParameters.car.id,
                        'credit_program_id': item.ID,
                        'credit_down_payment_percent': self.creditParameters.fee.val,
                        'credit_term_months': self.creditParameters.term.val,
                    };
                    var printPage = '/pdf/credit/';
                    var printQuery = $.param(calcData);
                    var printLink = printPage + '?' + printQuery;

                    var formData = JSON.stringify(calcData);

                    programListHtml +=
                        '<div id="' + item.ID + '" class="credit-calc__condition-item js-credit-calc__condition-item">' +
                        '<div class="condition-item__info base__inner">' +
                        '<div class="condition-item__info-inner">' +
                        '<table class="condition-item__info-holder">' +
                        '<tbody>' +
                        '<tr>' +
                        '<td class="condition-item__info-holder__col title-wrap">' +
                        '<div class="condition-item__title">' +
                        '<span class="condition-item__title-text">' +
                        item.NAME +
                        '</span>' +
                        '</div>' +
                        '<span class="condition-item__info-more mobile_hidden">Подробнее</span>' +
                        '<div class="mobile_visible credit_info">' +
                        '<div class="condition-item__percent">' +
                        item.RATE_CREDIT + '<span>%</span>' +
                        '</div><p>Ставка</p>' +
                        '</div>' +
                        '<span class="seporator"></span>' +
                        '<div class="mobile_visible credit_info">' +
                        '<div class="condition-item__percent">' +
                        number_format(item.PAYMENT, 0, '.', ' ') + '<span class="rub">&#8381;</span>' +
                        '</div><p>платеж</p>' +
                        '</div>' +
                        '<span class="docs mobile_hidden">' + item.DOCUMENTS + '</span>' +
                        '<div class="clearfix sd_visible tablet_visible"></div>' +
                        '<div class="tablet_visible sd_visible credit_info">' +
                        '<div class="condition-item__percent">' +
                        item.RATE_CREDIT + '<span>%</span>' +
                        '</div><p>Ставка</p>' +
                        '</div>' +
                        '<div class="tablet_visible sd_visible credit_info">' +
                        '<div class="condition-item__percent">' +
                        number_format(item.PAYMENT, 0, '.', ' ') + '<span class="rub">&#8381;</span>' +
                        '</div><p>платеж</p>' +
                        '</div>' +
                        '<span class="condition-item__info-more mobile_visible">Подробнее</span>' +
                        '<div class="condition-item__buttons base__inner desktop_hidden mobile_visible">' +
                        '<span data-print-link="' + printLink + '" class="condition-item__button js-condition-item__send-form send_mail_btn">Отправить на e-mail</span>' +
                        '<a href="' + printLink + '" target="_blank" class="condition-item__button print_btn">Распечатать</a>' +
                        '</div>' +
                        '</td>' +
                        '<td class="condition-item__info-holder__col percent-wrap">' +
                        '<div class="condition-item__percent">' +
                        item.RATE_CREDIT + '<span>%</span>' +
                        '</div><p>Ставка</p>' +
                        '</td>'

                        +
                        '<td class="condition-item__info-holder__col payment-wrap">' +
                        '<div class="condition-item__payment-month">' +
                        number_format(item.PAYMENT, 0, '.', ' ') + '<span class="rub">&#8381;</span>' +
                        '</div><p>платеж</p>' +
                        '</td>'

                        +
                        '<td class="condition-item__info-holder__col description-wrap">' +
                        '<div class="condition-item__buttons base__inner">' +
                        '<span data-print-link="' + printLink + '" class="condition-item__button js-condition-item__send-form send_mail_btn">Отправить на e-mail</span>' +
                        '<a href="' + printLink + '" target="_blank" class="condition-item__button print_btn">Распечатать</a>' +
                        '</div>' +
                        '</td>' +
                        '</tr>' +
                        '</tbody>' +
                        '</table>' +
                        '</div>' +
                        '</div>' +
                        '</div><hr />'

                });

            } else {
                programListHtml += 'Не найдена ни одна подходящая кредитная программа';
            }

            self.elements.$conditionsHolder.html(programListHtml);
            // Выставлю активность первому условию
            self.elements.$conditionsHolder.find('.js-credit-calc__condition-item')
                .eq(0)
                .addClass('credit-calc__condition-item--active');
        }

        creditCalc.prototype.calc = function () {
            // сумма первоначального взноса
            this.creditParameters.fee.sum = (this.creditParameters.amount / 100) * this.creditParameters.fee.val;
            // сумма кредита
            this.creditParameters.creditSumm =
                this.creditParameters.amount - this.creditParameters.fee.sum;

        }

        /**
         *
         * Находит программы, подходящие по данным калькулятора
         *
         */
        creditCalc.prototype.getProgramList = function () {
            var self = this;
            var suitableProgramList = this.programList.filter(function (item) {
                // Попадает в интревал по сроку кредита
                var in_term_interval = ((parseFloat(self.creditParameters.term.val) >= parseFloat(item.CREDIT_TIME_MIN)) &&
                    (parseFloat(self.creditParameters.term.val) <= parseFloat(item.CREDIT_TIME_MAX)));
                // Попадает в интревал по процентной ставке
                var in_fee_interval = ((parseFloat(self.creditParameters.fee.val) >= parseFloat(item.INITIAL_PAY_MIN)) &&
                    (parseFloat(self.creditParameters.fee.val) <= parseFloat(item.INITIAL_PAY_MAX)));
                // Попадает в интревал по сумме кредита
                var in_amount_interval = ((parseFloat(self.creditParameters.amount) >= parseFloat(item.SUMM_CREDIT_MIN)) &&
                    (parseFloat(self.creditParameters.amount) <= parseFloat(item.SUMM_CREDIT_MAX)));
                if (in_term_interval && in_fee_interval && in_amount_interval) {
                    return item;
                }
            });

            if (suitableProgramList.length > 0) {
                // найду ежемесячный платеж
                suitableProgramList = suitableProgramList.map(function (item) {

                    var procent = item.RATE_CREDIT;
                    var creditPeriodMonths = self.creditParameters.term.val;
                    var creditSumm = self.creditParameters.creditSumm;
                    var lifeInsurancePercent = parseFloat(item.LIFE_INSURANCE_PERCENT);
                    var lifeInsurance = 0;

                    if (lifeInsurancePercent) {

                        /* Старый расчет:
                         // Стоимость страхования жизни рассчитывается как
                         // стоимость тарифа [3.9%], умноженная на сумму кредита
                         // и умноженная на срок кредита [кол-во лет].
                         lifeInsurance = (creditSumm/100) * lifeInsurancePercent  * (creditPeriodMonths/12);
                         */

                        /*
                         Страхование жизни:
                         Расчет происходит согласно формуле:

                         СП = ( (К/100) * Т/12 * N ) / ( 1 - (N/100) * Т/12  )
                         где
                         СП – Страховая премия
                         К – сумма кредита без учета Страховой премии
                         Т – страховой тариф, равный 3,9% в год
                         N – первоначальный срок кредита в месяцах


                         */

                        lifeInsurance = ((creditSumm / 100) * lifeInsurancePercent / 12 * creditPeriodMonths) /
                            (1 - (creditPeriodMonths / 100) * lifeInsurancePercent / 12);

                    }

                    /*
                     Ежемесячный платеж
                     Расчет происходит согласно формуле:
                     X= (S+I)*((P/100/12)/(1-(1+(P/100/12))^-N))

                     Где
                     X – ежемесячный платеж
                     S – сумма кредита
                     I - Страхование жизни
                     P – годовая процентная ставка
                     N – количество месяцев
                     ^ — возведение в степень
                     */
                    var payment = (creditSumm + lifeInsurance) * (
                        (procent / 100 / 12) /
                        (1 - Math.pow(1 + (procent / 100 / 12), -creditPeriodMonths))
                    );


                    item.PAYMENT = Math.ceil(payment / 100) * 100;

                    return item;

                });

                // отсортирую по ежемесячному платежу (по возростанию)
                suitableProgramList.sort(function (a, b) {
                    if (a.PAYMENT > b.PAYMENT) {
                        return 1;
                    }
                    if (a.PAYMENT < b.PAYMENT) {
                        return -1;
                    }
                    // a должно быть равным b
                    return 0;
                });

            }

            return suitableProgramList;
        };

        creditCalc.prototype.getProgramListById = function (id) {
            var program = false;
            this.programList.forEach(function (item) {
                if (parseInt(item.ID) == id) {
                    program = item;
                }
            });
            return program;
        };

        var creditParameters =
            {
                "amount": 405000,
                "fee": {
                    "default": 30,
                    "min": 20,
                    "max": 90
                },
                "term": {
                    "default": 36,
                    "min": 12,
                    "max": 60
                },
                "car": {
                    "id": 1003551
                }
            };
        var creditProgramList =
            [
                {
                    "ID": "5851",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "24",
                    "CREDIT_TIME_MAX": "36",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "2000000",
                    "RATE_CREDIT": "17.9",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435, \u0441\u043f\u0440\u0430\u0432\u043a\u0430 \u043e \u0434\u043e\u0445\u043e\u0434\u0430\u0445",
                    "LIFE_INSURANCE_PERCENT": "3.9",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)"
                },
                {
                    "ID": "5852",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "48",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "2000000",
                    "RATE_CREDIT": "18.4",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435, \u0441\u043f\u0440\u0430\u0432\u043a\u0430 \u043e \u0434\u043e\u0445\u043e\u0434\u0430\u0445",
                    "LIFE_INSURANCE_PERCENT": "3.9",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)\r\n"
                },
                {
                    "ID": "5853",
                    "INITIAL_PAY_MIN": "25",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "24",
                    "CREDIT_TIME_MAX": "36",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "1000000",
                    "RATE_CREDIT": "18.9",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": "3.9",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)\r\n"
                },
                {
                    "ID": "5854",
                    "INITIAL_PAY_MIN": "25",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "48",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "1000000",
                    "RATE_CREDIT": "19.4",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": "3.9",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)"
                },
                {
                    "ID": "5855",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "24",
                    "CREDIT_TIME_MAX": "36",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "2000000",
                    "RATE_CREDIT": "21.75",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u0421\u0442\u0430\u043d\u0434\u0430\u0440\u0442\u043d\u044b\u0439 \u043a\u0440\u0435\u0434\u0438\u0442",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435, \u0441\u043f\u0440\u0430\u0432\u043a\u0430 \u043e \u0434\u043e\u0445\u043e\u0434\u0430\u0445",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u0421\u0442\u0430\u043d\u0434\u0430\u0440\u0442\u043d\u0430\u044f \u043f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)"
                },
                {
                    "ID": "5856",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "48",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "2000000",
                    "RATE_CREDIT": "22.25",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u0421\u0442\u0430\u043d\u0434\u0430\u0440\u0442\u043d\u044b\u0439 \u043a\u0440\u0435\u0434\u0438\u0442",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435, \u0441\u043f\u0440\u0430\u0432\u043a\u0430 \u043e \u0434\u043e\u0445\u043e\u0434\u0430\u0445",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u0421\u0442\u0430\u043d\u0434\u0430\u0440\u0442\u043d\u0430\u044f \u043f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)"
                },
                {
                    "ID": "5857",
                    "INITIAL_PAY_MIN": "25",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "24",
                    "CREDIT_TIME_MAX": "36",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "1000000",
                    "RATE_CREDIT": "22.75",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u0421\u0442\u0430\u043d\u0434\u0430\u0440\u0442\u043d\u044b\u0439 \u043a\u0440\u0435\u0434\u0438\u0442",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u0421\u0442\u0430\u043d\u0434\u0430\u0440\u0442\u043d\u0430\u044f \u043f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)"
                },
                {
                    "ID": "5858",
                    "INITIAL_PAY_MIN": "25",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "48",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "1000000",
                    "RATE_CREDIT": "23.25",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u0421\u0442\u0430\u043d\u0434\u0430\u0440\u0442\u043d\u044b\u0439 \u043a\u0440\u0435\u0434\u0438\u0442",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u0421\u0442\u0430\u043d\u0434\u0430\u0440\u0442\u043d\u0430\u044f \u043f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)\r\n"
                },
                {
                    "ID": "5859",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "24",
                    "CREDIT_TIME_MAX": "36",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "2000000",
                    "RATE_CREDIT": "23.75",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435, \u0441\u043f\u0440\u0430\u0432\u043a\u0430 \u043e \u0434\u043e\u0445\u043e\u0434\u0430\u0445",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0431\u0435\u0437 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e\u0433\u043e \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u044f \u041a\u0410\u0421\u041a\u041e. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)"
                },
                {
                    "ID": "5860",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "48",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "2000000",
                    "RATE_CREDIT": "24.25",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435, \u0441\u043f\u0440\u0430\u0432\u043a\u0430 \u043e \u0434\u043e\u0445\u043e\u0434\u0430\u0445",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0431\u0435\u0437 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e\u0433\u043e \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u044f \u041a\u0410\u0421\u041a\u041e. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)"
                },
                {
                    "ID": "5861",
                    "INITIAL_PAY_MIN": "25",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "24",
                    "CREDIT_TIME_MAX": "36",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "1000000",
                    "RATE_CREDIT": "24.75",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0431\u0435\u0437 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e\u0433\u043e \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u044f \u041a\u0410\u0421\u041a\u041e. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)"
                },
                {
                    "ID": "5862",
                    "INITIAL_PAY_MIN": "25",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "48",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "1000000",
                    "RATE_CREDIT": "25.25",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0431\u0435\u0437 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e\u0433\u043e \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u044f \u041a\u0410\u0421\u041a\u041e. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)"
                },
                {
                    "ID": "19797",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "24",
                    "CREDIT_TIME_MAX": "36",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "2000000",
                    "RATE_CREDIT": "20",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435, \u0441\u043f\u0440\u0430\u0432\u043a\u0430 \u043e \u0434\u043e\u0445\u043e\u0434\u0430\u0445",
                    "LIFE_INSURANCE_PERCENT": "3.9",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438, \u0431\u0435\u0437 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e\u0433\u043e \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u044f \u041a\u0410\u0421\u041a\u041e. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)"
                },
                {
                    "ID": "19798",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "48",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "2000000",
                    "RATE_CREDIT": "20.5",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435, \u0441\u043f\u0440\u0430\u0432\u043a\u0430 \u043e \u0434\u043e\u0445\u043e\u0434\u0430\u0445",
                    "LIFE_INSURANCE_PERCENT": "3.9",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438, \u0431\u0435\u0437 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e\u0433\u043e \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u044f \u041a\u0410\u0421\u041a\u041e. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)\r\n"
                },
                {
                    "ID": "19799",
                    "INITIAL_PAY_MIN": "25",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "24",
                    "CREDIT_TIME_MAX": "36",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "1000000",
                    "RATE_CREDIT": "21",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": "3.9",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438, \u0431\u0435\u0437 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e\u0433\u043e \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u044f \u041a\u0410\u0421\u041a\u041e. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)"
                },
                {
                    "ID": "19800",
                    "INITIAL_PAY_MIN": "25",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "48",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "100000",
                    "SUMM_CREDIT_MAX": "1000000",
                    "RATE_CREDIT": "21.5",
                    "TIME_DECISION": "15 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": "3.9",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438, \u0431\u0435\u0437 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e\u0433\u043e \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u044f \u041a\u0410\u0421\u041a\u041e. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0421\u0435\u0442\u0435\u043b\u0435\u043c \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21162168 27.06.2013)"
                },
                {
                    "ID": "5863",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "29.99",
                    "CREDIT_TIME_MIN": "36",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "50000",
                    "SUMM_CREDIT_MAX": "6500000",
                    "RATE_CREDIT": "20",
                    "TIME_DECISION": "30 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u041f\u0430\u0440\u0442\u043d\u0435\u0440\u0441\u043a\u043e\u0435 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c \u041a\u0410\u0421\u041a\u041e \u0443 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u044b\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439-\u043f\u0430\u0440\u0442\u043d\u0435\u0440\u043e\u0432 \u0411\u0430\u043d\u043a\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0420\u0443\u0441\u0444\u0438\u043d\u0430\u043d\u0441 \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21161792 \u043e\u0442 13.02.2013)"
                },
                {
                    "ID": "5864",
                    "INITIAL_PAY_MIN": "30",
                    "INITIAL_PAY_MAX": "49.99",
                    "CREDIT_TIME_MIN": "36",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "50000",
                    "SUMM_CREDIT_MAX": "6500000",
                    "RATE_CREDIT": "19.5",
                    "TIME_DECISION": "30 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u041f\u0430\u0440\u0442\u043d\u0435\u0440\u0441\u043a\u043e\u0435 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c \u041a\u0410\u0421\u041a\u041e \u0443 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u044b\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439-\u043f\u0430\u0440\u0442\u043d\u0435\u0440\u043e\u0432 \u0411\u0430\u043d\u043a\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0420\u0443\u0441\u0444\u0438\u043d\u0430\u043d\u0441 \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21161792 \u043e\u0442 13.02.2013)"
                },
                {
                    "ID": "5865",
                    "INITIAL_PAY_MIN": "50",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "36",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "50000",
                    "SUMM_CREDIT_MAX": "6500000",
                    "RATE_CREDIT": "19",
                    "TIME_DECISION": "30 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u041f\u0430\u0440\u0442\u043d\u0435\u0440\u0441\u043a\u043e\u0435 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c \u041a\u0410\u0421\u041a\u041e \u0443 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u044b\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439-\u043f\u0430\u0440\u0442\u043d\u0435\u0440\u043e\u0432 \u0411\u0430\u043d\u043a\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0420\u0443\u0441\u0444\u0438\u043d\u0430\u043d\u0441 \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21161792 \u043e\u0442 13.02.2013)"
                },
                {
                    "ID": "5866",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "29.99",
                    "CREDIT_TIME_MIN": "12",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "50000",
                    "SUMM_CREDIT_MAX": "6500000",
                    "RATE_CREDIT": "20.5",
                    "TIME_DECISION": "30 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u0421\u0442\u0430\u043d\u0434\u0430\u0440\u0442\u043d\u044b\u0439 \u043a\u0440\u0435\u0434\u0438\u0442",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c \u041a\u0410\u0421\u041a\u041e. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0420\u0443\u0441\u0444\u0438\u043d\u0430\u043d\u0441 \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21161792 \u043e\u0442 13.02.2013)"
                },
                {
                    "ID": "5867",
                    "INITIAL_PAY_MIN": "30",
                    "INITIAL_PAY_MAX": "49.99",
                    "CREDIT_TIME_MIN": "12",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "50000",
                    "SUMM_CREDIT_MAX": "6500000",
                    "RATE_CREDIT": "20",
                    "TIME_DECISION": "30 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u0421\u0442\u0430\u043d\u0434\u0430\u0440\u0442\u043d\u044b\u0439 \u043a\u0440\u0435\u0434\u0438\u0442",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c \u041a\u0410\u0421\u041a\u041e. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0420\u0443\u0441\u0444\u0438\u043d\u0430\u043d\u0441 \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21161792 \u043e\u0442 13.02.2013)"
                },
                {
                    "ID": "5868",
                    "INITIAL_PAY_MIN": "50",
                    "INITIAL_PAY_MAX": "90",
                    "CREDIT_TIME_MIN": "12",
                    "CREDIT_TIME_MAX": "60",
                    "SUMM_CREDIT_MIN": "50000",
                    "SUMM_CREDIT_MAX": "6500000",
                    "RATE_CREDIT": "19.5",
                    "TIME_DECISION": "30 \u043c\u0438\u043d\u0443\u0442",
                    "NAME": "\u0421\u0442\u0430\u043d\u0434\u0430\u0440\u0442\u043d\u044b\u0439 \u043a\u0440\u0435\u0434\u0438\u0442",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424, \u0432\u043e\u0434\u0438\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0435 \u0443\u0434\u043e\u0441\u0442\u043e\u0432\u0435\u0440\u0435\u043d\u0438\u0435",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c \u041a\u0410\u0421\u041a\u041e. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041e\u041e\u041e &quot;\u0420\u0443\u0441\u0444\u0438\u043d\u0430\u043d\u0441 \u0411\u0430\u043d\u043a&quot; (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u21161792 \u043e\u0442 13.02.2013)"
                },
                {
                    "ID": "19801",
                    "INITIAL_PAY_MIN": "0",
                    "INITIAL_PAY_MAX": "19.99",
                    "CREDIT_TIME_MIN": "6",
                    "CREDIT_TIME_MAX": "72",
                    "SUMM_CREDIT_MIN": "90000",
                    "SUMM_CREDIT_MAX": "2500000",
                    "RATE_CREDIT": "18.9",
                    "TIME_DECISION": "1 \u0447\u0430\u0441",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424",
                    "LIFE_INSURANCE_PERCENT": "3",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c \u041a\u0410\u0421\u041a\u041e \u0443 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u044b\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439-\u043f\u0430\u0440\u0442\u043d\u0435\u0440\u043e\u0432 \u0411\u0430\u043d\u043a\u0430 \u0438 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041f\u0410\u041e \u00ab\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a\u00bb (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u2116 963 \u043e\u0442 05.12.2014 \u0433\u043e\u0434\u0430)"
                },
                {
                    "ID": "19802",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "39.99",
                    "CREDIT_TIME_MIN": "6",
                    "CREDIT_TIME_MAX": "72",
                    "SUMM_CREDIT_MIN": "90000",
                    "SUMM_CREDIT_MAX": "2500000",
                    "RATE_CREDIT": "16.9",
                    "TIME_DECISION": "1 \u0447\u0430\u0441",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424",
                    "LIFE_INSURANCE_PERCENT": "3",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c \u041a\u0410\u0421\u041a\u041e \u0443 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u044b\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439-\u043f\u0430\u0440\u0442\u043d\u0435\u0440\u043e\u0432 \u0411\u0430\u043d\u043a\u0430 \u0438 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041f\u0410\u041e \u00ab\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a\u00bb (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u2116 963 \u043e\u0442 05.12.2014 \u0433\u043e\u0434\u0430)"
                },
                {
                    "ID": "19803",
                    "INITIAL_PAY_MIN": "40",
                    "INITIAL_PAY_MAX": "95",
                    "CREDIT_TIME_MIN": "6",
                    "CREDIT_TIME_MAX": "72",
                    "SUMM_CREDIT_MIN": "90000",
                    "SUMM_CREDIT_MAX": "2500000",
                    "RATE_CREDIT": "14.9",
                    "TIME_DECISION": "1 \u0447\u0430\u0441",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424",
                    "LIFE_INSURANCE_PERCENT": "3",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c \u041a\u0410\u0421\u041a\u041e \u0443 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u044b\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439-\u043f\u0430\u0440\u0442\u043d\u0435\u0440\u043e\u0432 \u0411\u0430\u043d\u043a\u0430 \u0438 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041f\u0410\u041e \u00ab\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a\u00bb (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u2116 963 \u043e\u0442 05.12.2014 \u0433\u043e\u0434\u0430)\r\n"
                },
                {
                    "ID": "19804",
                    "INITIAL_PAY_MIN": "0",
                    "INITIAL_PAY_MAX": "19.99",
                    "CREDIT_TIME_MIN": "6",
                    "CREDIT_TIME_MAX": "72",
                    "SUMM_CREDIT_MIN": "90000",
                    "SUMM_CREDIT_MAX": "2500000",
                    "RATE_CREDIT": "21.9",
                    "TIME_DECISION": "1 \u0447\u0430\u0441",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424",
                    "LIFE_INSURANCE_PERCENT": "3",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c\u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438 \u0443 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u044b\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439-\u043f\u0430\u0440\u0442\u043d\u0435\u0440\u043e\u0432 \u0411\u0430\u043d\u043a\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041f\u0410\u041e \u00ab\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a\u00bb (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u2116 963 \u043e\u0442 05.12.2014 \u0433\u043e\u0434\u0430)"
                },
                {
                    "ID": "19805",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "39.99",
                    "CREDIT_TIME_MIN": "6",
                    "CREDIT_TIME_MAX": "72",
                    "SUMM_CREDIT_MIN": "90000",
                    "SUMM_CREDIT_MAX": "2500000",
                    "RATE_CREDIT": "19.9",
                    "TIME_DECISION": "1 \u0447\u0430\u0441",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424",
                    "LIFE_INSURANCE_PERCENT": "3",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c\u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438 \u0443 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u044b\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439-\u043f\u0430\u0440\u0442\u043d\u0435\u0440\u043e\u0432 \u0411\u0430\u043d\u043a\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041f\u0410\u041e \u00ab\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a\u00bb (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u2116 963 \u043e\u0442 05.12.2014 \u0433\u043e\u0434\u0430)"
                },
                {
                    "ID": "19806",
                    "INITIAL_PAY_MIN": "40",
                    "INITIAL_PAY_MAX": "95",
                    "CREDIT_TIME_MIN": "6",
                    "CREDIT_TIME_MAX": "72",
                    "SUMM_CREDIT_MIN": "90000",
                    "SUMM_CREDIT_MAX": "2500000",
                    "RATE_CREDIT": "17.9",
                    "TIME_DECISION": "1 \u0447\u0430\u0441",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0441 \u0437\u0430\u0449\u0438\u0442\u043e\u0439 \u043f\u043b\u0430\u0442\u0435\u0436\u0435\u0439 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424",
                    "LIFE_INSURANCE_PERCENT": "3",
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c\u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u0435\u043c \u0436\u0438\u0437\u043d\u0438 \u0443 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u044b\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439-\u043f\u0430\u0440\u0442\u043d\u0435\u0440\u043e\u0432 \u0411\u0430\u043d\u043a\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041f\u0410\u041e \u00ab\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a\u00bb (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u2116 963 \u043e\u0442 05.12.2014 \u0433\u043e\u0434\u0430)\r\n"
                },
                {
                    "ID": "19807",
                    "INITIAL_PAY_MIN": "0",
                    "INITIAL_PAY_MAX": "19.99",
                    "CREDIT_TIME_MIN": "6",
                    "CREDIT_TIME_MAX": "72",
                    "SUMM_CREDIT_MIN": "90000",
                    "SUMM_CREDIT_MAX": "2500000",
                    "RATE_CREDIT": "20.9",
                    "TIME_DECISION": "1 \u0447\u0430\u0441",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0421\u0422\u0410\u041d\u0414\u0410\u0420\u0422",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c \u041a\u0410\u0421\u041a\u041e \u0443 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u044b\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439-\u043f\u0430\u0440\u0442\u043d\u0435\u0440\u043e\u0432 \u0411\u0430\u043d\u043a\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041f\u0410\u041e \u00ab\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a\u00bb (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u2116 963 \u043e\u0442 05.12.2014 \u0433\u043e\u0434\u0430)"
                },
                {
                    "ID": "19808",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "39.99",
                    "CREDIT_TIME_MIN": "6",
                    "CREDIT_TIME_MAX": "72",
                    "SUMM_CREDIT_MIN": "90000",
                    "SUMM_CREDIT_MAX": "2500000",
                    "RATE_CREDIT": "18.9",
                    "TIME_DECISION": "1 \u0447\u0430\u0441",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0421\u0422\u0410\u041d\u0414\u0410\u0420\u0422",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c \u041a\u0410\u0421\u041a\u041e \u0443 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u044b\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439-\u043f\u0430\u0440\u0442\u043d\u0435\u0440\u043e\u0432 \u0411\u0430\u043d\u043a\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041f\u0410\u041e \u00ab\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a\u00bb (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u2116 963 \u043e\u0442 05.12.2014 \u0433\u043e\u0434\u0430)"
                },
                {
                    "ID": "19809",
                    "INITIAL_PAY_MIN": "40",
                    "INITIAL_PAY_MAX": "95",
                    "CREDIT_TIME_MIN": "6",
                    "CREDIT_TIME_MAX": "72",
                    "SUMM_CREDIT_MIN": "90000",
                    "SUMM_CREDIT_MAX": "2500000",
                    "RATE_CREDIT": "16.9",
                    "TIME_DECISION": "1 \u0447\u0430\u0441",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0421\u0422\u0410\u041d\u0414\u0410\u0420\u0422",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0441 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u043c \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u0435\u043c \u041a\u0410\u0421\u041a\u041e \u0443 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u044b\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439-\u043f\u0430\u0440\u0442\u043d\u0435\u0440\u043e\u0432 \u0411\u0430\u043d\u043a\u0430. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041f\u0410\u041e \u00ab\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a\u00bb (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u2116 963 \u043e\u0442 05.12.2014 \u0433\u043e\u0434\u0430)"
                },
                {
                    "ID": "19810",
                    "INITIAL_PAY_MIN": "0",
                    "INITIAL_PAY_MAX": "19.99",
                    "CREDIT_TIME_MIN": "6",
                    "CREDIT_TIME_MAX": "72",
                    "SUMM_CREDIT_MIN": "90000",
                    "SUMM_CREDIT_MAX": "2500000",
                    "RATE_CREDIT": "23.9",
                    "TIME_DECISION": "1 \u0447\u0430\u0441",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0421\u0422\u0410\u041d\u0414\u0410\u0420\u0422 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0431\u0435\u0437 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e\u0433\u043e \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u044f \u041a\u0410\u0421\u041a\u041e \u0438 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u044f \u0436\u0438\u0437\u043d\u0438. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041f\u0410\u041e \u00ab\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a\u00bb (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u2116 963 \u043e\u0442 05.12.2014 \u0433\u043e\u0434\u0430)\r\n"
                },
                {
                    "ID": "19811",
                    "INITIAL_PAY_MIN": "20",
                    "INITIAL_PAY_MAX": "39.99",
                    "CREDIT_TIME_MIN": "6",
                    "CREDIT_TIME_MAX": "72",
                    "SUMM_CREDIT_MIN": "90000",
                    "SUMM_CREDIT_MAX": "2500000",
                    "RATE_CREDIT": "21.9",
                    "TIME_DECISION": "1 \u0447\u0430\u0441",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0421\u0422\u0410\u041d\u0414\u0410\u0420\u0422 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0431\u0435\u0437 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e\u0433\u043e \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u044f \u041a\u0410\u0421\u041a\u041e \u0438 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u044f \u0436\u0438\u0437\u043d\u0438. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041f\u0410\u041e \u00ab\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a\u00bb (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u2116 963 \u043e\u0442 05.12.2014 \u0433\u043e\u0434\u0430)"
                },
                {
                    "ID": "19812",
                    "INITIAL_PAY_MIN": "40",
                    "INITIAL_PAY_MAX": "95",
                    "CREDIT_TIME_MIN": "6",
                    "CREDIT_TIME_MAX": "72",
                    "SUMM_CREDIT_MIN": "90000",
                    "SUMM_CREDIT_MAX": "2500000",
                    "RATE_CREDIT": "19.9",
                    "TIME_DECISION": "1 \u0447\u0430\u0441",
                    "NAME": "\u041a\u0440\u0435\u0434\u0438\u0442 \u0421\u0422\u0410\u041d\u0414\u0410\u0420\u0422 \u0431\u0435\u0437 \u041a\u0410\u0421\u041a\u041e",
                    "DOCUMENTS": "\u041f\u0430\u0441\u043f\u043e\u0440\u0442 \u0420\u0424",
                    "LIFE_INSURANCE_PERCENT": null,
                    "DESCRIPTION": "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u0430 \u0431\u0435\u0437 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e\u0433\u043e \u043e\u0444\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u044f \u041a\u0410\u0421\u041a\u041e \u0438 \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u044f \u0436\u0438\u0437\u043d\u0438. \u0414\u0435\u0439\u0441\u0442\u0432\u0443\u0435\u0442 \u0434\u043b\u044f \u0441\u0435\u0440\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0441 \u043f\u0440\u043e\u0431\u0435\u0433\u043e\u043c. \u041a\u0440\u0435\u0434\u0438\u0442 \u043f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u041f\u0410\u041e \u00ab\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a\u00bb (\u0413\u0435\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u0430\u044f \u043b\u0438\u0446\u0435\u043d\u0437\u0438\u044f \u0426\u0411 \u0420\u0424 \u2116 963 \u043e\u0442 05.12.2014 \u0433\u043e\u0434\u0430)"
                }
            ];

        var CreditCalc = new creditCalc({
            elements: {
                $holder: $('.js-credit-calc'),
                $close: $('.js-credit-calc__close'),
                $conditionsHolder: $('.js-credit-calc__conditions-list'),
            },
            parameters: creditParameters,
            programList: creditProgramList,
        });

        CreditCalc.update();

        $('.js-credit-calc').on('slider.change slider.update', function () {
            CreditCalc.update();
        });

        $('.js-credit-calc-open').on('click', function (event) {
            event.preventDefault();
            CreditCalc.open();
            // Прокрутка к блоку калькулятора
            var calcId = $(this).attr('href');
            if (calcId) {
                $('html, body').animate({
                    scrollTop: $(calcId).offset().top
                }, 500);
            }

        });

        // Отправить на e-mail
        var $getCreditInfoFormHolder = $('<div class="js-credit-info-form-holder"></div>');
        $('body').append($getCreditInfoFormHolder);
        $getCreditInfoFormHolder.wrap('<div style="display:none;"></div>');
        ajaxLoadForm({
            link: '/ajax/catalog.php?action=get_credit_info_form',
            placeHolderSelector: $getCreditInfoFormHolder
        });

        $getCreditInfoFormHolder.on('form.ajax', function () {
            //console.log($creditInfoForm);
            var $creditInfoForm = $(this).find('form');

            $creditInfoForm.on('submit', function (event) {
                event.preventDefault();
                PopUp.ShowLoad();

                $.ajax("/ajax/catalog.php?action=credit_info_form", {
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: 'json'
                })
                    .done(function (data) {


                        $('.js-success, .js-errors').html(false);

                        if (data.code == 'success') {
                            /*
                             $car_order_form_block
                             .find('.js-success')
                             .append(data.response);
                             */
                            PopUp.Close();
                            showSuccessMessage();
                        } else {

                            var $errorsBlock = $getCreditInfoFormHolder.find('.js-errors')
                            var errorLsitText = [];
                            if (typeof data.errorLsitText != 'undefined') {
                                for (var i = 0; data.errorLsitText.length > i; i++) {
                                    var errorText = data.errorLsitText[i];
                                    errorLsitText.push(errorText);
                                }
                            }

                            $errorsBlock.append(data.response);
                            $errorsBlock.append(errorLsitText.join(', '));

                        }
                        PopUp.HideLoad();
                    })
                    .fail(function (data) {
                        alert("Ошибка добавления заявки, попробуйте позже");
                    })
                    .always(function (data) {
                        //alert( "complete" );
                        PopUp.HideLoad();
                    });
            });

        });

        $('body').on('click', '.js-condition-item__send-form', function () {

            //пока что форму не будем открывать!
            window.location.href='/contacts/';
            return false;

            var print_link = $(this).data('print-link');
            var credit_program_id = $(this).parents('.js-credit-calc__condition-item').attr('id');
            // Допишу в форму, скрытые поля о машине программе и состоянии калькулятора

            $getCreditInfoFormHolder.find('.js-car-id').val(CreditCalc.creditParameters.car.id);
            $getCreditInfoFormHolder.find('.js-credit-info-link').val(print_link);
            $getCreditInfoFormHolder.find('.js-credit-program').val(credit_program_id);
            $getCreditInfoFormHolder.find('.js-credit-down-payment').val(CreditCalc.creditParameters.fee.val);
            $getCreditInfoFormHolder.find('.js-credit-term').val(CreditCalc.creditParameters.term.val);

            PopUp.Open($getCreditInfoFormHolder, {
                title: 'Отправить на e-mail',
                // wrapClass:'popup-info',
            });
        });

        $('body').on('click', '.condition-item__info-more', function () {
            var itemId = $(this).parents('.js-credit-calc__condition-item').attr('id');
            var item = CreditCalc.getProgramListById(itemId);
            PopUp.Open('<div class="popup-inner__credit-info"><h2>' + item.NAME + '</h2>' + item.DESCRIPTION + '</div>', {
                title: '',
                wrapClass: 'popup-credit-info',
            });
        });
    });
</script>
<script>
    var compare_list = JSON.parse('[]');

    $.each(compare_list, function (key, val) {
        $('#compareid_' + val).addClass('in-compare');
        if ($('#compareid_' + val).parent().hasClass('compare-cell')) {
            $('#compareid_' + val).html('<span></span>Добавлено к сравнению');
        }else{
            $('#compareid_' + val).html('<i></i><span>Добавлено к<br>сравнению</span>');
        }
    });
</script>