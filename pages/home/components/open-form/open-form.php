<style>
    <?= include 'open-form.css'?>
</style>

<div class="open-form" style="background-image: url('<?= get_template_directory_uri(); ?>/images/albena-beach-bulgaria.jpg')">
    <div class="container ct">
        <div class="row">
            <div style="position: relative; z-index: 4" class="col-md-12">
                <div class="t" data-aos="fade-right" data-aos-duration="800">
                    <h2>Компания Golden Elephant приглашает Вас на смотровой тур в Болгарию </h2>

                </div>
            </div>
        </div>
        <div class="row position-relative">
            <div class="bg" data-aos="zoom-in-up" data-aos-offset="20" data-aos-duration="1000"></div>

            <div style="position: relative; z-index: 4" class="col-lg-6 pr-lg-4 d-flex align-items-center justify-content-center">
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
            <div style="position: relative; z-index: 4" class="col-lg-6 pl-lg-4 mt-5 mt-lg-0  d-flex align-items-center justify-content-center">
                <div class="video-slide-show" data-aos="fade-left" data-aos-duration="1000">


                    <div class="br-t"></div>
                    <div class="br-b"></div>
                    <div class="br-l"></div>
                    <div class="br-r"></div>
                    <img class="img-fluid" src="<?= get_template_directory_uri();?>/images/product/prod_3_5.jpg" alt="">
                </div>

            </div>
            <div style="position: relative; z-index: 4"  class="col-md-12">
                <form class="telegram" data-aos="fade-up" data-aos-duration="1000">

                    <div class="br-b"></div>
                    <div class="br-l"></div>
                    <div class="br-r"></div>
                    <input type="hidden" name="location" value="От дизайн-проекта к производству мебели">
                    <div class="t pb-3">
                        <h5>  Заполните форму ниже и посмотрите более 30 объектов в течении</h5>
                    </div>
                    <div class="form-row">
                        <input type="text" name="name" placeholder="Ваше Имя">
                        <input class="input-mask-s" type="tel" name="phone" placeholder="Ваш Телефон*" required>
                        <button>Заказать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>