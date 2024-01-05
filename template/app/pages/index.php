
    <!-- 1 ЭКРАН КОНЕЦ-->
<div class="wrapper mb-sect">
    <div class="menu flex-3 _sb">
        <div class="burger">
            <i class="burger_js"></i>
        </div>
        <div class="header_logo">
            <a href="/">
                <img src="./assets/images/[[[!Логотип]]]" alt="Логотип компании">
            </a>
        </div>
        <nav aria-label="Main Menu" itemscope itemtype="https://schema.org/SiteNavigationElement"
             class="header_links header_links_js">
            <a itemprop="name" itemprop="url" href="#katalog">Каталог</a>
            <a itemprop="name" itemprop="url" href="#ceny">Цены</a>
            <a itemprop="name" itemprop="url" href="#akcii-skidki">Акции и скидки</a>
            <a itemprop="name" itemprop="url" href="#otzyvy-portfolio">Отзывы и портфолио</a>
            <a itemprop="name" itemprop="url" href="#kompaniya-kontakty">О компании и контакты</a>
        </nav>
        <div class="menu_options">
            <a target="_blank" href="https://wa.me/<?= WHATSAPP_LINK ?>">
                <img src="./assets/images/icons/whats_black.png" alt="WhatsApp">
                <span>WhatsApp</span>
            </a>
            <div data-fancybox data-src="#zayavka">
                <img src="./assets/images/icons/call.png" alt="Бесплатный звонок">
                <span>Бесплатный звонок</span>
            </div>
            <a class="menu_options-active" href="#kalkulyator">
                <img src="./assets/images/icons/calc.png" alt="Калькулятор">
                <span>Калькулятор</span>
            </a>
        </div>
        <div class="phones">
            <a href="tel:<?= PHONE_LINK ?>"><?= PHONE ?></a>
            <p>09:00 - 20:00, без выходных</p>
        </div>

    </div>
    <div class="wrapper_small">
        <header class="main_page">
            <div class="bread"></div>
            <div class="content">
                <h1 class="h1">[[[!Заголовок первого экрана]]]</h1>
                <ul class="h1_sub-title">
                    [[[?
                        foreach ($values['Подзаголовки 3 штуки'] as $item) {
                            echo "<li>$item</li>\n";
                        }
                    ]]]
                </ul>
                <div class="actions flex _sb">
                    <a href="#kalkulyator" class="btn">Калькулятор</a>
                </div>
            </div>
            <div class="img">
                <img width="523px" height="560px" src="./assets/images/katalog/картинка.webp" alt="Круглая баня бочка"
                     title="Круглая баня бочка">
            </div>
        </header>
    </div>
</div>
<!-- 1 ЭКРАН КОНЕЦ-->
    
