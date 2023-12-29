
    <!-- 1 ЭКРАН КОНЕЦ-->
<div class="wrapper mb-sect">
    <div class="menu flex-3 _sb">
        <div class="burger">
            <i class="burger_js"></i>
        </div>
        <div class="header_logo">
            <a href="/">
                <img src="./assets/images/katalog/логотип.webp" alt="Логотип компании">
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
                <h1 class="h1">Круглые бани</h1>
                <ul class="h1_sub-title">
                
                    <li>- Нестандартные решения</li>
                    <li>- Кратчайшие сроки</li>
                    <li>- Гибкие цены</li>
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
                        <p>Какой формы Вам нравятся бани?</p>
                    </div>
                    <div class="quiz_content grid-3">
                    
                    <label for="0-0" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_0" name="Какой формы Вам нравятся бани?" id="0-0"
                               value="Не знаю,нужна консультация">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Не знаю,нужна консультация</a>
                        </span>
                    </label>
    
                    <label for="0-1" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_0" name="Какой формы Вам нравятся бани?" id="0-1"
                               value="Викинг">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Викинг</a>
                        </span>
                    </label>
    
                    <label for="0-2" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_0" name="Какой формы Вам нравятся бани?" id="0-2"
                               value="Квадро">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Квадро</a>
                        </span>
                    </label>
    
                    <label for="0-3" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_0" name="Какой формы Вам нравятся бани?" id="0-3"
                               value="Бочки">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Бочки</a>
                        </span>
                    </label>
    
                    <label for="0-4" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_0" name="Какой формы Вам нравятся бани?" id="0-4"
                               value="Парус">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Парус</a>
                        </span>
                    </label>
    
                    <label for="0-5" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_0" name="Какой формы Вам нравятся бани?" id="0-5"
                               value="Овал">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Овал</a>
                        </span>
                    </label>
    
                    <label for="0-6" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_0" name="Какой формы Вам нравятся бани?" id="0-6"
                               value="Круглая">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Круглая</a>
                        </span>
                    </label>
    
                    <label for="0-7" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_0" name="Какой формы Вам нравятся бани?" id="0-7"
                               value="Квадро-овал">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Квадро-овал</a>
                        </span>
                    </label>
    
                    <label for="0-8" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_0" name="Какой формы Вам нравятся бани?" id="0-8"
                               value="Банный комплекс">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Банный комплекс</a>
                        </span>
                    </label>
    
                    <label for="0-9" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_0" name="Какой формы Вам нравятся бани?" id="0-9"
                               value="Строительство бани">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Строительство бани</a>
                        </span>
                    </label>
    
                    </div>
            </div>
            <div class="quiz_wrap_js">
                <div class="quiz_zagolovok">
                    <p>Из какого материала предпочитаете бани бочки ?</p>
                    <span class="quiz_back quiz_back_js"></span>
                </div>
                <div class="quiz_content grid-3">
                    <label for="1-0" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_2" name="Из какого материала предпочитаете бани бочки ?" id="1-0"
                               value="Не знаю,нужна консультация">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Не знаю,нужна консультация</a>
                        </span>
                    </label>
    
                    <label for="1-1" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_2" name="Из какого материала предпочитаете бани бочки ?" id="1-1"
                               value="Ель">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Ель</a>
                        </span>
                    </label>
    
                    <label for="1-2" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_2" name="Из какого материала предпочитаете бани бочки ?" id="1-2"
                               value="Кедр">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Кедр</a>
                        </span>
                    </label>
    
                    <label for="1-3" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_2" name="Из какого материала предпочитаете бани бочки ?" id="1-3"
                               value="Сосна">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Сосна</a>
                        </span>
                    </label>
    
                    <label for="1-4" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_2" name="Из какого материала предпочитаете бани бочки ?" id="1-4"
                               value="Липа(при строительстве)">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Липа(при строительстве)</a>
                        </span>
                    </label>
    
                    <label for="1-5" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_2" name="Из какого материала предпочитаете бани бочки ?" id="1-5"
                               value="Осина(при строительстве)">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Осина(при строительстве)</a>
                        </span>
                    </label>
    
                </div>
            </div>
            <div class="quiz_wrap_js">
                <div class="quiz_zagolovok">
                    <p>Напишите адрес вашего объекта</p>
                    <span class="quiz_back quiz_back_js"></span>
                </div>
                <div class="quiz_content quiz_text_content">
                    <input class="inp_text area_js" type="text" name="адрес объекта"
                           placeholder="(Например, СНТ Ромашка)">
                    <p style="display:none; color: red" class="area_error">Проверьте верность заполнения формы</p>
                    <p class="btn area_js_btn">Далее</p>
                </div>
            </div>
            <div class="quiz_wrap_js">
                <div class="quiz_zagolovok">
                    <p>Когда планируете приобрести?</p>
                    <span class="quiz_back quiz_back_js"></span>
                </div>
                <div class="quiz_content grid-3">
                    <label for="3-0" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_3" name="Когда планируете приобрести?" id="3-0"
                               value="Сейчас">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Сейчас</a>
                        </span>
                    </label>
    
                    <label for="3-1" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_3" name="Когда планируете приобрести?" id="3-1"
                               value="В течении года">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">В течении года</a>
                        </span>
                    </label>
    
                    <label for="3-2" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_3" name="Когда планируете приобрести?" id="3-2"
                               value="От 1 до 2 лет">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">От 1 до 2 лет</a>
                        </span>
                    </label>
    
                    <label for="3-3" class="quiz_content_elem">
                        <input type="radio" data-name="quiz_rad_3" name="Когда планируете приобрести?" id="3-3"
                               value="Провожу оценку рынка">
                        <span class="img calc_img">
                            <a href="#" class="remove_link">Провожу оценку рынка</a>
                        </span>
                    </label>
    
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

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня круглая с душевой
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка3.webp"
                     src="./assets/images/katalog/картинка3.webp" 
                     alt="Баня круглая с душевой"
                     title="Баня круглая с душевой">
            </div>
            <ul class="-bullits">
                    <li>с</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 109999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня овальная круглая
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка1.webp"
                     src="./assets/images/katalog/картинка1.webp" 
                     alt="Баня овальная круглая"
                     title="Баня овальная круглая">
            </div>
            <ul class="-bullits">
                    <li>-Париться можно даже в мороз -30 ℃</li>
                    <li>-Прогревается за 30 минут</li>
                    <li>-Готовые</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 118999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня круглая 2 метра
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка5.webp"
                     src="./assets/images/katalog/картинка5.webp" 
                     alt="Баня круглая 2 метра"
                     title="Баня круглая 2 метра">
            </div>
            <ul class="-bullits">
                    <li>-С помывочным отделением</li>
                    <li>-Доставка и сборка на участке</li>
                    <li>-Мини</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 119999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня круглая 3 метра 3х3
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка4.webp"
                     src="./assets/images/katalog/картинка4.webp" 
                     alt="Баня круглая 3 метра 3х3"
                     title="Баня круглая 3 метра 3х3">
            </div>
            <ul class="-bullits">
                    <li>-Компактная</li>
                    <li>-Раздевалка</li>
                    <li>-Вместимость 2-4 человека</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 129999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня круглая топка с улицы
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка10.webp"
                     src="./assets/images/katalog/картинка10.webp" 
                     alt="Баня круглая топка с улицы"
                     title="Баня круглая топка с улицы">
            </div>
            <ul class="-bullits">
                    <li>-Печь марки Костёр</li>
                    <li>-Перевозные</li>
                    <li>-Утеплённый металлический экран</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 129999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня круглая 4 метра
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка6.webp"
                     src="./assets/images/katalog/картинка6.webp" 
                     alt="Баня круглая 4 метра"
                     title="Баня круглая 4 метра">
            </div>
            <ul class="-bullits">
                    <li>-Лидером продаж</li>
                    <li>-Приступок из кедра </li>
                    <li>-Дополнить верандой со скамейками или козырьком с одной стороны</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 139999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня круглая с крыльцом
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка12.webp"
                     src="./assets/images/katalog/картинка12.webp" 
                     alt="Баня круглая с крыльцом"
                     title="Баня круглая с крыльцом">
            </div>
            <ul class="-bullits">
                    <li>-Лучшие на рынке</li>
                    <li>-Компактно на участке</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 149999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня круглая из лиственницы
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка13.webp"
                     src="./assets/images/katalog/картинка13.webp" 
                     alt="Баня круглая из лиственницы"
                     title="Баня круглая из лиственницы">
            </div>
            <ul class="-bullits">
                    <li>-Сухой материал</li>
                    <li>-Камерной сушки</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 159999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня круглая 2 на 6
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка11.webp"
                     src="./assets/images/katalog/картинка11.webp" 
                     alt="Баня круглая 2 на 6"
                     title="Баня круглая 2 на 6">
            </div>
            <ul class="-bullits">
                    <li>-Боковой вход</li>
                    <li>-Стены профилированный брус</li>
                    <li>-Толщина стен 44мм</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 179999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня квадро круглая 
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка7.webp"
                     src="./assets/images/katalog/картинка7.webp" 
                     alt="Баня квадро круглая "
                     title="Баня квадро круглая ">
            </div>
            <ul class="-bullits">
                    <li>-Установка за 1 день</li>
                    <li>-Поставим за 1 час</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 189999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня круглая с бассейном 
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка8.webp"
                     src="./assets/images/katalog/картинка8.webp" 
                     alt="Баня круглая с бассейном "
                     title="Баня круглая с бассейном ">
            </div>
            <ul class="-bullits">
                    <li>-Внутри или снаружи</li>
                    <li>-Купель</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 199999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Квадро овальные бани круглые
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка2.webp"
                     src="./assets/images/katalog/картинка2.webp" 
                     alt="Квадро овальные бани круглые"
                     title="Квадро овальные бани круглые">
            </div>
            <ul class="-bullits">
                    <li>-Доставка готовой</li>
                    <li>-Сборка на участке</li>
                    <li>-Срок службы 25 лет</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 209999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня круглая 5 на 5
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка9.webp"
                     src="./assets/images/katalog/картинка9.webp" 
                     alt="Баня круглая 5 на 5"
                     title="Баня круглая 5 на 5">
            </div>
            <ul class="-bullits">
                    <li>-Массив хвойных пород</li>
                    <li>-Козырек из кедра</li>
                    <li>-Долговечные</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 249999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка открытая на улице
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка14.webp"
                     src="./assets/images/katalog/картинка14.webp" 
                     alt="Баня бочка открытая на улице"
                     title="Баня бочка открытая на улице">
            </div>
            <ul class="-bullits">
                    <li>-Релаксация на своей даче</li>
                    <li>-С подогревом</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 169999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка 2х3
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка15.webp"
                     src="./assets/images/katalog/картинка15.webp" 
                     alt="Баня бочка 2х3"
                     title="Баня бочка 2х3">
            </div>
            <ul class="-bullits">
                    <li>-Мобильная</li>
                    <li>-Готовая</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 169999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка 3х4
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка16.webp"
                     src="./assets/images/katalog/картинка16.webp" 
                     alt="Баня бочка 3х4"
                     title="Баня бочка 3х4">
            </div>
            <ul class="-bullits">
                    <li>-Стандартные проекты</li>
                    <li>-Индивидуальный заказ</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 219999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка круглая 3 секции
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка17.webp"
                     src="./assets/images/katalog/картинка17.webp" 
                     alt="Баня бочка круглая 3 секции"
                     title="Баня бочка круглая 3 секции">
            </div>
            <ul class="-bullits">
                    <li>-Сматр</li>
                    <li>-Просторная</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 169999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка с боковым входом
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка18.webp"
                     src="./assets/images/katalog/картинка18.webp" 
                     alt="Баня бочка с боковым входом"
                     title="Баня бочка с боковым входом">
            </div>
            <ul class="-bullits">
                    <li>-Расположения дорожек</li>
                    <li>-Камерная сушка</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 119999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка Квадро
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка19.webp"
                     src="./assets/images/katalog/картинка19.webp" 
                     alt="Баня бочка Квадро"
                     title="Баня бочка Квадро">
            </div>
            <ul class="-bullits">
                    <li>-Закругленные углы</li>
                    <li>-Красивый дизайн</li>
                    <li>-Обработка дна</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 219999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Викинг
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка20.webp"
                     src="./assets/images/katalog/картинка20.webp" 
                     alt="Викинг"
                     title="Викинг">
            </div>
            <ul class="-bullits">
                    <li>-Внешний вид</li>
                    <li>-Премиальные материалы</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 219999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                6 на 6
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка21.webp"
                     src="./assets/images/katalog/картинка21.webp" 
                     alt="6 на 6"
                     title="6 на 6">
            </div>
            <ul class="-bullits">
                    <li>-Дешевле </li>
                    <li>-Бесплатной доставкой</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 329999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка 3 на 5
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка22.webp"
                     src="./assets/images/katalog/картинка22.webp" 
                     alt="Баня бочка 3 на 5"
                     title="Баня бочка 3 на 5">
            </div>
            <ul class="-bullits">
                    <li>-Обычные</li>
                    <li>-В лапу</li>
                    <li>-В чашу</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 229999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка  3 на 4
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка23.webp"
                     src="./assets/images/katalog/картинка23.webp" 
                     alt="Баня бочка  3 на 4"
                     title="Баня бочка  3 на 4">
            </div>
            <ul class="-bullits">
                    <li>-Самый удобный проект и планировка</li>
                    <li>-Доступные цены</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 329999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка  квадро 3 метра
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка24.webp"
                     src="./assets/images/katalog/картинка24.webp" 
                     alt="Баня бочка  квадро 3 метра"
                     title="Баня бочка  квадро 3 метра">
            </div>
            <ul class="-bullits">
                    <li>-Покупаемая</li>
                    <li>-Компактная</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 199999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка 5 метров
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка25.webp"
                     src="./assets/images/katalog/картинка25.webp" 
                     alt="Баня бочка 5 метров"
                     title="Баня бочка 5 метров">
            </div>
            <ul class="-bullits">
                    <li>-Много помещений</li>
                    <li>-Просторно</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 229999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка с комнатой отдыха
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка26.webp"
                     src="./assets/images/katalog/картинка26.webp" 
                     alt="Баня бочка с комнатой отдыха"
                     title="Баня бочка с комнатой отдыха">
            </div>
            <ul class="-bullits">
                    <li>-На природе</li>
                    <li>-В любой сезон</li>
                    <li>-На даче</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 229999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка 6 на 3
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка27.webp"
                     src="./assets/images/katalog/картинка27.webp" 
                     alt="Баня бочка 6 на 3"
                     title="Баня бочка 6 на 3">
            </div>
            <ul class="-bullits">
                    <li>- С планами</li>
                    <li>- Описание материалов</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 229999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка Овальная 4х6
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка28.webp"
                     src="./assets/images/katalog/картинка28.webp" 
                     alt="Баня бочка Овальная 4х6"
                     title="Баня бочка Овальная 4х6">
            </div>
            <ul class="-bullits">
                    <li>-Торцевой вход</li>
                    <li>-Покраска в два слоя</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 299999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка Квадро 5 метров
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка29.webp"
                     src="./assets/images/katalog/картинка29.webp" 
                     alt="Баня бочка Квадро 5 метров"
                     title="Баня бочка Квадро 5 метров">
            </div>
            <ul class="-bullits">
                    <li>-Стяжки из нержавеющей стали</li>
                    <li>-Мягкая черепица</li>
                    <li>-Цвет на выбор</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 329999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Бочки с панорамным окном
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка30.webp"
                     src="./assets/images/katalog/картинка30.webp" 
                     alt="Бочки с панорамным окном"
                     title="Бочки с панорамным окном">
            </div>
            <ul class="-bullits">
                    <li>- Со стеклом</li>
                    <li>-Панорамное остекление</li>
                    <li>-Атмосфера уюта</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 329999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка с террасой
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка31.webp"
                     src="./assets/images/katalog/картинка31.webp" 
                     alt="Баня бочка с террасой"
                     title="Баня бочка с террасой">
            </div>
            <ul class="-bullits">
                    <li>-С верандой</li>
                    <li>-Купелью</li>
                    <li>-Тамбуром</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 229999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Бочки с душем
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка32.webp"
                     src="./assets/images/katalog/картинка32.webp" 
                     alt="Бочки с душем"
                     title="Бочки с душем">
            </div>
            <ul class="-bullits">
                    <li>-Фурако</li>
                    <li>-Японская</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 229999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка 6х6
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка33.webp"
                     src="./assets/images/katalog/картинка33.webp" 
                     alt="Баня бочка 6х6"
                     title="Баня бочка 6х6">
            </div>
            <ul class="-bullits">
                    <li>-Большая</li>
                    <li>-Просторная</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 329999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка  4х4
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка34.webp"
                     src="./assets/images/katalog/картинка34.webp" 
                     alt="Баня бочка  4х4"
                     title="Баня бочка  4х4">
            </div>
            <ul class="-bullits">
                    <li>-Овал</li>
                    <li>-Квадро хаус</li>
                    <li>-Люкс</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 329999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                С электрической печкой
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка35.webp"
                     src="./assets/images/katalog/картинка35.webp" 
                     alt="С электрической печкой"
                     title="С электрической печкой">
            </div>
            <ul class="-bullits">
                    <li>-Harvia</li>
                    <li>-Безопасна</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 169999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Сауна кедровая
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка36.webp"
                     src="./assets/images/katalog/картинка36.webp" 
                     alt="Сауна кедровая"
                     title="Сауна кедровая">
            </div>
            <ul class="-bullits">
                    <li>-Долговечная</li>
                    <li>-Полезная</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 169999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка 2 на 2
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка37.webp"
                     src="./assets/images/katalog/картинка37.webp" 
                     alt="Баня бочка 2 на 2"
                     title="Баня бочка 2 на 2">
            </div>
            <ul class="-bullits">
                    <li>-Из липы</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 219999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Квадро бочки  6 метров
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка38.webp"
                     src="./assets/images/katalog/картинка38.webp" 
                     alt="Квадро бочки  6 метров"
                     title="Квадро бочки  6 метров">
            </div>
            <ul class="-bullits">
            </ul>
            <a href="#kalkulyator" class="-cena">от 329999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Квадро  бочки овал 4
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка39.webp"
                     src="./assets/images/katalog/картинка39.webp" 
                     alt="Квадро  бочки овал 4"
                     title="Квадро  бочки овал 4">
            </div>
            <ul class="-bullits">
            </ul>
            <a href="#kalkulyator" class="-cena">от 269999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка 4х5
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка40.webp"
                     src="./assets/images/katalog/картинка40.webp" 
                     alt="Баня бочка 4х5"
                     title="Баня бочка 4х5">
            </div>
            <ul class="-bullits">
            </ul>
            <a href="#kalkulyator" class="-cena">от 269999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка круглые на прицепе
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка41.webp"
                     src="./assets/images/katalog/картинка41.webp" 
                     alt="Баня бочка круглые на прицепе"
                     title="Баня бочка круглые на прицепе">
            </div>
            <ul class="-bullits">
                    <li>-На колесах </li>
                    <li>-Удобна</li>
                    <li>-Перевозная</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 119999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка стеклянная 
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка42.webp"
                     src="./assets/images/katalog/картинка42.webp" 
                     alt="Баня бочка стеклянная "
                     title="Баня бочка стеклянная ">
            </div>
            <ul class="-bullits">
                    <li>-Око</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 169999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка хамам
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка43.webp"
                     src="./assets/images/katalog/картинка43.webp" 
                     alt="Баня бочка хамам"
                     title="Баня бочка хамам">
            </div>
            <ul class="-bullits">
                    <li>-Аква</li>
                    <li>-Доступной цене</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 169999р</a>
        </article>

        <article itemscope itemtype="https://schema.org/Product" class="filter_content_elem filter_content_elem_js">
            <span data-fancybox data-src="#zayavka" class="filter_content_elem_name yellow_line_text" itemprop="name">
                Баня бочка с беседкой под одной крышей
            </span>
            <div class="-img">
                <img class="lazy" 
                     srcset="./assets/images/image.svg"
                     data-srcset="./assets/images/katalog/картинка44.webp"
                     src="./assets/images/katalog/картинка44.webp" 
                     alt="Баня бочка с беседкой под одной крышей"
                     title="Баня бочка с беседкой под одной крышей">
            </div>
            <ul class="-bullits">
                    <li>-Красивая архитектура</li>
            </ul>
            <a href="#kalkulyator" class="-cena">от 469999р</a>
        </article>
      
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
                    <h3>Дополнительные услуги и товары</h3>
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
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Строительство дачных и для постоянного проживания домов и бань:</a>
                </td>
                <td>
                     
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>1. Каркасные </a>
                </td>
                <td>
                     
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Для зимнего проживания с коммуникациями  под отделку</a>
                </td>
                <td>
                     От 2220999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Дом  8 на 8 1 этаж</a>
                </td>
                <td>
                     От 1720999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Домокомплекты с завода</a>
                </td>
                <td>
                     От 1220999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Недорогой   для постоянного проживания</a>
                </td>
                <td>
                     От 1020999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>1 этаж  дачный   7 на 7</a>
                </td>
                <td>
                     От 520999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>10х10 одноэтажный</a>
                </td>
                <td>
                     От 3129999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Одноэтажный  4 на 4 </a>
                </td>
                <td>
                     От 122599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Одноэтажный  15 на  15</a>
                </td>
                <td>
                     От 5000999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Утепление каркасного </a>
                </td>
                <td>
                     От 799 р за м.кв.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Двухэтажный или одноэтажный  дачный  6х6</a>
                </td>
                <td>
                     От 2222599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Одноэтажный  12 на 12</a>
                </td>
                <td>
                     От 2500999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Дом  с эркером</a>
                </td>
                <td>
                     От 2200599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Дом  летний  </a>
                </td>
                <td>
                     От 629999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Панельный  с коммуникациями и отделкой 100 м2 1 этаж</a>
                </td>
                <td>
                     От 2200599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Угловой(г-образный)   </a>
                </td>
                <td>
                     От 1200599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox> двухэтажные а 9 на 9</a>
                </td>
                <td>
                     От 2300599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Загородный одноэтажные а с панорамными окнами</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>1 этажный   на винтовых сваях</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>3 на  3</a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Квадратные </a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Электрика в каркасном под ключ</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Северный </a>
                </td>
                <td>
                     От 230599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Пристройки</a>
                </td>
                <td>
                     От 33999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Реконструкция каркасного а</a>
                </td>
                <td>
                     От 2599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Шале</a>
                </td>
                <td>
                     От 2599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Фахверк</a>
                </td>
                <td>
                     От 22220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>В кредит</a>
                </td>
                <td>
                     От 359499 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С антресолью</a>
                </td>
                <td>
                     От 1102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>11 на 11</a>
                </td>
                <td>
                     От 1102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Баня по финской технологии</a>
                </td>
                <td>
                     От 2599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Ветрозащита для стен</a>
                </td>
                <td>
                     От 2599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Утеплитель для стен</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Пароизоляция для стен</a>
                </td>
                <td>
                     От 3529499 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Щитовой </a>
                </td>
                <td>
                     От 1599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Утеплитель для стен 100мм</a>
                </td>
                <td>
                     От 2203300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Рулонный утеплитель для стен</a>
                </td>
                <td>
                     От 1909229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Электрика</a>
                </td>
                <td>
                     От 60000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Утеплитель для стен 100мм</a>
                </td>
                <td>
                     От 220999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Рулонный утеплитель для стен</a>
                </td>
                <td>
                     От 11599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Установка пластиковых окон</a>
                </td>
                <td>
                     От 2320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Коробка</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>2. Из сруба и бревна</a>
                </td>
                <td>
                     
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Отделка имитацией  сайдинг под бревно) внутри и снаружи</a>
                </td>
                <td>
                     От 499 р за м.кв.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Покраска внутри и снаружи </a>
                </td>
                <td>
                     От 199 р за м.кв.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Зимний 1 этаж</a>
                </td>
                <td>
                     От 1220999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Шлифовка стен внутри и снаружи </a>
                </td>
                <td>
                     От 299 р за м.кв.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сухого профилированного  камерной сушки</a>
                </td>
                <td>
                     От 220999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из клееного </a>
                </td>
                <td>
                     От 1000229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Рубленные </a>
                </td>
                <td>
                     От 400999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Внутренняя покраска деревянного с имитацией </a>
                </td>
                <td>
                     От 199 р за м.кв.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Под усадку  из профилированного </a>
                </td>
                <td>
                     От 1993229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Деревянные из клееного </a>
                </td>
                <td>
                     От 1229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сруб сечением 150 на 150</a>
                </td>
                <td>
                     От 2500999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Зимний  для круглогодичного проживания</a>
                </td>
                <td>
                     От 1799 р за м.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Мини бани бочки</a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>8х8 1 этажный</a>
                </td>
                <td>
                     От 2320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Баня из бруса  200х200</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>7х8</a>
                </td>
                <td>
                     От 2320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Гостевой готовый   </a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Утепление снаружи и внутри</a>
                </td>
                <td>
                     От 800 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>150 м2</a>
                </td>
                <td>
                     От 6553999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Двухэтажный с комнатой отдыха</a>
                </td>
                <td>
                     От 2102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Домокомплект бани  из клееного </a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Баня   6х9</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Баня бочка в скандинавском стиле</a>
                </td>
                <td>
                     От 2203300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox> 7 на 7</a>
                </td>
                <td>
                     От 202599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Баня с гаражом</a>
                </td>
                <td>
                     От 1909229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>8 на 8 с мансардой</a>
                </td>
                <td>
                     От 1213299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из круглого </a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Рубка в чашу</a>
                </td>
                <td>
                     От 230599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из кирпича</a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сборка клееного </a>
                </td>
                <td>
                     От 70599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Баня сечением 100х150</a>
                </td>
                <td>
                     От 1909229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Блок хаус</a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Большой</a>
                </td>
                <td>
                     От 54000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С сауной</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Брусья настенные</a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox> 9 на 9 одноэтажный  </a>
                </td>
                <td>
                     От 230599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Брус щитовой </a>
                </td>
                <td>
                     От 70599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Герметация  </a>
                </td>
                <td>
                     От 2200599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Баня с сечением 100х150</a>
                </td>
                <td>
                     От 629999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Фахверк  клееного </a>
                </td>
                <td>
                     От 200599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сруб бани конструктор   </a>
                </td>
                <td>
                     От 210999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Лестница в баню</a>
                </td>
                <td>
                     От 2220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Премиум класса баня </a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Брус калиброванный</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>3 спальни</a>
                </td>
                <td>
                     От 2540300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>3. Беседки для дачи:</a>
                </td>
                <td>
                     
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Парковые</a>
                </td>
                <td>
                     От 30999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Изготовление</a>
                </td>
                <td>
                     От 100999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из минибруса</a>
                </td>
                <td>
                     От 1720999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Застеклить алюминиевым профилем </a>
                </td>
                <td>
                     От 1299 р за м.кв.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Прямоугольная беседка</a>
                </td>
                <td>
                     От 122599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Готовые садовые из бруса дерева</a>
                </td>
                <td>
                     От 21599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>6 на 6</a>
                </td>
                <td>
                     От 10999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С односкатной крышей</a>
                </td>
                <td>
                     От 22220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Кованые </a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Русская</a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>5 на 5</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Двухэтажная</a>
                </td>
                <td>
                     От 12599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>2 на 2</a>
                </td>
                <td>
                     От 112299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из бруса 100х100</a>
                </td>
                <td>
                     От 22599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из ротанга</a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>5 на 3</a>
                </td>
                <td>
                     От 2203300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С плоской крышей</a>
                </td>
                <td>
                     От 159499 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Хай тек</a>
                </td>
                <td>
                     От 122229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С летней кухней</a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С печкой</a>
                </td>
                <td>
                     От 999 р за метр
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из дпк</a>
                </td>
                <td>
                     От 122599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Дверь</a>
                </td>
                <td>
                     От 3939 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Треугольная </a>
                </td>
                <td>
                     От 540300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Резная </a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Квадратная</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из газобетона</a>
                </td>
                <td>
                     От 653999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Без крыши</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>2 на 4</a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Стекло</a>
                </td>
                <td>
                     От 999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Окна из поликарбоната </a>
                </td>
                <td>
                     От 222220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>2 на 3</a>
                </td>
                <td>
                     От 533939 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Треугольная</a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Резная</a>
                </td>
                <td>
                     От 70599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Квадратная</a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Пристройка</a>
                </td>
                <td>
                     От 230599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Скамейка для со спинкой</a>
                </td>
                <td>
                     От 2203300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Кованная с мангалом</a>
                </td>
                <td>
                     От 700599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Шатры непромокаемые ветроустойчивые</a>
                </td>
                <td>
                     От 122229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Тент</a>
                </td>
                <td>
                     От 999 р за метр
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С мангальной зоной</a>
                </td>
                <td>
                     От 1102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Шатер</a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Мангалы для с дымоходом из металла</a>
                </td>
                <td>
                     От 3599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Мангал с крышей</a>
                </td>
                <td>
                     От 122599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Шторы для уличной</a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Металлическая </a>
                </td>
                <td>
                     От 2203300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Деревянные шестигранные</a>
                </td>
                <td>
                     От 540300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Металлические с мангалом</a>
                </td>
                <td>
                     От 70599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Эконом вариант</a>
                </td>
                <td>
                     От 359499 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Садовые</a>
                </td>
                <td>
                     От 1102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Гибкое стекло </a>
                </td>
                <td>
                     От 533939 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Для шашлыка</a>
                </td>
                <td>
                     От 1102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Солнцезащитная сетка</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Поликарбоната</a>
                </td>
                <td>
                     От 12599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Закрытая</a>
                </td>
                <td>
                     От 133939 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Дачные</a>
                </td>
                <td>
                     От 112299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Деревянная решетка </a>
                </td>
                <td>
                     От 2000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Застекленная</a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Деревянные жалюзи</a>
                </td>
                <td>
                     От 700599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С хозблоком</a>
                </td>
                <td>
                     От 122229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Закрытая с мангальной зоной</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Навес </a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>В стиле лофт</a>
                </td>
                <td>
                     От 999 р за метр
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Карниз для уличных штор </a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Печь барбекю </a>
                </td>
                <td>
                     От 3599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Современные </a>
                </td>
                <td>
                     От 3939 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Модульная </a>
                </td>
                <td>
                     От 299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Зимняя </a>
                </td>
                <td>
                     От 33999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Прозрачные рольставни для  и открытых террас</a>
                </td>
                <td>
                     От 2599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>На воде</a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Гриль</a>
                </td>
                <td>
                     От 2599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Кованые</a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Барбекю из кирпича</a>
                </td>
                <td>
                     От 2203300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С односкатной крышей</a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Для отдыха</a>
                </td>
                <td>
                     От 1102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Тент на у 3х3 без каркаса</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Жалюзи от дождя ветра</a>
                </td>
                <td>
                     От 533939 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Тепло</a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сборная </a>
                </td>
                <td>
                     От 133939 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Застекленная </a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>6х4</a>
                </td>
                <td>
                     От 51599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Шале баня</a>
                </td>
                <td>
                     От 331599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Открытая баня</a>
                </td>
                <td>
                     От 129999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Веранда</a>
                </td>
                <td>
                     От 1993229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Прямоугольная </a>
                </td>
                <td>
                     От 3001999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С мангалом барбекю печкой застекленные</a>
                </td>
                <td>
                     От 122599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С мангальной зоной из кирпича</a>
                </td>
                <td>
                     От 1999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Летняя</a>
                </td>
                <td>
                     От 202099 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Печь в баню</a>
                </td>
                <td>
                     От 12599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Крыло</a>
                </td>
                <td>
                     От 30599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Китайская</a>
                </td>
                <td>
                     От 1229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Восьмиугольная баня</a>
                </td>
                <td>
                     От 100999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Треугольная баня</a>
                </td>
                <td>
                     От 1200599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Резная а</a>
                </td>
                <td>
                     От 800 р за м
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С очагом</a>
                </td>
                <td>
                     От 5599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Крыша для бани</a>
                </td>
                <td>
                     От 1220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С игровой площадкой для детей</a>
                </td>
                <td>
                     От 322000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Комплект бань</a>
                </td>
                <td>
                     От 629999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сборную</a>
                </td>
                <td>
                     От 500999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Солнечные</a>
                </td>
                <td>
                     От 800599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из бетона баня</a>
                </td>
                <td>
                     От 210999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Гирлянда </a>
                </td>
                <td>
                     От 800599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Флоренция</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Маленькая</a>
                </td>
                <td>
                     От 800 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Ресторана</a>
                </td>
                <td>
                     От 2329999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Конструктор</a>
                </td>
                <td>
                     От 400599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Брезентовые шторы для и</a>
                </td>
                <td>
                     От 22000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Двухскатная</a>
                </td>
                <td>
                     От 999 р за метр
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Дорогие</a>
                </td>
                <td>
                     От 199999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>5.Винтовая свая:</a>
                </td>
                <td>
                     
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Диаметр 219 для фундамента</a>
                </td>
                <td>
                     От 999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>4000</a>
                </td>
                <td>
                     От 1220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Конусная  </a>
                </td>
                <td>
                     От 1220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>76х2500</a>
                </td>
                <td>
                     От 1220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>108х2500 с оголовком </a>
                </td>
                <td>
                     От 1229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>57х2000</a>
                </td>
                <td>
                     От 1229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>89 на  1500</a>
                </td>
                <td>
                     От 1229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>133х3000 </a>
                </td>
                <td>
                     От 1599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>76х2000</a>
                </td>
                <td>
                     От 1599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>108х4000</a>
                </td>
                <td>
                     От 2000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Под забор</a>
                </td>
                <td>
                     От 1220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Мини  </a>
                </td>
                <td>
                     От 299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>57х1500 </a>
                </td>
                <td>
                     От 1220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>5 метров</a>
                </td>
                <td>
                     От 1220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>89х2500</a>
                </td>
                <td>
                     От 999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>6.Проектирование и готовые проекты:</a>
                </td>
                <td>
                     
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С мансардой и террасой</a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>9 на 9 </a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Одноэтажный  до 100м2</a>
                </td>
                <td>
                     От 30599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Небольших с комнатой отдыха</a>
                </td>
                <td>
                     От 12099 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С баней под одной крышей</a>
                </td>
                <td>
                     От 12599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Треугольных  коттеджей</a>
                </td>
                <td>
                     От 19229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С двумя спальнями </a>
                </td>
                <td>
                     От 20000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Коттедж современные</a>
                </td>
                <td>
                     От 22099 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Рубленных домов и бань</a>
                </td>
                <td>
                     От 22000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Баня с 2 комнатами отдыха</a>
                </td>
                <td>
                     От 23300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Барнхаусы двухэтажных</a>
                </td>
                <td>
                     От 22099 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>4 на 7 </a>
                </td>
                <td>
                     От 22220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Баня 6х6 с террасой</a>
                </td>
                <td>
                     От 22999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Перевозных  бань</a>
                </td>
                <td>
                     От 23599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Двухэтажных из сип панелей</a>
                </td>
                <td>
                     От 51599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из сип панелей до 100</a>
                </td>
                <td>
                     От 52000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>7.Банный чан</a>
                </td>
                <td>
                     
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Бочка на дровах</a>
                </td>
                <td>
                     От 52999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Столичный </a>
                </td>
                <td>
                     От 62999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Комплекс с чаном</a>
                </td>
                <td>
                     От 54999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Бриллиант</a>
                </td>
                <td>
                     От 72999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Встраиваемый</a>
                </td>
                <td>
                     От 32999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сибирский </a>
                </td>
                <td>
                     От 52999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>На газу</a>
                </td>
                <td>
                     От 42999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Келлек</a>
                </td>
                <td>
                     От 54000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Крышка для чана</a>
                </td>
                <td>
                     От 52999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С подсветкой</a>
                </td>
                <td>
                     От 72999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Встроенный в террасу</a>
                </td>
                <td>
                     От 32999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Фурако</a>
                </td>
                <td>
                     От 52999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Столичный </a>
                </td>
                <td>
                     От 82999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>На прицепе</a>
                </td>
                <td>
                     От 52999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Премиум </a>
                </td>
                <td>
                     От 52999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>7.Остальное</a>
                </td>
                <td>
                     
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Пристройка закрытой веранды</a>
                </td>
                <td>
                     От 100999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Готовые бани модульная  с комнатой отдыха</a>
                </td>
                <td>
                     От 100999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Металлическая лестница для крыльца </a>
                </td>
                <td>
                     От 100999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Построить веранду</a>
                </td>
                <td>
                     От 100999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сруб бани из бруса 7 на 9</a>
                </td>
                <td>
                     От 1102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>50 кв м</a>
                </td>
                <td>
                     От 1102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>80 кв м</a>
                </td>
                <td>
                     От 1102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из бревна с балконом</a>
                </td>
                <td>
                     От 1102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Фурако с дровяной печкой</a>
                </td>
                <td>
                     От 1102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Пристройка веранды к бане бочке</a>
                </td>
                <td>
                     От 1102999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Готовая бытовка(вагончик) под ключ с печкой</a>
                </td>
                <td>
                     От 111599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сруб из 28 диаметра</a>
                </td>
                <td>
                     От 112299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Бочка мобиба</a>
                </td>
                <td>
                     От 112299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Баня из лафета</a>
                </td>
                <td>
                     От 112299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сруб из бруса 3х4 </a>
                </td>
                <td>
                     От 11599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Бани с  планировкой двухэтажные</a>
                </td>
                <td>
                     От 1200599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С панорамными окнами под ключ</a>
                </td>
                <td>
                     От 1200599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>А в стиле барнхаус одноэтажные</a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Изготовление саун под ключ</a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Мобильная  баня бочка для дачи</a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox> из сип панелей 4х9</a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Гриль электрический для а</a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Построить веранду</a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Дубль </a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сруб бани шале</a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Встраиваемая печь</a>
                </td>
                <td>
                     От 120999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сруб бани 9 на 9</a>
                </td>
                <td>
                     От 1212299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Переделка крыши </a>
                </td>
                <td>
                     От 1212299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Пристройка к бане</a>
                </td>
                <td>
                     От 1213299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Гостевой  для собак</a>
                </td>
                <td>
                     От 1213299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Забор из евроштакетника на винтовых сваях</a>
                </td>
                <td>
                     От 1220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>3х4</a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Загородный 36 м2</a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Коттедж   9 на 10 </a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из сип панелей с плоской крышей</a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Баня бочка из кедра</a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Внутренняя отделка а из сип панелей</a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Капсульная </a>
                </td>
                <td>
                     От 122299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Ремонт фундамента</a>
                </td>
                <td>
                     От 122599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Дубль  кедр</a>
                </td>
                <td>
                     От 122599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Коттедж в рассрочку</a>
                </td>
                <td>
                     От 12299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из сип панелей барнхаус</a>
                </td>
                <td>
                     От 12299 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>5 на 5 на 5</a>
                </td>
                <td>
                     От 1229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Современный  из оцентровоного бревна </a>
                </td>
                <td>
                     От 123999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Деревянный на 3 спальни</a>
                </td>
                <td>
                     От 123999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Хозяйственная постройка</a>
                </td>
                <td>
                     От 123999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Кедровая бочка квадратная</a>
                </td>
                <td>
                     От 12599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Замена пола в бане бочке</a>
                </td>
                <td>
                     От 12599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Веранда</a>
                </td>
                <td>
                     От 12999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Металлическая  купить</a>
                </td>
                <td>
                     От 133939 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>И комната отдыха под одной крышей</a>
                </td>
                <td>
                     От 133939 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Межвенцовый герметик</a>
                </td>
                <td>
                     От 159499 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Пристройка туалета и душа</a>
                </td>
                <td>
                     От 159499 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Бурение винтовых свай под бани бочки</a>
                </td>
                <td>
                     От 1599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Бани с комнатой для проживания</a>
                </td>
                <td>
                     От 1720999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Пристройка туалета и душа</a>
                </td>
                <td>
                     От 1720999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Дверь в баню бочку на заказ</a>
                </td>
                <td>
                     От 1799 р за м.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Ремонт старого </a>
                </td>
                <td>
                     От 1799 р за м.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Обвязка винтовых свай</a>
                </td>
                <td>
                     От 1909229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Японская  фурако</a>
                </td>
                <td>
                     От 1909229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Пристройка веранды к бане бочке</a>
                </td>
                <td>
                     От 199 р за м.кв.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Коттедж  10 на 8</a>
                </td>
                <td>
                     От 199 р за м.кв.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Рубка 6х9</a>
                </td>
                <td>
                     От 199229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Плавучая </a>
                </td>
                <td>
                     От 199229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Строительство хамама турецкая </a>
                </td>
                <td>
                     От 199229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Т образная  викинг</a>
                </td>
                <td>
                     От 199229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С комнатой для проживания и террасой</a>
                </td>
                <td>
                     От 1993229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Переделка крыши</a>
                </td>
                <td>
                     От 1993229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Компенсаторы и краты усадки </a>
                </td>
                <td>
                     От 1999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Бревна сосны</a>
                </td>
                <td>
                     От 2000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Коттедж с эркером</a>
                </td>
                <td>
                     От 2000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>По финской технологии </a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из калиброванного</a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Домокомплект 7 на 8</a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Домокомплект лиственница</a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Коттедж 4 на 6</a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Дубовая бочка</a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Привозная  из оцилиндрованного</a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Люстра в баню</a>
                </td>
                <td>
                     От 200000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Душевые в баню</a>
                </td>
                <td>
                     От 20000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>12 на 12</a>
                </td>
                <td>
                     От 2000599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из клееного кедра</a>
                </td>
                <td>
                     От 2000599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Купель фурако с печкой</a>
                </td>
                <td>
                     От 2002099 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox> Из сендвичных панелей </a>
                </td>
                <td>
                     От 200999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Современный гостевой </a>
                </td>
                <td>
                     От 202599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>За три дня готовая</a>
                </td>
                <td>
                     От 203300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Установка печи в бане </a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Бочка железная</a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Теплый шов для деревянных бань</a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Буржуйка </a>
                </td>
                <td>
                     От 20599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Купель фурако</a>
                </td>
                <td>
                     От 210999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Валка 8 на 9</a>
                </td>
                <td>
                     От 210999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Готовая из липы</a>
                </td>
                <td>
                     От 210999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Валка 6х8</a>
                </td>
                <td>
                     От 210999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сборная баня бочка</a>
                </td>
                <td>
                     От 210999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Угловой  </a>
                </td>
                <td>
                     От 210999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Канадская рубка </a>
                </td>
                <td>
                     От 210999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Модульный  </a>
                </td>
                <td>
                     От 21599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С баней и бассейном</a>
                </td>
                <td>
                     От 2200599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С 1 спальней</a>
                </td>
                <td>
                     От 2200599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Кедровая бочка круглая овальная</a>
                </td>
                <td>
                     От 2203300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Рубленный </a>
                </td>
                <td>
                     От 220599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Бревенчатый ручной рубки</a>
                </td>
                <td>
                     От 220599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Срубы гостевые</a>
                </td>
                <td>
                     От 220599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>В стиле  барнхаус</a>
                </td>
                <td>
                     От 220999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Строительство бань гаражей</a>
                </td>
                <td>
                     От 220999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Гостевой для собаки</a>
                </td>
                <td>
                     От 220999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Демонтаж винтовых свай</a>
                </td>
                <td>
                     От 2220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из сип панелей в ипотеку</a>
                </td>
                <td>
                     От 22220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>На баня бочка колесах</a>
                </td>
                <td>
                     От 22220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Бани из кело</a>
                </td>
                <td>
                     От 22220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Свайный фундамент для бани бочки</a>
                </td>
                <td>
                     От 22220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>8х10 одноэтажный</a>
                </td>
                <td>
                     От 222220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сарай на винтовых сваях</a>
                </td>
                <td>
                     От 222220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox> из бревен с подвалом</a>
                </td>
                <td>
                     От 222220 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Распашные ворота на винтовых сваях</a>
                </td>
                <td>
                     От 22599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Замена пола в бане</a>
                </td>
                <td>
                     От 22599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Купить круглую баню бочку танк</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Со спальней и террасой</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Переделка крыши</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Загородный 9 на 10</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Парус</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Демонтаж </a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Совместно с баней</a>
                </td>
                <td>
                     От 229999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Гриль для дачи</a>
                </td>
                <td>
                     От 10599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Обвязка винтовых свай</a>
                </td>
                <td>
                     От 230599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>В ипотеку</a>
                </td>
                <td>
                     От 230599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>В стиле барнхаус двухэтажные</a>
                </td>
                <td>
                     От 2320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сборные квадратный  из сип панелей</a>
                </td>
                <td>
                     От 2320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Загородный из кирпича</a>
                </td>
                <td>
                     От 2320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>9 на 9 одноэтажный</a>
                </td>
                <td>
                     От 2320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Закрутка винтовых свай механизированным способом</a>
                </td>
                <td>
                     От 2320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Восстановление</a>
                </td>
                <td>
                     От 2320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Загородный из камня</a>
                </td>
                <td>
                     От 2329999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из сухих бревен</a>
                </td>
                <td>
                     От 2329999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Небольшой деревянный</a>
                </td>
                <td>
                     От 2329999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Шовный герметик</a>
                </td>
                <td>
                     От 24000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Грили барбекю для а</a>
                </td>
                <td>
                     От 24000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Хайтек</a>
                </td>
                <td>
                     От 2500999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Навес на винтовых сваях</a>
                </td>
                <td>
                     От 2500999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Лестница из бревен</a>
                </td>
                <td>
                     От 29999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Готовый круглые бани из сибирского кедра</a>
                </td>
                <td>
                     От 3001999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Деревянный 6х6 </a>
                </td>
                <td>
                     От 300999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Современный с панорамными окнами </a>
                </td>
                <td>
                     От 305999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Готовая  с террасой или верандой</a>
                </td>
                <td>
                     От 305999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Горячая купель фурако</a>
                </td>
                <td>
                     От 305999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Модульный  </a>
                </td>
                <td>
                     От 3129999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С мангальной зоной</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox> 6х6 сип панель</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С туалетом и душем</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Металлическая лестница для крыльца</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Оцилиндрованного 150 м2</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Треугольный  a frame</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Достройка </a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Фурако крышка</a>
                </td>
                <td>
                     От 320599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Терраса к у на винтовых сваях</a>
                </td>
                <td>
                     От 322000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Небольшой  современный загородный из сип панелей</a>
                </td>
                <td>
                     От 322599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Демонтаж и вывоз мусора</a>
                </td>
                <td>
                     От 33229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Треугольный </a>
                </td>
                <td>
                     От 33999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Модульный  </a>
                </td>
                <td>
                     От 3529499 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Угловой  </a>
                </td>
                <td>
                     От 359499 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>6 на 8 с мансардой</a>
                </td>
                <td>
                     От 359499 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Окна </a>
                </td>
                <td>
                     От 3599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Рубка для колодца из бревна</a>
                </td>
                <td>
                     От 35999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С мансардой 6 на 6</a>
                </td>
                <td>
                     От 400599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Внутренняя отделка а из сип панелей</a>
                </td>
                <td>
                     От 400999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Замена пола в бане бочке</a>
                </td>
                <td>
                     От 400999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Загородный  блок контейнер</a>
                </td>
                <td>
                     От 40599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Деревянные окна в парилку</a>
                </td>
                <td>
                     От 4229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox> с фурако</a>
                </td>
                <td>
                     От 4229 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Шлифовка оцилиндрованного бревна</a>
                </td>
                <td>
                     От 499 р за м.кв.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Покраска деревянного снаружи и внутри</a>
                </td>
                <td>
                     От 499 р за м.кв.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Фундамент 6х4 </a>
                </td>
                <td>
                     От 500999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Построить жилую баню</a>
                </td>
                <td>
                     От 503999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Реконструкция фундамента винтовыми сваями</a>
                </td>
                <td>
                     От 51599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Крыльцо</a>
                </td>
                <td>
                     От 52000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Одноэтажного из сип панелей</a>
                </td>
                <td>
                     От 520999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Гостевой  с сауной или баней</a>
                </td>
                <td>
                     От 520999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Грили барбекю для</a>
                </td>
                <td>
                     От 520999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из кело</a>
                </td>
                <td>
                     От 520999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Каменная </a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из сип панелей 6 на 8</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Модульный  с баней бочкой</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Рубка из осины </a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Монтаж отопления</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox> 80 кв м</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Загородный 7 на 3</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сруб сечением 300 мм</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Кирпичная </a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Кемпинг  на дереве</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Без усадки</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Викинг 8 метров</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox> 50 квадратных метров</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Свайное поле из винтовых свай</a>
                </td>
                <td>
                     От 52599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С балконом</a>
                </td>
                <td>
                     От 533939 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из пеноблоков</a>
                </td>
                <td>
                     От 54000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Шалаш</a>
                </td>
                <td>
                     От 54000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Передвижка</a>
                </td>
                <td>
                     От 54000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Второй этаж с комнатой отдыха</a>
                </td>
                <td>
                     От 54000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>6х9 с мансардой</a>
                </td>
                <td>
                     От 540300 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Ремонт кровли </a>
                </td>
                <td>
                     От 599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Из сибирского кедра большого диаметра</a>
                </td>
                <td>
                     От 610999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Маленький  барнхаус</a>
                </td>
                <td>
                     От 610999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Сруб рубленный 400кв м</a>
                </td>
                <td>
                     От 6553999 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>С плоской крышей</a>
                </td>
                <td>
                     От 700599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Часовня </a>
                </td>
                <td>
                     От 700599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Мобильная  mobiba</a>
                </td>
                <td>
                     От 700599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Хозяйственные постройки для дачи </a>
                </td>
                <td>
                     От 70599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Майкоп</a>
                </td>
                <td>
                     От 722000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Со спальней</a>
                </td>
                <td>
                     От 722000 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Забор профнастила на винтовых свая</a>
                </td>
                <td>
                     От 799 р за м.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Монтаж забора на винтовых сваях</a>
                </td>
                <td>
                     От 799 р за м.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Отделка внутри парных в саунах</a>
                </td>
                <td>
                     От 799 р за м.кв.
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Утеплить дачный  для зимнего проживания</a>
                </td>
                <td>
                     От 800 р за м
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Рубка  5 на 5</a>
                </td>
                <td>
                     От 800599 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Шале из оцилиндрованного </a>
                </td>
                <td>
                     От 999 р за метр
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Под усадку 7х9</a>
                </td>
                <td>
                     От 999 р за метр
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Обить деревом</a>
                </td>
                <td>
                     От 999 р за метр
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Хамама турецкая </a>
                </td>
                <td>
                     От 9990 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Бытовка</a>
                </td>
                <td>
                     От 9990 р
                </td>
            </tr>            
             <tr>
                <td>
                    <a href="#zayavka" data-fancybox>Майкоп</a>
                </td>
                <td>
                     От232599 р
                </td>
            </tr>
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
            <div class="carousel__slide">
                <div class="otzyvy_elem_img">
                    <a data-fancybox="отзывы" href="./assets/images/katalog/otzyv-1.png">
                        <img class="lazy" srcset="./assets/images/image.svg"
                             data-srcset="./assets/images/katalog/otzyv-1.png"
                             width="596px" height="190px"
                             src="./assets/images/katalog/otzyv-1.png"
                             alt="Отзыв-0"
                             title="Отзыв-0">
                    </a>
                </div>
            </div>
            <div class="carousel__slide">
                <div class="otzyvy_elem_img">
                    <a data-fancybox="отзывы" href="./assets/images/katalog/otzyv-2.png">
                        <img class="lazy" srcset="./assets/images/image.svg"
                             data-srcset="./assets/images/katalog/otzyv-2.png"
                             width="596px" height="190px"
                             src="./assets/images/katalog/otzyv-2.png"
                             alt="Отзыв-1"
                             title="Отзыв-1">
                    </a>
                </div>
            </div>
            <div class="carousel__slide">
                <div class="otzyvy_elem_img">
                    <a data-fancybox="отзывы" href="./assets/images/katalog/otzyv-3.png">
                        <img class="lazy" srcset="./assets/images/image.svg"
                             data-srcset="./assets/images/katalog/otzyv-3.png"
                             width="596px" height="190px"
                             src="./assets/images/katalog/otzyv-3.png"
                             alt="Отзыв-2"
                             title="Отзыв-2">
                    </a>
                </div>
            </div>
            <div class="carousel__slide">
                <div class="otzyvy_elem_img">
                    <a data-fancybox="отзывы" href="./assets/images/katalog/otzyv-4.png">
                        <img class="lazy" srcset="./assets/images/image.svg"
                             data-srcset="./assets/images/katalog/otzyv-4.png"
                             width="596px" height="190px"
                             src="./assets/images/katalog/otzyv-4.png"
                             alt="Отзыв-3"
                             title="Отзыв-3">
                    </a>
                </div>
            </div>
            <div class="carousel__slide">
                <div class="otzyvy_elem_img">
                    <a data-fancybox="отзывы" href="./assets/images/katalog/otzyv-5.png">
                        <img class="lazy" srcset="./assets/images/image.svg"
                             data-srcset="./assets/images/katalog/otzyv-5.png"
                             width="596px" height="190px"
                             src="./assets/images/katalog/otzyv-5.png"
                             alt="Отзыв-4"
                             title="Отзыв-4">
                    </a>
                </div>
            </div>
            
        </div>
    </div>  

    <!-- Портфолио фото слайдер -->
    <div class="portfolio_slider portfolio_slider_js">
        <div class="carousel__slide">
            <div class="portfolio_slider_elem">
                <a data-fancybox="портфолио" href="./assets/images/katalog/portfolio-1.png">
                    <img class="lazy" srcset="./assets/images/image.svg"
                         data-srcset="./assets/images/katalog/portfolio-1.png"
                         width="376px" height="250px"
                         src="./assets/images/katalog/portfolio-1.png"
                         alt="портфолио-0"
                         title="портфолио-0">
                </a>
            </div>
        </div>
     
        <div class="carousel__slide">
            <div class="portfolio_slider_elem">
                <a data-fancybox="портфолио" href="./assets/images/katalog/portfolio-2.png">
                    <img class="lazy" srcset="./assets/images/image.svg"
                         data-srcset="./assets/images/katalog/portfolio-2.png"
                         width="376px" height="250px"
                         src="./assets/images/katalog/portfolio-2.png"
                         alt="портфолио-1"
                         title="портфолио-1">
                </a>
            </div>
        </div>
     
        <div class="carousel__slide">
            <div class="portfolio_slider_elem">
                <a data-fancybox="портфолио" href="./assets/images/katalog/portfolio-3.png">
                    <img class="lazy" srcset="./assets/images/image.svg"
                         data-srcset="./assets/images/katalog/portfolio-3.png"
                         width="376px" height="250px"
                         src="./assets/images/katalog/portfolio-3.png"
                         alt="портфолио-2"
                         title="портфолио-2">
                </a>
            </div>
        </div>
     
        <div class="carousel__slide">
            <div class="portfolio_slider_elem">
                <a data-fancybox="портфолио" href="./assets/images/katalog/portfolio-4.png">
                    <img class="lazy" srcset="./assets/images/image.svg"
                         data-srcset="./assets/images/katalog/portfolio-4.png"
                         width="376px" height="250px"
                         src="./assets/images/katalog/portfolio-4.png"
                         alt="портфолио-3"
                         title="портфолио-3">
                </a>
            </div>
        </div>
     
        <div class="carousel__slide">
            <div class="portfolio_slider_elem">
                <a data-fancybox="портфолио" href="./assets/images/katalog/portfolio-5.png">
                    <img class="lazy" srcset="./assets/images/image.svg"
                         data-srcset="./assets/images/katalog/portfolio-5.png"
                         width="376px" height="250px"
                         src="./assets/images/katalog/portfolio-5.png"
                         alt="портфолио-4"
                         title="портфолио-4">
                </a>
            </div>
        </div>
     
        <div class="carousel__slide">
            <div class="portfolio_slider_elem">
                <a data-fancybox="портфолио" href="./assets/images/katalog/portfolio-6.png">
                    <img class="lazy" srcset="./assets/images/image.svg"
                         data-srcset="./assets/images/katalog/portfolio-6.png"
                         width="376px" height="250px"
                         src="./assets/images/katalog/portfolio-6.png"
                         alt="портфолио-5"
                         title="портфолио-5">
                </a>
            </div>
        </div>
     
        <div class="carousel__slide">
            <div class="portfolio_slider_elem">
                <a data-fancybox="портфолио" href="./assets/images/katalog/portfolio-7.png">
                    <img class="lazy" srcset="./assets/images/image.svg"
                         data-srcset="./assets/images/katalog/portfolio-7.png"
                         width="376px" height="250px"
                         src="./assets/images/katalog/portfolio-7.png"
                         alt="портфолио-6"
                         title="портфолио-6">
                </a>
            </div>
        </div>
     
        <div class="carousel__slide">
            <div class="portfolio_slider_elem">
                <a data-fancybox="портфолио" href="./assets/images/katalog/portfolio-8.png">
                    <img class="lazy" srcset="./assets/images/image.svg"
                         data-srcset="./assets/images/katalog/portfolio-8.png"
                         width="376px" height="250px"
                         src="./assets/images/katalog/portfolio-8.png"
                         alt="портфолио-7"
                         title="портфолио-7">
                </a>
            </div>
        </div>
     
        <div class="carousel__slide">
            <div class="portfolio_slider_elem">
                <a data-fancybox="портфолио" href="./assets/images/katalog/portfolio-9.png">
                    <img class="lazy" srcset="./assets/images/image.svg"
                         data-srcset="./assets/images/katalog/portfolio-9.png"
                         width="376px" height="250px"
                         src="./assets/images/katalog/portfolio-9.png"
                         alt="портфолио-8"
                         title="портфолио-8">
                </a>
            </div>
        </div>
     
        <div class="carousel__slide">
            <div class="portfolio_slider_elem">
                <a data-fancybox="портфолио" href="./assets/images/katalog/portfolio-10.png">
                    <img class="lazy" srcset="./assets/images/image.svg"
                         data-srcset="./assets/images/katalog/portfolio-10.png"
                         width="376px" height="250px"
                         src="./assets/images/katalog/portfolio-10.png"
                         alt="портфолио-9"
                         title="портфолио-9">
                </a>
            </div>
        </div>
     
    </div>
    <!-- Портфолио фото слайдер конец-->

    <!--  БЛОК С ВИДЕО -->
    <div class="portfolio_video">
        <div class="portfolio_video_elem">
            <video width="100%" controls="controls">
                <source src="/assets/images/katalog/video-1.mp4" type="video/ogg">
                <source src="/assets/images/katalog/video-1.mp4" type="video/mp4">
                <source src="/assets/images/katalog/video-1.mp4" type="video/webm">
                Тег video не поддерживается вашим браузером.
                <a download="" href="/assets/movie/4.mp4">Скачайте видео</a>
            </video>
        </div>
        <div class="portfolio_video_elem">
            <video width="100%" controls="controls">
                <source src="/assets/images/katalog/video-2.mp4" type="video/ogg">
                <source src="/assets/images/katalog/video-2.mp4" type="video/mp4">
                <source src="/assets/images/katalog/video-2.mp4" type="video/webm">
                Тег video не поддерживается вашим браузером.
                <a download="" href="/assets/movie/4.mp4">Скачайте видео</a>
            </video>
        </div>
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
                <div class="-info akcii_elemts_js"><a href="#">низкие</a><a href="#">скидки</a><a href="#">полукруглая</a><a href="#">из дерева</a><a href="#">шайба</a><a href="#">с круглой крышей</a><a href="#">цилиндр</a><a href="#">большие</a><a href="#">с хозблоком</a><a href="#">вертикальная</a><a href="#">с печкой</a><a href="#">самая маленькая</a><a href="#">под заказ</a><a href="#">продажа</a><a href="#">банная</a><a href="#">бочонок</a><a href="#">цилиндрическая</a><a href="#">чудо</a><a href="#">с пристройкой</a><a href="#">с туалетом</a><a href="#">каталог</a><a href="#">полубочка</a><a href="#">зимняя</a><a href="#">люкс</a><a href="#">парная</a><a href="#">переносные</a><a href="#">перевозная</a><a href="#">компания</a><a href="#">в форме</a><a href="#">эко</a><a href="#">самая дешевая</a><a href="#">финские</a><a href="#">в виде</a><a href="#">доставка</a><a href="#">показать</a><a href="#">смотреть</a><a href="#">из сосны</a><a href="#">кадка</a><a href="#">выставка</a><a href="#">на колесах</a><a href="#">сибирские</a><a href="#">углом</a><a href="#">парна</a><a href="#">утепленная</a><a href="#">для зимы</a><a href="#">изготовление</a><a href="#">стандарт</a><a href="#">экобит</a><a href="#"> на участке</a><a href="#">шестиугольная</a><a href="#">ремонт</a><a href="#">капсульные</a><a href="#">чудо</a><a href="#">акция</a><a href="#">онлайн</a><a href="#">под общей</a><a href="#">кадушка</a><a href="#">проходная</a><a href="#">для воды</a><a href="#">мастер</a><a href="#">квадробаня</a><a href="#">купольные</a>
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
            <div class="map_cities_content"><div class="map_cities_content_elem">Академический</div><div class="map_cities_content_elem">Алексеевский</div><div class="map_cities_content_elem">Алтуфьевский</div><div class="map_cities_content_elem">Арбат</div><div class="map_cities_content_elem">Аэропорт</div><div class="map_cities_content_elem">Бабушкинский</div><div class="map_cities_content_elem">Басманный</div><div class="map_cities_content_elem">Беговой</div><div class="map_cities_content_elem">Бескудниковский</div><div class="map_cities_content_elem">Бибирево</div><div class="map_cities_content_elem">Богородское</div><div class="map_cities_content_elem">Братеево</div><div class="map_cities_content_elem">Бутырский</div><div class="map_cities_content_elem">Вешняки</div><div class="map_cities_content_elem">Внуково</div><div class="map_cities_content_elem">Войковский</div><div class="map_cities_content_elem">Восточное Бирюлёво</div><div class="map_cities_content_elem">Восточное Дегунино</div><div class="map_cities_content_elem">Восточный</div><div class="map_cities_content_elem">Выхино-Жулебино</div><div class="map_cities_content_elem">Гагаринский</div><div class="map_cities_content_elem">Головинский</div><div class="map_cities_content_elem">Гольяново</div><div class="map_cities_content_elem">Даниловский</div><div class="map_cities_content_elem">Дмитровский</div><div class="map_cities_content_elem">Донской</div><div class="map_cities_content_elem">Дорогомилово</div><div class="map_cities_content_elem">Замоскворечье</div><div class="map_cities_content_elem">Западное Бирюлёво</div><div class="map_cities_content_elem">Западное Дегунино</div><div class="map_cities_content_elem">Зюзино</div><div class="map_cities_content_elem">Зябликово</div><div class="map_cities_content_elem">Ивановское</div><div class="map_cities_content_elem">Измайлово</div><div class="map_cities_content_elem">Капотня</div><div class="map_cities_content_elem">Коньково</div><div class="map_cities_content_elem">Коптево</div><div class="map_cities_content_elem">Косино-Ухтомский</div><div class="map_cities_content_elem">Котловка</div><div class="map_cities_content_elem">Красносельский</div><div class="map_cities_content_elem">Крылатское</div><div class="map_cities_content_elem">Кузьминки</div><div class="map_cities_content_elem">Кунцево</div><div class="map_cities_content_elem">Куркино</div><div class="map_cities_content_elem">Левобережный</div><div class="map_cities_content_elem">Лефортово</div><div class="map_cities_content_elem">Лианозово</div><div class="map_cities_content_elem">Ломоносовский</div><div class="map_cities_content_elem">Лосиноостровский</div><div class="map_cities_content_elem">Люблино</div><div class="map_cities_content_elem">Марфино</div><div class="map_cities_content_elem">Марьина роща</div><div class="map_cities_content_elem">Марьино</div><div class="map_cities_content_elem">Медведково</div><div class="map_cities_content_elem">Метрогородок</div><div class="map_cities_content_elem">Мещанский</div><div class="map_cities_content_elem">Митино</div><div class="map_cities_content_elem">Можайский</div><div class="map_cities_content_elem">Молжаниновский</div><div class="map_cities_content_elem">Москворечье-Сабурово</div><div class="map_cities_content_elem">Нагатино-Садовники</div><div class="map_cities_content_elem">Нагатинский затон</div><div class="map_cities_content_elem">Нагорный</div><div class="map_cities_content_elem">Некрасовка</div><div class="map_cities_content_elem">Нижегородский</div><div class="map_cities_content_elem">Новогиреево</div><div class="map_cities_content_elem">Новокосино</div><div class="map_cities_content_elem">Ново-Переделкино</div><div class="map_cities_content_elem">Обручевский</div><div class="map_cities_content_elem">Останкинский</div><div class="map_cities_content_elem">Отрадное</div><div class="map_cities_content_elem">Очаково-Матвеевское</div><div class="map_cities_content_elem">Перово</div><div class="map_cities_content_elem">Печатники</div><div class="map_cities_content_elem">Покровское-Стрешнево</div><div class="map_cities_content_elem">Преображенское</div><div class="map_cities_content_elem">Пресненский</div><div class="map_cities_content_elem">Проспект Вернадского</div><div class="map_cities_content_elem">Раменки</div><div class="map_cities_content_elem">Ростокино</div><div class="map_cities_content_elem">Рязанский</div><div class="map_cities_content_elem">Савёловский</div><div class="map_cities_content_elem">Свиблово</div><div class="map_cities_content_elem">Северное Бутово</div><div class="map_cities_content_elem">Северное Орехово-Борисово</div><div class="map_cities_content_elem">Северное Тушино</div><div class="map_cities_content_elem">Северное Чертаново</div><div class="map_cities_content_elem">Северный</div><div class="map_cities_content_elem">Сокол</div><div class="map_cities_content_elem">Соколиная гора</div><div class="map_cities_content_elem">Сокольники</div><div class="map_cities_content_elem">Солнцево</div><div class="map_cities_content_elem">Строгино</div><div class="map_cities_content_elem">Таганский</div><div class="map_cities_content_elem">Тверской</div><div class="map_cities_content_elem">Текстильщики</div><div class="map_cities_content_elem">Теплый Стан</div><div class="map_cities_content_elem">Тимирязевский</div><div class="map_cities_content_elem">Тропарёво-Никулино</div><div class="map_cities_content_elem">Филёвский парк</div><div class="map_cities_content_elem">Фили-Давыдково</div><div class="map_cities_content_elem">Хамовники</div><div class="map_cities_content_elem">Ховрино</div><div class="map_cities_content_elem">Хорошёво-Мневники</div><div class="map_cities_content_elem">Хорошёвский</div><div class="map_cities_content_elem">Царицыно</div><div class="map_cities_content_elem">Центральное Чертаново</div><div class="map_cities_content_elem">Черёмушки</div><div class="map_cities_content_elem">Щукино</div><div class="map_cities_content_elem">Южное Бутово</div><div class="map_cities_content_elem">Южное Орехово-Борисово</div><div class="map_cities_content_elem">Южное Тушино</div><div class="map_cities_content_elem">Южное Чертаново</div><div class="map_cities_content_elem">Южнопортовый</div><div class="map_cities_content_elem">Якиманка</div><div class="map_cities_content_elem">Ярославский</div><div class="map_cities_content_elem">Ясенево</div><div class="map_cities_content_elem">ЦАО</div><div class="map_cities_content_elem">САО</div><div class="map_cities_content_elem">СВАО</div><div class="map_cities_content_elem">ВАО</div><div class="map_cities_content_elem">ЮВАО</div><div class="map_cities_content_elem">ЮАО</div><div class="map_cities_content_elem">ЮЗАО</div><div class="map_cities_content_elem">ЗАО</div><div class="map_cities_content_elem">СЗАО</div>                
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
                <div class="-elem">ООО Круглые Бани</div>
                <div class="-elem">Адрес</div>
                <div class="-elem"><?= ADDRESS?></div>
                <div class="-elem">ИНН</div>
                <div class="-elem">333444342</div>
                <div class="-elem">ОГРН</div>
                <div class="-elem">24545385</div>
            </div>
        </div>
        <div class="company_data_map">
            <p class="company_data_rekvizity_title">Схема проезда до центрального офиса</p>
            <div class="company_data_map_scheme">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Accb9581f99fab47f41251ccfc610a31b0c90401815fe21e28dd252d752013374&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
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
                <td>
                    <p><b>Частник с Авито</b></p>
                </td>
                <td>
                    <p><b>Bochky</b></p>
                </td>
                <td>
                    <p><b>Добрые бани</b></p>
                </td>
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
            <h3 class="vakansii_title h2">Открытые <span>вакансии</span> в нашу скромную команду</h3><span data-fancybox="" data-src="#rabota">Директор</span><span data-fancybox="" data-src="#rabota">Менеджер</span><span data-fancybox="" data-src="#rabota">Плотник</span>
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
    