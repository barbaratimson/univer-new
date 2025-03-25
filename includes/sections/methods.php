<section class="methods">
    <div class="container">
        <div class="sub_container">
            <h2 class="methods-title">
                Работающие методы, современный подход, структурность.
                <span class="accent-back">Все программы практические.</span>
            </h2>
            <div class="methods-content">
                <!-- Add your methods content here -->
                <div class="methods-flex">
                    <div class="method-item">
                        <p>Один из первых сертифицировал программы на международном уровне и дает студентам образование в соответствии с высочайшими мировыми стандартами.
                        </p>
                    </div>
                    <div class="method-item">

                        <p>Первый провайдер менторинга в России. Сотрудничает с крупными корпорациями Обучает менторингу всех, кто хочет эффективно управлять сотрудниками, продавать свою экспертизу и этично взаимодействовать на всех уровнях.
                        </p>
                    </div>

                </div>
                <div class="method-bottom">
                    <div class="method-content-mini">
                        <img class="method-img-mini" src="assets/img/svg/method-arrow.svg" alt="">
                    </div>
                    <div class="flex">
                        <div class="method-gallery">
                            <?php
                            $files = scandir('assets/img/photo/');
                            foreach ($files as $file) {
                                if (is_file("assets/img/photo/$file")) {
                                    echo "<img src=\"assets/img/photo/$file\" alt=\"\">";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>