<!-- QUIZ -->
<section id="kalkulyator" class="wrapper_small">
    <h2 class="h2">Онлайн <span>калькулятор</span></h2>
    <p class="sub_title mb-80">Выбери что нужно и узнай точную цену уже через 5 минут <span>бесплатно</span></p>
    <div class="quiz">
        <div class="quiz_text">                
        <div class="quiz_wrapper">
            <form id="quiz-1" class="my-forms">
                <div class="quiz_wrap_js quiz_wrap_js_active">
                    <div class="quiz_zagolovok">
                        <p>[[[? echo $values['Вопросы'][0]; ]]]</p>
                    </div>
                    <div class="quiz_content grid-3">
                    
                        [[[?
                            foreach ($values['Ответы (списком в одну ячейку)'][0] as $i => $item) {
                                $vopros = $values['Вопросы'][0];
                                echo <<<EOL
                                    <label for="0-$i" class="quiz_content_elem">
                                        <input type="radio" data-name="quiz_rad_0" name="$vopros" id="0-$i"
                                            value="$item">
                                        <span class="img calc_img">
                                            <a href="#" class="remove_link">$item</a>
                                        </span>
                                    </label>
                                    
                                EOL;
                            }
                        ]]]

                    </div>
                </div>
                <div class="quiz_wrap_js">
                    <div class="quiz_zagolovok">
                        <p>[[[? echo $values['Вопросы'][1]; ]]]</p>
                        <span class="quiz_back quiz_back_js"></span>
                    </div>
                    <div class="quiz_content grid-3">
                        [[[?
                            foreach ($values['Ответы (списком в одну ячейку)'][1] as $i => $item) {
                                $vopros = $values['Вопросы'][1];
                                echo <<<EOL
                                    <label for="1-$i" class="quiz_content_elem">
                                        <input type="radio" data-name="quiz_rad_2" name="$vopros" id="1-$i"
                                            value="$item">
                                        <span class="img calc_img">
                                            <a href="#" class="remove_link">$item</a>
                                        </span>
                                    </label>
                                    
                                EOL;
                            }
                        ]]]
        
                    </div>
                </div>
                <div class="quiz_wrap_js">
                    <div class="quiz_zagolovok">
                        <p>[[[? echo $values['Вопросы'][2]; ]]]</p>
                        <span class="quiz_back quiz_back_js"></span>
                    </div>
                    <div class="quiz_content quiz_text_content">
                        <input class="inp_text area_js" type="text" name="адрес объекта"
                            placeholder="[[[? echo $values['Ответы (списком в одну ячейку)'][2][0]; ]]]">
                        <p style="display:none; color: red" class="area_error">Проверьте верность заполнения формы</p>
                        <p class="btn area_js_btn">Далее</p>
                    </div>
                </div>
                <div class="quiz_wrap_js">
                    <div class="quiz_zagolovok">
                        <p>[[[? echo $values['Вопросы'][3]; ]]]</p>
                        <span class="quiz_back quiz_back_js"></span>
                    </div>
                    <div class="quiz_content grid-3">
                        [[[?
                            foreach ($values['Ответы (списком в одну ячейку)'][3] as $i => $item) {
                                $vopros = $values['Вопросы'][3];
                                echo <<<EOL
                                    <label for="3-$i" class="quiz_content_elem">
                                        <input type="radio" data-name="quiz_rad_3" name="$vopros" id="3-$i"
                                            value="$item">
                                        <span class="img calc_img">
                                            <a href="#" class="remove_link">$item</a>
                                        </span>
                                    </label>
                                    
                                EOL;
                            }
                        ]]]
        
                    </div>
                </div>
                <div class="quiz_wrap_js">
                <div class="quiz_zagolovok">
                    <p>Напишите пожалуйста, своё имя и телефон</p>
                    <span class="-sub_title">Мы позвоним, чтобы уточнить пару важных нюансов и рассчитать стоимость!</span>
                    <span class="quiz_back quiz_back_js"></span>
                </div>
                <div class="quiz_text_content">
                    <input class="inp_text" type="text" name="name" placeholder="Ваше имя">
                    <input class="inp_text" type="tel" name="phone" placeholder="Номер телефона">
                    <i class="politica politica_js"></i>
                    <button type="submit" class="btn area_js_btn">Получить расчёт</button>
                </div>
                </div>
            </form>
    </div>               
        </div>
    </div>
</section>
<!-- QUIZ END-->
<!-- КАТАЛОГ-->
<section class="wrapper_small">
    <h3 id="katalog" class="h2">Самый большой <span>каталог</span></h3>
    <p class="sub_title mb-80">Сайт №1 по ассортименту</p>
    <div class="filter_content filter_content_js grid-3 mb-80">

        [[[?
            foreach ($values['Заголовки карточек'] as $i => $key) {
                $kartinka = $values['Картинка'][$i];
                $lsi = $values['Описания (LSI)'][$i];
                $zennik = $values['Ценник'][$i];

                $lsiBlock = "";
                foreach ($lsi as $lsiItem) {
                    $lsiBlock .= "<li>$lsiItem</li>" . PHP_EOL;
                }
                echo <<<EOL
                <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
                    <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                        $key
                    </span>
                    <div class="-img">
                        <img class="lazy" 
                            srcset="./assets/images/image.svg"
                            data-srcset="./assets/images/$kartinka"
                            src="./assets/images/$kartinka" 
                            alt="$key"
                            title="$key">
                    </div>
                    <ul class="-bullits">
                        $lsiBlock
                    </ul>
                    <a href="#kalkulyator" class="-cena">$zennik</a>
                </article>
            EOL;
            }

        ]]]
      
    </div>
    <div class="drenazh_system_show_more">
        <p class="btn filter_btn_js">Показать все ↓</p>
    </div>
