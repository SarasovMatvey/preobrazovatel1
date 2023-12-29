<?php
const PHONE = '+7 (985) 161-29-66';
const PHONE_LINK = '+7 (985) 161-29-66';
const MAIL = 'info@kruglye-bani.ru';
const WHATSAPP_LINK = '+7 (985) 161-29-66';
const ADDRESS = 'Москва , улица Бунинская алеея 5';

const TG_TOKEN = '6548978973:AAHO5L8In20rLz9Q0HyJ6odW4fd4hckG7lY';
const TG_CHAT = '-4006467799';

const MAIL_ZAYAVKI = 'dvgutor@yandex.ru';
const CODE_WEBMASTER = '<meta name="yandex-verification" content="306f773d0c2a467c" /> ';
const CODE_GOOGLE = '';
const SITE_LINK = 'kruglye-bani.ru';

$REDIRECT = [
//    Эти 2 записи должны быть всегда
    "404" => [
        "title" => "Страница не найдена",
        "meta_description" => "Упс, вы попали на страницу которой не существует. Пожалуйста, вернитесь на главную",
        "id" => "404",
        "page" => "404"
    ],
    "error" => [
        "page" => "error"
    ],
//    Эти 2 записи должны быть всегда
//    Только главная страница выглядит таким образом. Пустые ковычки и только page = index.
    "" => [
        "title" => "КРУГЛЫЕ БАНИ: Купить деревянные под ключ",
        "meta_description" => "САЙТ №1.  КРУГЛЫЕ БАНИ - БЕСПЛАТНЫЙ онлайн-калькулятор. Стоимость от 110000 рублей. СКИДКИ до 33%. РЕЙТИНГ 5/5. ЗВОНИТЕ сейчас!",
        "id" => "",
        "page" => "index"
    ],
];