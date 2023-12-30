<?php
const PHONE = '[[[!Телефон для звонков]]]';
const PHONE_LINK = '[[[!Телефон для звонков]]]';
const MAIL = 'info@[[[!Домен]]]';
const WHATSAPP_LINK = '[[[!Телефон для вацап]]]';
const ADDRESS = '[[[? echo $values["Реквизиты"][1]; ]]]';

const TG_TOKEN = '[[[!Телеграмм token]]]';
const TG_CHAT = '[[[!Телеграмм id chat]]]';

const MAIL_ZAYAVKI = '[[[!Почта для сбора заявок]]]';
const CODE_WEBMASTER = '[[[!Код вебмастер]]]';
const CODE_GOOGLE = '[[[!Код гугл]]]';
const SITE_LINK = '[[[!Домен]]]';

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
        "title" => "[[[!Title]]]",
        "meta_description" => "[[[!Description]]]",
        "id" => "",
        "page" => "index"
    ],
];