</section>
<!-- КАТАЛОГ КОНЕЦ-->
    
        <!-- ТАБЛИЦА ЦЕНЫ -->
<section class="wrapper_small">
    <div class="price_table price_table_js">
        <table id="ceny">
            <thead>
            <tr class="price_table_btn_js -active">
                <td class="price_table_title" colspan="3">
                    <h3>[[[!Заголовок таблицы]]]</h3>
                </td>
            </tr>
            </thead>
            <tbody class="price_table_content_js">
            <tr>
                <td>
                    <p><b>Наименование</b></p>
                </td>
                <td>
                    <p><b>Цена</b></p>
                </td>
            </tr>            
                  
            [[[?
                foreach ($values['Наименования'] as $i => $key) {
                    $zena = $values['Перечисление цен'][$i];
                    echo <<<EOL
                        <tr>
                            <td>
                                <a href="#zayavka" data-fancybox>$key</a>
                            </td>
                            <td>
                                $zena
                            </td>
                        </tr>
                    EOL;
                }
            ]]]

            </tbody>
        </table>
    </div>
</section>
<!-- ТАБЛИЦА ЦЕНЫ КОНЕЦ-->    
   
        <!--  ОТЗЫВЫ И ПОРТФОЛИО-->
<div class="wrapper_small mb-sect">
    <h3 id="otzyvy-portfolio" class="h2"><span>Отзывы</span> клиентов и наше портфолио</h3>
    <p class="sub_title mb-80">Еще больше мнений о нас вы найдёте на яндекс картах</p>
    <div class="otzyvy mb-80">
        <div class="otzyvy_slider otzyvy_slider_js">
            [[[?
                foreach ($values['Скрины отзывов'] as $i => $item) {
                    echo <<<EOL
                        <div class="carousel__slide">
                            <div class="otzyvy_elem_img">
                                <a data-fancybox="отзывы" href="./assets/images/$item">
                                    <img class="lazy" srcset="./assets/images/image.svg"
                                        data-srcset="./assets/images/$item"
                                        width="596px" height="190px"
                                        src="./assets/images/$item"
                                        alt="Отзыв-$i"
                                        title="Отзыв-$i">
                                </a>
                            </div>
                        </div>
                    EOL;
                }
            ]]]
        </div>
    </div>  

    <!-- Портфолио фото слайдер -->
    <div class="portfolio_slider portfolio_slider_js">
        [[[?
            foreach ($values['Портфолио картинки'] as $i => $item) {
                echo <<<EOL
                    <div class="carousel__slide">
                        <div class="portfolio_slider_elem">
                            <a data-fancybox="портфолио" href="./assets/images/$item">
                                <img class="lazy" srcset="./assets/images/image.svg"
                                    data-srcset="./assets/images/$item"
                                    width="376px" height="250px"
                                    src="./assets/images/$item"
                                    alt="портфолио-$i"
                                    title="портфолио-$i">
                            </a>
                        </div>
                    </div>
                EOL;
            }
        ]]]
    </div>
    <!-- Портфолио фото слайдер конец-->

    <!--  БЛОК С ВИДЕО -->
    <div class="portfolio_video">
        [[[?
            foreach ($values['Портфолио видео'] as $i => $item) {
                echo <<<EOL
                    <div class="portfolio_video_elem">
                        <video width="100%" controls="controls">
                            <source src="/assets/images/$item" type="video/ogg">
                            <source src="/assets/images/$item" type="video/mp4">
                            <source src="/assets/images/$item" type="video/webm">
                            Тег video не поддерживается вашим браузером.
                            <a download="" href="/assets/movie/4.mp4">Скачайте видео</a>
                        </video>
                    </div>
                EOL;
            }
        ]]]
    </div>
    <!--  БЛОК С ВИДЕО КОНЕЦ -->
