<?php

template('default', function(){
    ?>
    <div class="pageTitle">
                <div class="pageTitle__inner container">
                    <h1 class="pageTitle__text">Мои резюме</h1>
                </div>
            </div>

            <section class="experience">
                <div class="experience__inner container">
                    <table cellspasing="0" cellpadding="0" class="experience__table">
                        <caption class="experience__table-title">Опыт работы</caption>
                        <thead class="experience__table-thead">
                            <tr class="experience__table-tr">
                                <th class="experience__table-th">Дата</th>
                                <th class="experience__table-th">Место работы / Учебы</th>
                                <th class="experience__table-th">Обязанности</th>
                            </tr>
                        </thead>
                        <tbody class="experience__table-tbody">
                            <tr class="experience__table-tr">
                                <td class="experience__table-td">03.02.2022 - нв</td>
                                <td class="experience__table-td" colspan="3">Университет "Дубна"</td>
                            </tr>
                            <tr class="experience__table-tr">
                                <td class="experience__table-td">03.02.2023 - 10.07.2023</td>
                                <td class="experience__table-td">"Столица. Бюро путешествий"</td>
                                <td class="experience__table-td">Создание и поддержка сайта</td>
                            </tr>
                            <tr class="experience__table-tr">
                                <td class="experience__table-td">24.05.2023 - 05.09.2023</td>
                                <td class="experience__table-td">Свадебный салон "Exquisit"</td>
                                <td class="experience__table-td">Поддержка сайта</td>
                            </tr>
                            <tr class="experience__table-tr">
                                <td class="experience__table-td">14.06.2023 - н.в</td>
                                <td class="experience__table-td">Магазин одежды "EmptyMirrors"</td>
                                <td class="experience__table-td">Создание и поддержка сайта</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
    <?php
}, ['title' => 'Мои резюме', 'style' => 'resume']);

?>