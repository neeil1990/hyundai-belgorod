<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "HYUNDAI MOTORSTUDIO");
$APPLICATION->SetTitle("HYUNDAI MOTORSTUDIO");
?>

    <content-data>
        <div class="content">

            <script src="https://api-maps.yandex.ru/2.1/?apikey=ffa519d3-303f-463c-afa2-29eec493cd33&lang=ru_RU" type="text/javascript"></script>
            <script>
                var lang = {
                    name: 'ru',
                    monthArr: ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'],
                    monthArrNum: ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'],
                    register: 'Записаться',
                    registration: 'Записаться'
                }

                //Временное расположение событий

                var itemsJson = [{"id":3,"name":"N\u0435\u0432\u0435\u0440\u043e\u044f\u0442\u043d\u044b\u0439 \u0432\u0435\u0447\u0435\u0440 \u0441 i30 N!","calendar_name":"N\u0435\u0432\u0435\u0440\u043e\u044f\u0442\u043d\u044b\u0439 \u0432\u0435\u0447\u0435\u0440 \u0441 i30 N!","description":"<p>\u0412\u0441\u0442\u0440\u0435\u0447\u0430\u0439\u0442\u0435 \u043d\u0435\u0432\u0435\u0440\u043e\u044f\u0442\u043d\u044b\u0439 i30 N \u0432 \u0433\u043e\u0441\u0442\u0435\u043f\u0440\u0438\u0438\u043c\u043d\u043e\u043c \u0431\u0440\u0435\u043d\u0434-\u043f\u0440\u043e\u0441\u0442\u0440\u0430\u043d\u0441\u0442\u0432\u0435 Hyundai MotorStudio. \u0412 \u043f\u043b\u0430\u043d\u0430\u0445 \u043d\u0430 \u044d\u0442\u043e\u0442 \u0432\u0435\u0447\u0435\u0440 \u0436\u0430\u0440\u043a\u0430\u044f \u0432\u0441\u0442\u0440\u0435\u0447\u0430 \u0441 \u043d\u043e\u0432\u044b\u043c \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u043c, \u043e\u0442\u043b\u0438\u0447\u043d\u0430\u044f \u043c\u0443\u0437\u044b\u043a\u0430, \u0432\u043a\u0443\u0441\u043d\u0430\u044f \u0435\u0434\u0430, \u043a\u043e\u043a\u0442\u0435\u0439\u043b\u0438 \u0438 \u043c\u043d\u043e\u0433\u043e \u0432\u0435\u0441\u0435\u043b\u044c\u044f. \u041d\u0430\u0441\u0442\u0440\u043e\u0435\u043d\u0438\u0435 \u0437\u0430\u0434\u0430\u0434\u0443\u0442 \u0437\u0430\u0436\u0438\u0433\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u0435 Brevis Brass Band. \u041e\u0442\u043f\u0440\u0430\u0437\u0434\u043d\u0443\u0435\u043c \u0432\u043c\u0435\u0441\u0442\u0435 \u0441\u0435\u0440\u0435\u0434\u0438\u043d\u0443 \u043d\u0435\u0434\u0435\u043b\u0438 \u0438 \u043f\u043e\u044f\u0432\u043b\u0435\u043d\u0438\u0435 \u043d\u043e\u0432\u043e\u0433\u043e \u0434\u0435\u0440\u0437\u043a\u043e\u0433\u043e \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u044f Hyundai i30 N. \u0416\u0434\u0435\u043c \u0412\u0430\u0441 31 \u0438\u044e\u043b\u044f \u0432 19.00. <strong>\u0414\u0440\u0435\u0441\u0441-\u043a\u043e\u0434: Hyundai Performance Blue.<\/strong> \u0412\u0445\u043e\u0434 \u043e\u0441\u0443\u0449\u0435\u0441\u0442\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u043d\u0430 \u043e\u0441\u043d\u043e\u0432\u0430\u043d\u0438\u0438 \u0441\u043f\u0438\u0441\u043a\u0430 \u0437\u0430\u0440\u0435\u0433\u0438\u0441\u0442\u0440\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u043d\u0430 \u043c\u0435\u0440\u043e\u043f\u0440\u0438\u044f\u0442\u0438\u0435 \u0433\u043e\u0441\u0442\u0435\u0439.<\/p>","from":"2019-07-31","to":"2019-07-31","img":"\/storage\/motorstudio_events\/1564414119.jpg","available":false,"repair":false,"promo":false,"promo_img":"","altLong":false},{"id":4,"name":"Food consumption Session","calendar_name":"Food consumption Session","description":"\u0412 \u043f\u043e\u043d\u0435\u0434\u0435\u043b\u044c\u043d\u0438\u043a, 5 \u0430\u0432\u0433\u0443\u0441\u0442\u0430, \u043d\u0430\u0441 \u043f\u043e\u0441\u0435\u0442\u0438\u0442 \u043f\u0440\u043e\u0435\u043a\u0442 Transsiberian DREAM vol.11. \u0412\u043e\u043b\u043e\u043d\u0442\u0435\u0440\u044b \u0438\u0437 \u043c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u043e\u0433\u043e \u043e\u0442\u0434\u0435\u043b\u0435\u043d\u0438\u044f AEGEE \u0432\u0435\u0437\u0443\u0442 \u0438\u043d\u043e\u0441\u0442\u0440\u0430\u043d\u0446\u0435\u0432 \u0431\u043e\u043b\u0435\u0435, \u0447\u0435\u043c \u0438\u0437 25 \u0441\u0442\u0440\u0430\u043d \u043f\u043e \u0422\u0440\u0430\u043d\u0441\u0441\u0438\u0431\u0438\u0440\u0441\u043a\u043e\u0439 \u043c\u0430\u0433\u0438\u0441\u0442\u0440\u0430\u043b\u0438 \u043e\u0442 \u041c\u043e\u0441\u043a\u0432\u044b \u0434\u043e \u0412\u043b\u0430\u0434\u0438\u0432\u043e\u0441\u0442\u043e\u043a\u0430, \u043f\u043e\u043a\u0430\u0437\u044b\u0432\u0430\u044f \u0438\u043c \u043b\u044e\u0431\u0438\u043c\u0443\u044e \u0441\u0442\u0440\u0430\u043d\u0443 \u0438 \u0432\u043d\u0435\u0434\u0440\u044f\u044f \u0432 \u043f\u0443\u0442\u0435\u0448\u0435\u0441\u0442\u0432\u0438\u044f \u043d\u0435\u0444\u043e\u0440\u043c\u0430\u043b\u044c\u043d\u043e\u0435 \u043e\u0431\u0440\u0430\u0437\u043e\u0432\u0430\u043d\u0438\u0435. \u0412 \u043f\u043e\u0441\u043b\u0435\u0434\u043d\u0438\u0439 \u0434\u0435\u043d\u044c \u0438\u0445 \u043e\u0441\u0442\u0430\u043d\u043e\u0432\u043a\u0438 \u0432 \u041c\u043e\u0441\u043a\u0432\u0435 \u043a\u043e\u043c\u0430\u043d\u0434\u0430 \u043f\u0440\u043e\u0444\u0435\u0441\u0441\u0438\u043e\u043d\u0430\u043b\u044c\u043d\u044b\u0445 \u0442\u0440\u0435\u043d\u0435\u0440\u043e\u0432 \u043f\u0440\u043e\u0432\u0435\u0434\u0435\u0442 \u0441\u0435\u0441\u0441\u0438\u044e, \u043f\u043e\u0441\u0432\u044f\u0449\u0435\u043d\u043d\u0443\u044e \u0440\u0430\u0437\u0443\u043c\u043d\u043e\u043c\u0443 \u043f\u043e\u0442\u0440\u0435\u0431\u043b\u0435\u043d\u0438\u044e \u0432 \u0440\u0430\u043c\u043a\u0430\u0445 \u043e\u0431\u0443\u0447\u0435\u043d\u0438\u044f \u0443\u0447\u0430\u0441\u0442\u043d\u0438\u043a\u043e\u0432 \u044d\u043a\u043e\u043b\u043e\u0433\u0438\u0447\u043d\u043e\u043c\u0443 \u043e\u0431\u0440\u0430\u0437\u0443 \u0436\u0438\u0437\u043d\u0438. \u0426\u0435\u043b\u044c \u0441\u0435\u0441\u0441\u0438\u0438 - \u043d\u0430\u0443\u0447\u0438\u0442\u044c \u0443\u0447\u0430\u0441\u0442\u043d\u0438\u043a\u043e\u0432 \u0443\u043c\u0435\u043d\u044c\u0448\u0438\u0442\u044c \u0441\u0432\u043e\u0439 \u044d\u043a\u043e\u043b\u043e\u0433\u0438\u0447\u0435\u0441\u043a\u0438\u0439 \u0441\u043b\u0435\u0434 \u0432 \u044d\u0442\u043e\u043c \u043c\u0438\u0440\u0435 \u0438 \u043d\u0430\u0443\u0447\u0438\u0442\u044c \u0432\u044b\u0431\u0438\u0440\u0430\u0442\u044c \u0435\u0434\u0443 \u0431\u043e\u043b\u0435\u0435 \u043e\u0441\u043e\u0437\u043d\u0430\u043d\u043d\u043e. \u041c\u044b \u0440\u0430\u0437\u0431\u0435\u0440\u0435\u043c\u0441\u044f, \u043a\u0430\u043a \u0435\u0434\u0430 \u043d\u0430 \u043d\u0430\u0448\u0435\u0439 \u0442\u0430\u0440\u0435\u043b\u043a\u0435 \u0432\u043b\u0438\u044f\u0435\u0442 \u043d\u0430 \u044d\u043a\u043e\u043b\u043e\u0433\u0438\u0447\u0435\u0441\u043a\u0443\u044e \u0441\u0438\u0442\u0443\u0430\u0446\u0438\u044e \u0432 \u043c\u0438\u0440\u0435, \u0443\u0437\u043d\u0430\u0435\u043c \u043e \u0441\u043f\u043e\u0441\u043e\u0431\u0430\u0445 \u0438\u0437\u043c\u0435\u043d\u0438\u0442\u044c \u043d\u0430\u0448\u0438 \u043f\u0438\u0449\u0435\u0432\u044b\u0435 \u043f\u0440\u0438\u0432\u044b\u0447\u043a\u0438 \u0438 \u043b\u0435\u0433\u043a\u043e \u0432\u043d\u0435\u0434\u0440\u0438\u0442\u044c \u0440\u0430\u0437\u0443\u043c\u043d\u043e\u0435 \u043f\u043e\u0442\u0440\u0435\u0431\u043b\u0435\u043d\u0438\u0435 \u0432 \u043d\u0430\u0448\u0443 \u0435\u0436\u0435\u0434\u043d\u0435\u0432\u043d\u0443\u044e \u0440\u0443\u0442\u0438\u043d\u0443.   \r\n<br><b>\u0424\u043e\u0440\u043c\u0430\u0442 \u043c\u0435\u0440\u043e\u043f\u0440\u0438\u044f\u0442\u0438\u044f: \u0437\u0430\u043a\u0440\u044b\u0442\u044b\u0439.<\/b>","from":"2019-08-05","to":"2019-08-05","img":"\/storage\/motorstudio_events\/1564725560.jpg","available":false,"repair":false,"promo":false,"promo_img":"","altLong":false},{"id":5,"name":"\u041a\u043e\u043d\u0444\u0435\u0440\u0435\u043d\u0446\u0438\u044f \u043f\u0435\u0440\u0435\u0432\u043e\u0437\u0447\u0438\u043a\u043e\u0432 GLOVIS RUS \u043f\u043e \u0438\u0442\u043e\u0433\u0430\u043c 1 \u043f\u043e\u043b\u0443\u0433\u043e\u0434\u0438\u044f 2019 \u0433\u043e\u0434\u0430.","calendar_name":"GLOVIS conference","description":"<p>\u0412 \u0440\u0430\u043c\u043a\u0430\u0445 \u043f\u043e\u043b\u0443\u0433\u043e\u0434\u043e\u0432\u043e\u0439 \u043a\u043e\u043d\u0444\u0435\u0440\u0435\u043d\u0446\u0438\u0438 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0438 GLOVIS RUS \u044d\u043a\u0441\u043f\u0435\u0440\u0442\u044b \u0440\u044b\u043d\u043a\u0430 \u043f\u0435\u0440\u0435\u0432\u043e\u0437\u043e\u043a \u043b\u0435\u0433\u043a\u043e\u0432\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 \u0438 \u0440\u0443\u043a\u043e\u0432\u043e\u0434\u0438\u0442\u0435\u043b\u0438 \u0432\u0435\u0434\u0443\u0449\u0438\u0445 \u043b\u043e\u0433\u0438\u0441\u0442\u0438\u0447\u0435\u0441\u043a\u0438\u0445 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0439 \u0431\u0443\u0434\u0443\u0442 \u043e\u0431\u0441\u0443\u0436\u0434\u0430\u0442\u044c \u0442\u0435\u043d\u0434\u0435\u043d\u0446\u0438\u0438 \u0440\u0430\u0437\u0432\u0438\u0442\u0438\u044f \u0430\u0432\u0442\u043e\u0440\u044b\u043d\u043a\u0430 \u0420\u043e\u0441\u0441\u0438\u0438. \u0421\u043e\u0442\u0440\u0443\u0434\u043d\u0438\u043a\u0438 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0438 GLOVIS RUS, \u0430 \u0442\u0430\u043a\u0436\u0435 \u043f\u0440\u0438\u0433\u043b\u0430\u0448\u0435\u043d\u043d\u044b\u0435 \u0433\u043e\u0441\u0442\u0438 \u043f\u0440\u043e\u0430\u043d\u0430\u043b\u0438\u0437\u0438\u0440\u0443\u044e\u0442&nbsp; \u0440\u0435\u0437\u0443\u043b\u044c\u0442\u0430\u0442\u044b \u043f\u0435\u0440\u0435\u0432\u043e\u0437\u043e\u043a 1 \u043f\u043e\u043b\u0443\u0433\u043e\u0434\u0438\u044f 2019 \u0433\u043e\u0434\u0430, \u0440\u0430\u0441\u0441\u043c\u043e\u0442\u0440\u044f\u0442 \u0430\u043a\u0442\u0443\u0430\u043b\u044c\u043d\u044b\u0435 \u0432\u043e\u043f\u0440\u043e\u0441\u044b, \u043a\u043e\u0442\u043e\u0440\u044b\u0435 \u043a\u0430\u0441\u0430\u044e\u0442\u0441\u044f \u0442\u043e\u043f\u043b\u0438\u0432\u043d\u043e\u0433\u043e \u0440\u044b\u043d\u043a\u0430, \u0437\u0430\u043a\u043e\u043d\u043e\u0434\u0430\u0442\u0435\u043b\u044c\u0441\u0442\u0432\u0430 \u0432 \u0441\u0444\u0435\u0440\u0435 \u043f\u0435\u0440\u0435\u0432\u043e\u0437\u043e\u043a, \u0430 \u0442\u0430\u043a\u0436\u0435 \u0432\u043d\u0435\u0434\u0440\u0435\u043d\u0438\u044f \u043d\u043e\u0432\u0435\u0439\u0448\u0438\u0445 \u0442\u0435\u0445\u043d\u043e\u043b\u043e\u0433\u0438\u0439 \u043f\u043e \u0441\u043e\u0432\u0435\u0440\u0448\u0435\u043d\u0441\u0442\u0432\u043e\u0432\u0430\u043d\u0438\u044e \u043f\u0440\u043e\u0446\u0435\u0441\u0441\u043e\u0432, \u0441\u0432\u044f\u0437\u0430\u043d\u043d\u044b\u0445 \u0441 \u043f\u0435\u0440\u0435\u0432\u043e\u0437\u043a\u0430\u043c\u0438 \u043b\u0435\u0433\u043a\u043e\u0432\u044b\u0445 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0435\u0439 HYUNDAI \u0438 KIA.&nbsp; &nbsp;&nbsp;<\/p>\r\n<p>\u0416\u0434\u0435\u043c \u0412\u0430\u0441 8 \u0430\u0432\u0433\u0443\u0441\u0442\u0430 \u0432 12:00. \u0412\u0445\u043e\u0434 \u043e\u0441\u0443\u0449\u0435\u0441\u0442\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u043d\u0430 \u043e\u0441\u043d\u043e\u0432\u0430\u043d\u0438\u0438 \u0441\u043f\u0438\u0441\u043a\u0430 \u0437\u0430\u0440\u0435\u0433\u0438\u0441\u0442\u0440\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u043d\u0430 \u043c\u0435\u0440\u043e\u043f\u0440\u0438\u044f\u0442\u0438\u0435 \u0433\u043e\u0441\u0442\u0435\u0439.<\/p>","from":"2019-08-08","to":"2019-08-08","img":"\/storage\/motorstudio_events\/1565015904.jpg","available":false,"repair":false,"promo":false,"promo_img":"","altLong":false}];
                var popupData = {"open":1,"text":"HYUNDAI MOTORSTUDIO \u0431\u0443\u0434\u0435\u0442 \u0437\u0430\u043a\u0440\u044b\u0442\u0430 \u0441 9 \u043f\u043e 19 \u0430\u0432\u0433\u0443\u0441\u0442\u0430 \u0434\u043b\u044f \u043f\u0440\u043e\u0432\u0435\u0434\u0435\u043d\u0438\u044f \u0440\u0435\u043c\u043e\u043d\u0442\u043d\u044b\u0445 \u0440\u0430\u0431\u043e\u0442"};

                //Событие для тестов
                var testEvent = [{
                    id: 54654884,
                    available: true,
                    promo: false,
                    name: 'Выставка "Future Humanity - Our Shared Planet"',
                    description: 'Данная экспозиция является частью глобальной выставки, представленной Hyundai Motor Company в Hyundai Motorstudio в Пекине, Сеуле и Москве. Организаторами и кураторами совместно выступают центр Ars Electronica и Hyundai Motor Company. Мы являемся свидетелями перехода из эры, в которую мы управляли машинами, в новую эру, где машины станут частью нашей жизни. Так какое же влияние техника оказывает на нас, и какое влияние мы оказываем на технику? Данная выставка дает ответы на подобные вопросы. Ждем вас в Hyundai Motorstudio Moscow.',
                    from: '2019-02-06',
                    to: '2019-02-15',
                    img: '/images/motorstudio/events/1.jpg'
                }]


                // var itemsJson = [
                //     {
                //         id: 0,
                // 		available: false,
                // 		promo: false,
                //         name: 'Выставка "Future Humanity - Our Shared Planet"',
                // 		description: 'Данная экспозиция является частью глобальной выставки, представленной Hyundai Motor Company в Hyundai Motorstudio в Пекине, Сеуле и Москве. Организаторами и кураторами совместно выступают центр Ars Electronica и Hyundai Motor Company. Мы являемся свидетелями перехода из эры, в которую мы управляли машинами, в новую эру, где машины станут частью нашей жизни. Так какое же влияние техника оказывает на нас, и какое влияние мы оказываем на технику? Данная выставка дает ответы на подобные вопросы. Ждем вас в Hyundai Motorstudio Moscow.',
                // 		from: '2019-07-06',
                //         to: '2019-07-10',
                // 		img: '/images/motorstudio/events/1.jpg'
                //     },
                //     {
                //         id: 1,
                // 		available: true,
                // 		promo: true,
                //         name: 'Выставка "Future Humanity - Our Shared Planet"',
                // 		description: 'Данная экспозиция является частью глобальной выставки, представленной Hyundai Motor Company в Hyundai Motorstudio в Пекине, Сеуле и Москве. Организаторами и кураторами совместно выступают центр Ars Electronica и Hyundai Motor Company. Мы являемся свидетелями перехода из эры, в которую мы управляли машинами, в новую эру, где машины станут частью нашей жизни. Так какое же влияние техника оказывает на нас, и какое влияние мы оказываем на технику? Данная выставка дает ответы на подобные вопросы. Ждем вас в Hyundai Motorstudio Moscow.',
                // 		from: '2019-07-01',
                //         to: '2019-07-04',
                // 		img: '/images/motorstudio/events/1.jpg'
                //     },
                //     {
                //         id: 2,
                //         available: true,
                // 		name: 'Интересное событие в конце зимы',
                // 		description: 'Готова ли Россия к электромобилям и что представляет из себя электромобиль Hyundai IONIQ?',
                //         from: '2019-07-12',
                //         to: '2019-07-12',
                //         img: '/images/motorstudio/events/2.jpg'
                //     },
                //     {
                //         id: 3,
                //         available: true,
                // 		name: '8 марта!',
                // 		description: 'Готова ли Россия к электромобилям и что представляет из себя электромобиль Hyundai IONIQ?',
                //         from: '2019-07-13',
                //         to: '2019-07-13',
                //         img: '/images/motorstudio/events/3.jpg'
                //     },
                //     {
                //         id: 4,
                //         available: true,
                // 		name: 'Интересное короткое событие в начале весны',
                // 		description: 'Готова ли Россия к электромобилям и что представляет из себя электромобиль Hyundai IONIQ?',
                //         from: '2019-07-14',
                //         to: '2019-07-14',
                //         img: '/images/motorstudio/events/4.jpg'
                //     },
                //     {
                //         id: 5,
                //         available: true,
                //         name: 'Двенадцатое',
                //         from: '2019-03-12',
                //         to: '2019-03-12',
                //         img: '/images/motorstudio/events/5.jpg'
                //     },
                //     {
                //         id: 6,
                //         available: true,
                //         name: 'Тринадцатое',
                //         from: '2019-03-13',
                //         to: '2019-03-13',
                //         img: '/images/motorstudio/events/6.jpg'
                //     },
                //     {
                //         id: 7,
                // 		available: false,
                //         name: '2 Коротких',
                //         from: '2019-03-22',
                //         to: '2019-03-22',
                //         img: '/images/motorstudio/events/1.jpg'
                //     },
                //     {
                //         id: 8,
                // 		available: false,
                //         name: 'Конец марта',
                //         from: '2019-03-20',
                //         to: '2019-04-05',
                //         img: '/images/motorstudio/events/1.jpg'
                //     },
                //     {
                //         id: 9,
                // 		available: false,
                //         name: 'Начало апреля',
                //         from: '2019-04-06',
                //         to: '2019-04-10',
                //         img: '/images/motorstudio/events/2.jpg'
                //     }
                // ]


            </script>

            <section class="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner__center">
                                <div class="banner__video">
                                    <video preload="preload" autoplay loop muted data-object-fit="cover">
                                        <source src="/images/motorstudio/Hyundai_MotorStudio_v_Moskve_2.mp4" type="video/mp4">
                                    </video>
                                </div>
                                <div class="banner__composition">
                                    <h1 class="banner__title">
							<span>
								HYUNDAI
								<br>MOTORSTUDIO
							</span>
                                        <br>
                                        MOSCOW
                                    </h1>
                                    <div class="banner__subtitle">
                                        Инновационное мультиформатное
                                        <br>бренд-пространство
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="app">
                <div v-if="!init">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="placeholder">
                                    <ul class="placeholder__list">
                                        <li class="placeholder__item">
                                            <div class="placeholder__img"></div>
                                            <div class="placeholder__content">
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                            </div>
                                        </li>
                                        <li class="placeholder__item">
                                            <div class="placeholder__img"></div>
                                            <div class="placeholder__content">
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                            </div>
                                        </li>
                                        <li class="placeholder__item">
                                            <div class="placeholder__img"></div>
                                            <div class="placeholder__content">
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                            </div>
                                        </li>
                                        <li class="placeholder__item">
                                            <div class="placeholder__img"></div>
                                            <div class="placeholder__content">
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>				</div>
                        </div>
                    </div>
                </div>
                <motor-studio v-else></motor-studio>
            </div>

        </div>
    </content-data>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>