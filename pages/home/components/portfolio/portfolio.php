<style>
    <?= include "portfolio.css"; ?>
</style>

<div id="portfolioId" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="t" data-aos="fade-right" data-aos-duration="800">
                    <h2>Наши партнеры - застройщики</h2>
                    <div class="t-box pt-3">
                        <img class="img-fluid" src="<?= get_template_directory_uri();?>/images/title-bottom.png" alt="title-bottom">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="company-slider" data-aos="zoom-in" data-aos-duration="1000">

                    <div>
                        <div class="portfolio-item">
                            <img src="<?= get_template_directory_uri() ?>/images/portfolio/logo.png">
                        </div>
                    </div>

                    <div>
                        <div class="portfolio-item">
                            <img src="<?= get_template_directory_uri() ?>/images/portfolio/logo1.png">
                        </div>
                    </div>

                    <div>
                        <div class="portfolio-item">
                            <img src="<?= get_template_directory_uri() ?>/images/portfolio/logo2@0.5x.png">
                        </div>
                    </div>

                    <div>
                        <div class="portfolio-item">
                            <img src="<?= get_template_directory_uri() ?>/images/portfolio/logo1141.jpg">
                        </div>
                    </div>

                    <div>
                        <div class="portfolio-item">
                            <img src="<?= get_template_directory_uri() ?>/images/portfolio/logo_color.png">
                        </div>
                    </div>

                    <div>
                        <div class="portfolio-item">
                            <img src="<?= get_template_directory_uri() ?>/images/portfolio/RP_logo_mini_-_.png">
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <div class="t mt-5 mb-3" data-aos="fade-up" data-aos-duration="1000">
                  <h4> Хотите так же? <br>

                    Закажите <span>БЕСПЛАТНУЮ</span> консультацию прямо сейчас</h4>
                </div>

                <div class="order" data-aos="fade-up" data-aos-duration="1200">
                    <button data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal('Заказать БЕСПЛАТНУЮ консультацию', 'formModalLongTitle', 'Примеры выполненных работ', 'formInputHiddenId')">Заказать</button>
                </div>
            </div>
        </div>
    </div>
</div>