</div>
<!--  ОТЗЫВЫ И ПОРТФОЛИО КОНЕЦ-->
    
    <!-- АКЦИИ-->
<div class="wrapper_small mb-80">
    <div class="akcii">
        <div class="-text">
            <h3 id="akcii-skidki" class="h2">Акция!</h3>
            <p class="sub_title">Мы спрятали подарок – <span>Нажми</span> на случайное слово и найди его</p>
            <div class="akcii_content">
                <div class="-info akcii_elemts_js">
                    [[[?
                        foreach ($values['Список слов для блока "Акция"'] as $item) {
                            echo "<a href=\"#\">$item</a>";
                        }
                    ]]]
                </div>
            </div>
        </div>
    </div>
</div>
<!-- АКЦИИ КОНЕЦ-->
    
<section class="wrapper">
	<div class="skidki">
		<div class="skidki_content grid-3">
		    <img class="lazy" srcset="./assets/images/image.svg"
                             data-srcset="./assets/images/invalidam.webp"
                             width="460px" height="320px"
                             src="./assets/images/invalidam.webp"
                             alt="скидки инвалидам"
                             title="скидки инвалидам">
            <img class="lazy" srcset="./assets/images/image.svg"
                             data-srcset="./assets/images/veteranam-vov.webp"
                             width="460px" height="320px"
                             src="./assets/images/veteranam-vov.webp"
                             alt="скидки ветеранам ВОВ"
                             title="скидки ветеранам ВОВ">
            <img class="lazy" srcset="./assets/images/image.svg"
                             data-srcset="./assets/images/materyam-odinochkam.webp"
                             width="460px" height="320px"
                             src="./assets/images/materyam-odinochkam.webp"
                             alt="скидки матерям одиночкам"
                             title="скидки матерям одиночкам">
            <img class="lazy" srcset="./assets/images/image.svg"
                             data-srcset="./assets/images/mnogodetnym-semyam.webp"
                             width="460px" height="320px"
                             src="./assets/images/mnogodetnym-semyam.webp"
                             alt="скидки многодетным семьям"
                             title="скидки многодетным семьям">
            <img class="lazy" srcset="./assets/images/image.svg"
                             data-srcset="./assets/images/pensioneram.webp"
                             width="460px" height="320px"
                             src="./assets/images/pensioneram.webp"
                             alt="скидки пенсионерам"
                             title="скидки пенсионерам">
            <img class="lazy" srcset="./assets/images/image.svg"
                             data-srcset="./assets/images/uchastnikam-boevykh-dejstvij.webp"
                             width="460px" height="320px"
                             src="./assets/images/uchastnikam-boevykh-dejstvij.webp"
                             alt="скидки участникам боевых действий"
                             title="скидки участникам боевых действий">           
		</div>
	</div>
</section>
<!-- КАРТА С ГОРОДАМИ -->
<div class="wrapper_small mb-sect">
    <p class="h2 mb-80">Работаем <span>по всему городу</span> и ближайшей области</p>
    <div id="dostavka-vyezd" class="map">
        <img class="lazy" 
             srcset="./assets/images/image.svg"
             data-srcset="./assets/images/карта.png"
             src="./assets/images/карта.png" 
             alt="С какими городами мы работаем"
             title="С какими городами мы работаем">
             
        <div class="map_cities">
            <div class="map_cities_content">
                [[[?
                    foreach ($values['Списко гео для карты'] as $key => $value) {
                        echo <<<EOL
                            <div class="map_cities_content_elem">$value</div>
                        EOL;
                    }
                ]]]
            </div>
        </div>
    </div>
