<?php

template('default', function () {
    ?>
    <div class="pageTitle">
        <div class="pageTitle__inner container">
            <h1 class="pageTitle__text">Контакты</h1>
        </div>
    </div>

    <div class="contacts">
        <div class="contacts__inner container">

            <div class="socialLinks contacts__item">
                <h3 class="contacts__item-title">Я в соц. сетях</h3>
                <div class="socialLinks__list">
                    <a><i class="fa-brands fa-telegram"></i></a>
                    <a><i class="fa-brands fa-vk"></i></a>
                    <a><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="email contacts__item">
                <h3 class="contacts__item-title">Мой E-mail</h3>
                <a><i class="fa-solid fa-envelope"></i> insmurfi@mail.ru</a>
            </div>
            <div class="phone contacts__item">
                <h3 class="contacts__item-title">Мой номер телефона</h3>
                <a><i class="fa-solid fa-phone"></i> 7(904) 025 37-90</a>
            </div>
            <form method="post" class="form contacts__item">
                <h3 class="contacts__item-title">Форма обратной связи</h3>
                <section class="form__section">
                    <h4 class="form__section-title">Информация о вас</h4>

                    <input class="form__section-input input__name validate lettersRegexp" placeholder="Ваше имя" />

                    <input class="form__section-input input__phone validate phoneRegexp" placeholder="Ваш номер телефона" />

                    <input class="form__section-input input__email hidden emailRegexp" placeholder="Ваш Email" />

                    <input class="form__section-input input__link hidden required" placeholder="Введите ссылку" />

                </section>

                <section class="form__section">
                    <h4 class="form__section-title">Добавить способ ответа</h4>
                    <label class="form__section-label"><input class="form__section-radio" type="radio" name="answer"
                            value="met" /> Назначить встречу</label>
                    <label class="form__section-label"><input class="form__section-radio" type="radio" name="answer"
                            value="phone" checked /> Телефон</label>
                    <label class="form__section-label"><input class="form__section-radio" type="radio"
                            name="answer" value="email" /> Эл. почта</label>
                    <label class="form__section-label"><input class="form__section-radio" type="radio" name="answer"
                            value="another" />
                        Другое</label>
                    <label class="form__section-label"><input class="form__section-radio" type="radio" name="answer"
                            value="not_answer" />
                        Не надо отвечать</label>
                    <input style="margin-top: 30px" type="date" class="form__section-input input__date hidden" />
                </section>

                <section class="form__section">
                    <h4 class="form__section-title">Укажите тему</h4>
                    <select class="form__section-select">
                        <option value="speaks">Поболтать</option>
                        <option value="education">Учеба</option>
                        <option value="theme3">Тема 3</option>
                    </select>
                </section>

                <section class="form__section form__educationSection hidden">
                    <h4 class="form__section-title">Что по учебе?</h4>
                    <label class="form__section-label"><input class="form__section-checkbox" type="checkbox" /> Нужна
                        помощь</label>
                    <label class="form__section-label"><input class="form__section-checkbox" type="checkbox" />
                        Сотрудничество по заданию</label>
                    <label class="form__section-label"><input class="form__section-checkbox" type="checkbox" /> Ответы и
                        готовые задания</label>
                    <label class="form__section-label"><input class="form__section-checkbox" type="checkbox" /> Подготовка к
                        сессии</label>
                </section>

                <section class="form__section">
                    <h4 class="form__section-title">Ваше сообщение</h4>
                    <textarea class="form__section-textarea required validate"></textarea>
                </section>

                <div class="form__btns">
                    <button type="submit" class="form__btns-send form__btns-btn">Отправить</button>
                    <button type="button" class="form__btns-clear form__btns-btn">Очистить</button>
                </div>

            </form>

        </div>
    </div>
    <?php
}, ['title' => 'Контакты', 'style' => 'contacts']);

?>