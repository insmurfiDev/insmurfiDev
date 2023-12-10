<?php

template('default', function () {
    ?>

    <section class="interesting">
        <div class="interesting__inner container">
            <div class="interesting__content">
                <h3 class="interesting__content-title">Что мне нравится</h3>
                <p class="interesting__content-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, aut quisquam? Dicta labore non provident
                    cumque id maxime excepturi! Pariatur, consectetur ipsum assumenda saepe dolor aut. Magni asperiores
                    laudantium sed.
                    Laudantium inventore iure quasi iste natus modi nam aliquid neque, similique explicabo sed esse optio
                    pariatur quas. Distinctio blanditiis dolores officia labore recusandae voluptatibus, nesciunt, facilis
                    dicta minima laudantium facere!
                    Minima iste dolorem incidunt totam doloribus aut, eveniet quos veniam, amet ea laboriosam distinctio
                    asperiores provident dolores, obcaecati unde nam! Dolorum, voluptate dolores modi sequi dicta et aut eum
                    exercitationem!
                </p>
            </div>

            <div class="interesting__slider">
                <button class="interesting__slider-btn interesting__slider-prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <div class="interesting__slider-wrapper">
                    <div class="interesting__slider-slides">
                        <div class="interesting__slider-slide"><img src="images/1.jpg" /></div>
                        <div class="interesting__slider-slide"><img src="images/css.png" /></div>
                        <div class="interesting__slider-slide"><img src="images/figma.webp" /></div>
                    </div>
                </div>
                <button class="interesting__slider-btn interesting__slider-next">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

        </div>
    </section>

    <section class="todo">
        <div class="todo__inner container">
            <div class="todo__new">
                <h3 class="todo__title">Новая задача:</h3>
                <input placeholder="Введите задачу" class="todo__input" />
                <br>
                <button class="todo__btn todo__btn-add">Добавить</button>
            </div>
            <div class="todo__list">
                <h3 class="todo__title">Задачи:</h3>
                <div class="todo__list-items"></div>
                <button class="todo__btn todo__btn-clear">Очистить</button>
            </div>
        </div>
    </section>

    <section class="timer">
        <div class="timer__inner container">
            <div class="timer__delays">
                <button data-time="30" class="timer__btn timer__btn-work timer__btn-delay">Работа</button>
                <button data-time="10" class="timer__btn timer__btn-pause timer__btn-delay">Перерыв</button>
                <button data-time="1" class="timer__btn timer__btn-longPause timer__btn-delay">Длинный перерыв</button>
            </div>
            <div class="timer__counter">
                <p class="timer__counter-number timer__counter-minutes">30</p>
                <p class="timer__counter-separator">:</p>
                <p class="timer__counter-number timer__counter-seconds">00</p>
            </div>
            <div class="timer__actions">
                <button class="timer__btn timer__btn-start">Пуск</button>
                <button class="timer__btn timer__btn-stop">Стоп</button>
                <button class="timer__btn timer__btn-restart">Заново</button>
            </div>
        </div>
    </section>

    <?php
}, ['title' => 'Мои интересы', 'style' => 'interesting'])

    ?>