</div>
<!-- КАРТА С ГОРОДАМИ КОНЕЦ-->
    
<!-- О КОМПАНИИ (сотрудники и другое) -->
<section class="wrapper_small">
    <h3 id="kompaniya-kontakty" class="h2"><span>Сотрудники</span> компании и наши контакты</h3>
    <p class="sub_title mb-80">Лица, телефоны, адреса, карты, email</p>
    <div class="sotrudniki sotrudniki_slider_js mb-80">
        <div class="carousel__slide">
            <div class="sotrudniki_elem">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="/assets/images/sotrudniki/Алексей%20сотрудник.jpg"
                     src="/assets/images/sotrudniki/Алексей%20сотрудник.jpg" 
                     alt="Сотрудник Алексей"
                     title="Сотрудник Алексей">
                <span>Алексей</span>
            </div>
        </div>
        <div class="carousel__slide">
            <div class="sotrudniki_elem">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="/assets/images/sotrudniki/Vacya.jpg"
                     src="/assets/images/sotrudniki/Vacya.jpg" 
                     alt="Сотрудник Вася"
                     title="Сотрудник Вася">
                <span>Василий</span>
            </div>
        </div>
        <div class="carousel__slide">
            <div class="sotrudniki_elem">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="/assets/images/sotrudniki/Владимир%20сотрудник.jpg"
                     src="/assets/images/sotrudniki/Владимир%20сотрудник.jpg" 
                     alt="Сотрудник Владимир"
                     title="Сотрудник Владимир">
                <span>Владимир</span>
            </div>
        </div>
        <div class="carousel__slide">
            <div class="sotrudniki_elem">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="/assets/images/sotrudniki/Костя%20сотрудник.jpg"
                     src="/assets/images/sotrudniki/Костя%20сотрудник.jpg" 
                     alt="Сотрудник Костя"
                     title="Сотрудник Костя">
                <span>Константин</span>
            </div>
        </div>
        <div class="carousel__slide">
            <div class="sotrudniki_elem">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="/assets/images/sotrudniki/Мария%20сотрудник.jpg"
                     src="/assets/images/sotrudniki/Мария%20сотрудник.jpg" 
                     alt="Сотрудник Мария"
                     title="Сотрудник Мария">
                <span>Мария</span>
            </div>
        </div>
        <div class="carousel__slide">
            <div class="sotrudniki_elem">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="/assets/images/sotrudniki/Миша%20сотрудник.jpg"
                     src="/assets/images/sotrudniki/Миша%20сотрудник.jpg" 
                     alt="Сотрудник Миша"
                     title="Сотрудник Миша">
                <span>Михаил</span>
            </div>
        </div>
        <div class="carousel__slide">
            <div class="sotrudniki_elem">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="/assets/images/sotrudniki/Николай%20сотрудник.jpg"
                     src="/assets/images/sotrudniki/Николай%20сотрудник.jpg" 
                     alt="Сотрудник Николай"
                     title="Сотрудник Николай">
                <span>Николай</span>
            </div>
        </div>
        <div class="carousel__slide">
            <div class="sotrudniki_elem">
            <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="/assets/images/sotrudniki/Оля%20сотрудник.jpg"
                     src="/assets/images/sotrudniki/Оля%20сотрудник.jpg" 
                     alt="Сотрудник Оля"
                     title="Сотрудник Оля">
                <span>Ольга</span>
            </div>
        </div>
    </div>
    <!-- Сотрудники конец  -->

    <!-- Реквизиты -->
    <div id="rekvizity" class="company_data mb-80">
        <div class="company_data_rekvizity">
            <p class="company_data_rekvizity_title">Реквизиты</p>
            <div class="company_data_rekvizity_table">
                <div class="-elem">Наименование</div>
                <div class="-elem">[[[? echo $values["Реквизиты"][0]; ]]]</div>
                <div class="-elem">Адрес</div>
                <div class="-elem"><?= ADDRESS?></div>
                <div class="-elem">ИНН</div>
                <div class="-elem">[[[? echo $values["Реквизиты"][2]; ]]]</div>
                <div class="-elem">ОГРН</div>
                <div class="-elem">[[[? echo $values["Реквизиты"][3]; ]]]</div>
            </div>
        </div>
        <div class="company_data_map">
            <p class="company_data_rekvizity_title">Схема проезда до центрального офиса</p>
            <div class="company_data_map_scheme">
                [[[!Карта офиса (скрипт)]]]
            </div>
        </div>
    </div>
    <!-- Реквизиты конец -->

    <!-- Награды -->
    <div id="sertifikaty" class="nagrada mb-80">
        <div class="nagrada_elem">
            <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/nagrada.webp"
                     src="./assets/images/nagrada.webp" 
                     alt="Награда Яндекс карты"
                     title="Награда Яндекс карты">
        </div>
        <div class="nagrada_elem">
            <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/сертификат.jpg"
                     src="./assets/images/сертификат.jpg" 
                     alt="Сертификат"
                     title="Сертификат">
        </div>
        <div class="nagrada_elem">
         <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/2 гис.jpg"
                     src="./assets/images/2 гис.jpg" 
                     alt="Награда 2 Гис"
                     title="Награда 2 Гис">
        </div>
    </div>
    <!-- Награды КОНЕЦ -->

    <!-- Доп инфа -->
    <div class="nagrada">
        <div class="nagrada_text">
            <p class="nagrada_text_title">Физ лицам</p>
            <span class="nagrada_text_mail">zakaz@<?= SITE_LINK?></span>
            <span class="nagrada_text_phone"><?= PHONE?></span>
        </div>
        <div class="nagrada_text">
            <p class="nagrada_text_title">Юр лицам</p>
            <span class="nagrada_text_mail">b2b@<?= SITE_LINK?></span>
            <span class="nagrada_text_phone"><?= PHONE?> (доб. 01)</span>
        </div>
        <div class="nagrada_text">
            <p class="nagrada_text_title">Предложения сотрудничества</p>
            <span class="nagrada_text_mail">info@<?= SITE_LINK?></span>
            <span class="nagrada_text_phone"><?= PHONE?> (доб. 02)</span>
        </div>
    </div>
    <!-- Доп инфа КОНЕЦ -->

