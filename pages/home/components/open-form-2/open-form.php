<style>
    <?= include 'open-form.css'?>
</style>

<div class="open-form-2" style="background-image: url('<?= get_template_directory_uri(); ?>/images/back-opfm-2.png')">
    <div class="bg"></div>
    <div class="container ct">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="check-list" data-aos="fade-right" data-aos-duration="1000">
                    <div class="check-item flex-column">
                        <div class="t">
                            <h2>Не можете подобрать квартиру?</h2>
                        </div>
                        <p>Заполните форму ниже и получите полное описание

                            более 30 лучших предложений от застройщиков города Святой Влас</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0 d-flex align-items-center justify-content-center">
                <form class="telegram" data-aos="fade-left" data-aos-duration="1000">
                    <input type="hidden" name="location" value="Не можете подобрать квартиру?">
                    <div class="t pb-3">
                        <h5>Заполните форму и наш менеджер<br>

                            свяжется с Вами в течении 15 мин<br>

                            для БЕСПЛАТНОЙ консультации</h5>
                    </div>
                    <input type="text" name="name" placeholder="Ваше Имя" required>
                    <input class="input-mask-s" type="tel" name="phone" placeholder="Ваш Телефон*" required>
                    <input type="email" name="email" placeholder="Ваша Почта*" required>
                    <button>Получить каталог</button>
                </form>

            </div>
        </div>
    </div>
</div>