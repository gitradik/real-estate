<style>
    <?= include 'open-form.css'?>
</style>

<div class="open-form" style="background-image: url('<?= get_template_directory_uri(); ?>/images/1232.jpg')">
    <div class="bg"></div>
    <div class="container ct">
        <div class="row">
            <div class="col-md-12">
                <div class="t" data-aos="fade-right" data-aos-duration="800">
                    <h2>Компания Golden Elephant приглашает Вас посетить солнечную Болгарию , увидеть своими глазами чудесную страну , выбрать и приобрести недвижимость.</h2>

                </div>
            </div>
            <div class="col-lg-6 d-flex p-lg-4  align-items-center justify-content-center">
                <div class="check-list" data-aos="fade-right" data-aos-duration="1000">
                    <div class="br-t"></div>
                    <div class="br-b"></div>
                    <div class="br-l"></div>
                    <div class="br-r"></div>
                    <div class="check-item">
                        <img src="<?= get_template_directory_uri(); ?>/images/verified-checkbox-symbol.png" alt="checked">
                        <p>Тур рассчитан на 3-5 дней пребывания в Болгарии</p>
                    </div>

                    <div class="check-item">
                        <img src="<?= get_template_directory_uri(); ?>/images/verified-checkbox-symbol.png" alt="checked">
                        <p>В течение смотрового тура можно будет заключить договор купли-продажи напрямую с застройщиком или собственником данной недвижимости, внести депозит в размере 2 000 евро</p>
                    </div>
                    <div class="check-item">
                        <img src="<?= get_template_directory_uri(); ?>/images/verified-checkbox-symbol.png" alt="checked">
                        <p>Затраты на проживание и трансфер , связанные со смотровым туром – будут Вам компенсированы</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0 p-lg-4 d-flex align-items-center justify-content-center">
                <form class="telegram" data-aos="fade-left" data-aos-duration="1000">
                    <div class="br-t"></div>
                    <div class="br-b"></div>
                    <div class="br-l"></div>
                    <div class="br-r"></div>
                    <input type="hidden" name="location" value="От дизайн-проекта к производству мебели">
                    <div class="t pb-3">
                        <h5>Заполните форму ниже и получите

                            БЕСПЛАТНУЮ консультацию и ПОЛНОЕ сопровождение на территории Болгарии</h5>
                    </div>
                    <input type="text" name="name" placeholder="Ваше Имя">
                    <input class="input-mask-s" type="tel" name="phone" placeholder="Ваш Телефон*" required>
                    <button>Заказать</button>
                </form>

            </div>
        </div>
    </div>
</div>