</section>
<!-- О КОМПАНИИ (сотрудники и другое) КОНЕЦ -->

<!-- ТАБЛИЦА СРАВНЕНИЯ С КОНКУРЕНТАМИ -->
<section class="wrapper_small">
    <div class="konkurent_table">
        <table>
            <thead>
            <tr class="konkurent_table_thead_tr">
                <td colspan="5">
                    <h3>Таблица сравнения с конкурентами</h3>
                </td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <p><b>Критерии</b></p>
                </td>
                <td>
                    <p class="gold"><b>Наша команда</b></p>
                </td>
                [[[?
                    foreach ($values['Конкуренты'] as $item) {
                        echo <<<EOL
                            <td>
                                <p><b>$item</b></p>
                            </td>
                        EOL;
                    }
                ]]]
            </tr>
            <tr>
                <td>Гарантии в договоре</td>
                <td><span class="gold">+</span></td>
                <td>-</td>
                <td>Информации нет</td>
                <td>неизвестно</td>
            </tr>
            <tr>
                <td>Рассрочка</td>
                <td><span class="gold">+</span></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Работа в белую</td>
                <td><span class="gold">+</span></td>
                <td>+</td>
                <td>+</td>
                <td>+</td>
            </tr>
            <tr>
                <td>Безнальная оплата</td>
                <td><span class="gold">+</span></td>
                 <td>-</td>
                 <td>+</td>
                 <td>+</td>
            </tr>
            <tr>
                <td>Дополнительный сервис</td>
                <td><span class="gold">+</span></td>
                 <td>-</td>
                 <td>-</td>
                 <td>+</td>
            </tr>
            <tr>
                <td>Ценовая политика</td>
                <td><span class="gold">средняя</span></td>
                <td>Низкая</td>
                <td>Высокая</td>
                <td>Высокая</td>
            </tr>
            <tr>
                <td>Реальный офис, местонахождение</td>
                <td><span class="gold">+</span></td>
                <td>-</td>
                <td>+</td>
                <td>Нет данных</td>
            </tr>
            <tr>
                <td>Доля постоянных клиентов</td>
                <td><span class="gold">11.3%</span></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Соблюдение прав потребителя</td>
                <td><span class="gold">+</span></td>
                <td>-</td>
                <td>неизвестно</td>
                <td>неизвестно</td>
            </tr>
            <tr>
                <td>Участие в благотворительности</td>
                <td><span class="gold">+</span></td>
                <td>-</td>
                <td>неизвестно</td>
                <td>неизвестно</td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
