<?php

template('default', function () {
    ?>
    <div class="pageTitle">
        <div class="pageTitle__inner container">
            <h1 class="pageTitle__text">Обо мне</h1>
        </div>
    </div>

    <section class="aboutSection">
        <div class="aboutSection__inner container">
            <img class="aboutSection__image" src="images/1.jpg" />

            <p class="aboutSection__text">
                Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет
                оценить значение дальнейших направлений развития. Идейные соображения высшего порядка, а также
                консультация с широким активом представляет собой интересный эксперимент проверки модели
                развития. Товарищи! рамки и место обучения кадров играет важную роль в формировании форм
                развития. Задача организации, в особенности же рамки и место обучения кадров способствует
                подготовки и реализации модели развития. Значимость этих проблем настолько очевидна, что
                укрепление и развитие структуры в значительной степени обуславливает создание направлений
                прогрессивного развития. С другой стороны дальнейшее развитие различных форм деятельности
                способствует подготовки и реализации системы обучения кадров, соответствует насущным
                потребностям.
                Не следует, однако забывать, что укрепление и развитие структуры представляет собой интересный
                эксперимент проверки модели развития. Разнообразный и богатый опыт постоянное
                информационно-пропагандистское обеспечение нашей деятельности требуют определения и уточнения
                позиций, занимаемых участниками в отношении поставленных задач. Идейные соображения высшего
                порядка, а также консультация с широким активом позволяет оценить значение существенных
                финансовых и административных условий. Задача организации, в особенности же постоянный
                количественный рост и сфера нашей активности позволяет выполнять важные задания по разработке
                систем массового участия. Товарищи! постоянный количественный рост и сфера нашей активности
                влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.
            </p>
        </div>
    </section>

    <section class="skillsSection">
        <div class="skillsSection__inner container">
            <h2 class="skillsSection__title section__title">Что я умею</h2>

            <div class="skillsSection__items">
                <img class="skillsSection__item" src="images/html.png">
                <img class="skillsSection__item" src="images/css.png">
                <img class="skillsSection__item" src="images/scss.png">
                <img class="skillsSection__item" src="images/js.png">
                <img class="skillsSection__item" src="images/jquery.png">
                <img class="skillsSection__item" src="images/php.png">
                <img class="skillsSection__item" src="images/laravel.png">
                <img class="skillsSection__item" src="images/wordpress.png">
                <img class="skillsSection__item" src="images/react.png">
                <img class="skillsSection__item" src="images/mysql.png">
                <img class="skillsSection__item" src="images/figma.webp">
                <img class="skillsSection__item" src="images/photoshop.png">
            </div>

        </div>
    </section>

    <section class="listsSection">
        <div class="listsSection__inner container">
            <ul class="listsSection__qualities listsSection__ul">
                <h3 class="listsSection__ul-title">Мои сильнейшие качества</h3>
                <li class="listsSection__qualities-li listsSection__li">Коммуникабельность</li>
                <li class="listsSection__qualities-li listsSection__li">Оптимизм</li>
                <li class="listsSection__qualities-li listsSection__li">Вежливость</li>
                <li class="listsSection__qualities-li listsSection__li">Принципиальность</li>
            </ul>
            <ul class="listsSection__goals listsSection__ul">
                <h3 class="listsSection__ul-title">Мои жизненные цели</h3>
                <li class="listsSection__goals-li listsSection__li">Стать хорошим родителем</li>
                <li class="listsSection__goals-li listsSection__li">Построить дом</li>
                <li class="listsSection__goals-li listsSection__li">Поддерживать отличное здоровье</li>
                <li class="listsSection__goals-li listsSection__li">Работать в компании</li>
            </ul>
        </div>
    </section>

    <section class="importantSection">
        <div class="importantSection__inner container">
            <h2 class="importantSection__title section__title">
                Самая важная информация
            </h2>
            <p class="importantSection__text">Нажмите на кнопку, чтобы ознакомиться с самой важной инфомацией</p>
            <button type="button" class="importantSection__btn" onclick="openPopup()">Узнать</button>
        </div>
    </section>

    

    <?php
}, ['title' => 'Обо мне', 'style' => 'about']);

?>