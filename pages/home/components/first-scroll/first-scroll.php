<style>
    <?= include 'first-scroll.css'; ?>
</style>
<div class="position-relative">
<div class="first-scroll"

>
    <div class="static-header mb-auto">
        <div class="stat-list">
            <div class="stat-logo">
                <img src="<?= get_template_directory_uri();?>/images/company-name.png" alt="">
            </div>
            <div class="stat-social">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-viber"></i></a>
                <a href="#"><i class="fab fa-telegram-plane"></i></a>
            </div>
            <div class="stat-logo stl">
                <img src="<?= get_template_directory_uri();?>/images/logo-design.png" alt="">
            </div>
            <div class="order">
                <button data-toggle="modal" data-target="#formModal"
                        onclick="onClickFormModal('Заказать звонок', 'formModalLongTitle', 'Статичная шапка сайта', 'formInputHiddenId')">Заказать звонок</button>
            </div>
            <div class="stat-tels">
                <img src="<?= get_template_directory_uri();?>/images/phone-outline.png" alt="">
                <a href="">+38(099) 000-00-00</a>
                <a href="">+38(099) 111-00-00</a>
            </div>
        </div>
    </div>
    <div class="container-fluid ct mb-auto">
        <div class="row justify-content-center py-4 mt-3">
            <div class="col-md-10">
                <div class="t fs-t" style="background-image: url('<?= get_template_directory_uri(); ?>/images/photo_2018-07-18_16-45-33.jpg')" data-aos="zoom-in" data-aos-duration="800">
                    <div class="ram">
                        <div class="ram-container">
                            <div class="ram-br ram-left-top"></div>
                            <div class="ram-br ram-right-top"></div>
                         <!--   <div class="ram-br ram-right-bottom"></div>
                            <div class="ram-br ram-left-bottom"></div>-->
                        </div>
                    </div>
                    <div class="bg bgtop"></div>
                    <div class="t-box">
                        <h1>Недвижимость в Болгарии на берегу моря</h1>
                    </div>

                    <h3>Сделаем подбор апартаментов online

                        Квартиры от застройщиков "Под Ключ"</h3>

                    <ul>
                        <li> 3х дневный бесплатный тур</li>
                        <li> Ивестиции - получи доход от аренды</li>
                        <li> Выгодные условия рассрочки прямо от застройщиков до 10 лет</li>
                    </ul>
                    <form method="POST" class="telegram" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="0">
                        <input type="hidden" name="location" value="Первый блок">
                        <div class="t t-sub" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="0">
                            <h4>ОСТАВЬТЕ ЗАЯВКУ И ПОЛУЧИТЕ ПОДБОР НЕДВИЖИМОСТИ С ГАРАНТИРОВАННЫМ ДОХОДОМ</h4>
                        </div>
                        <div class="d-flex align-items-center form-media">
                            <input class="mr-lg-2 mb-0" name="name" placeholder="Имя" type="text">
                            <input class="mr-lg-2 mb-0 input-mask-s" name="phone" placeholder="Телефон" type="text">
                            <button >Получить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