<!-- ТАБЛИЦА СРАВНЕНИЯ С КОНКУРЕНТАМИ -->

<!-- ВАКАНСИИ -->
<section class="wrapper">
    <div id="vakansii" class="vakansii">
        <div class="vakansii_text">
            <h3 class="vakansii_title h2">Открытые <span>вакансии</span> в нашу скромную команду</h3>
            [[[?
                foreach ($values['Список вакансий (3 штуки)'] as $item) {
                    echo "<span data-fancybox=\"\" data-src=\"#rabota\">$item</span>";
                }
            ]]]
            <div class="vakansii_message">
                <div class="vakansii_message_content">
                    Уточняйте актуальное наличие вакансий по телефону
                    <a href="tel:<?=PHONE_LINK ?>"><?= PHONE?></a>
                    Направляйте свои резюме на электронную почту
                    <a href="mailto:info@<?= SITE_LINK?>">rabota@<?= SITE_LINK?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ВАКАНСИИ КОНЕЦ-->

<!-- ГАРАНТИЯ -->
<section class="wrapper">
    <div id="garantiya" class="garantii mb-80">
        <h3 class="h2 mb-80">
            <span>Гарантийные</span>
            обязательства
        </h3>
        <div class="garantii_content">
            <div class="-img">
                <img class="lazy" srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/гарантия.jpg"
                     width="366px" height="402px"
                     src="./assets/images/гарантия.jpg"
                     alt="Гарантии работы"
                     title="Гарантии работы">
            </div>
            <div class="-text">
                <ul>
                    <li>Стандартная гарантия 12 месяцев (1 год) прописана по умолчанию в договоре</li>
                    <li>Предоставляем удобный и практичный сервис – платное продление гарантии сроком до 3 лет. То есть дополнительное постгарантийное обслуживание</li>
                    <li>Гарантируем покупателям полное соответствие с ФЗ «О защите прав потребителя»</li>
                    <li>Полный пакет документов – договор, доп соглашения, закрывающие акты</li>
                </ul>
            </div>
        </div>
        <h3 id="oplata-vozvrat" class="garantii_elem_title h2 mb-80"><span>Оплата</span> и возврат</h3>
        <div class="garantii_content">
            <div class="-text">
                <ul>
                    <li>Оплата банковской картой на вашем адресе или в офисе компании</li>
                    <li>Безналичный расчет (с НДС/без НДС)</li>
                    <li>Если заказ аннулируется до реализации по нашим причинам, мы вернем уплаченную стоимость в порядке с соглашением</li>
                    <li>Клиент сам сделал отмену заказа до его выполнения - возвращаем деньги за вычетом понесённых организационных расходов</li>
                    <li>Возмещение производиться переводом на счёт, в течение срока установленного банком (до 30 дней)</li>
                </ul>
            </div>
            <div class="-img">
                <img class="lazy" srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/оплата и возврат.jpg"
                     width="366px" height="402px"
                     src="./assets/images/оплата и возврат.jpg"
                     alt="Оплата и возврат ЛОС"
                     title="Оплата и возврат ЛОС">
            </div>
        </div>
    </div>
    <h3 id="credit-rassrochka" class="h2 mb-80">
        <span>Рассрочка</span>
        на услуги (кредит)
    </h3>
    <div class="rassrochka">
        <div class="rassrochka_content">
            <p style="color: #ffc93e">Решение о рассрочке принимается индивидуально</p>
            Наличие постоянно регистрации (прописки) в регионе <br>
            Наличие официального места работы <br>
            От 2 до 6 месяцев без переплаты <br>
            Резидент и гражданин РФ <br>
            Возраст от 25 лет
        </div>
    </div>
</section>
<!-- ГАРАНТИЯ КОНЕЦ-->
<!--ОТВЕТЫ НА ВОПРОСЫ-->
<section class="wrapper">
    <h3 id="faq" class="h2 mb-80">Самые популярные <span>вопросы</span></h3>

    <div class="question grid-2">
        <div class="question_content">
            <div class="question_elem question_elem_js" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                <p itemprop="name">Нужно ли мне разрешение на установку круглой бани?</p>
                <i class="question_btn_js"></i>
                <div class="-info question_content_js -hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text"> Разрешение не нужно, т к это не капитальное строение</div>
                </div>
            </div>
            
            <div class="question_elem question_elem_js" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                <p itemprop="name">На каком расстоянии от жилища можно строить сауну?</p>
                <i class="question_btn_js"></i>
                <div class="-info question_content_js -hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">Расстояние от жилища до бани (сауны) должно составлять не менее 8 метров. Сбор и очистка сточных вод из бань и саун должны"осуществляться в засыпанных гравиеми песком фильтрующих траншеях или других очистных сооружениях в пределах 4 метров от границы соседнего жилища".</div>
                </div>
            </div>
            
            <div class="question_elem question_elem_js" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                <p itemprop="name">Какое расстояние между баней и соседними домами?</p>
                <i class="question_btn_js"></i>
                <div class="-info question_content_js -hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">Расстояние между баней и соседними домами должно быть не менее 15 метров, как для строений на одном участке, так и для строений на разных участках. Это требование применяется, если и баня, и соседний дом являются деревянными. Если же баня имеет деревянный пол, а соседний дом обладает каменными стенами, то минимальное расстояние между ними должно составлять 6 метров.</div>
                </div>
            </div>
            

            

        </div>
        <div class="question_content">
            <div class="question_elem question_elem_js" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                <p itemprop="name">Каковы недостатки размещения топки на открытом воздухе?</p>
                <i class="question_btn_js"></i>
                <div class="-info question_content_js -hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">В целом, недостатки размещения топки на открытом воздухе заключаются в следующем:

Большинство посетителей сауны не надевают тапочки во время отдыха в сауне.

В сауну может быть занесена грязь с дороги, поэтому ноги приходится мыть каждый раз.

Дрова нужно приносить из сарая.</div>
                </div>
            </div>
            
            <div class="question_elem question_elem_js" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                <p itemprop="name">Где лучше построить каминный короб - внутри или снаружи парной?</p>
                <i class="question_btn_js"></i>
                <div class="-info question_content_js -hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">Практичнее и удобнее строить камин внутри помещения. Это связано с тем, что для того, чтобы включить жар, вам придется выйти на улицу. Установка печи на улице удобна для владельцев общественных бань, которые строят сауны для своих клиентов, а не для себя!
Располагать печь для сауны на открытом воздухе удобно и гигиенично.</div>
                </div>
            </div>
            
            <div class="question_elem question_elem_js" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                <p itemprop="name">Что нужно сделать перед топкой бани?</p>
                <i class="question_btn_js"></i>
                <div class="-info question_content_js -hide" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">Перед запуском сауны не забудьте полностью открыть дверцу в нижней части воздуходувки и вентиляционное отверстие на трубе дымохода. Проблемы с вентиляцией могут возникнуть в теплые или влажные дни. Как только дымоход прогреется, проблема исчезнет.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ОТВЕТЫ НА ВОПРОСЫ END-->
    