<style>
    <?= include "footer.css"; ?>
</style>

<footer id="footerId">
    <div class="container">
        <div class="row justify-content-center position-relative">
            <div class="ram">
                <div class="ram-container">
                      <div class="ram-br ram-right-bottom"></div>
                       <div class="ram-br ram-left-bottom"></div>
                </div>
            </div>
            <div style="position: relative; z-index: 4;" class="col-md-5 pb-3 d-flex align-items-center">
                <div class="foot-item w-100" data-aos="fade-right" data-aos-duration="800">
                    <div class="t">
                        <h5>Телефоны: </h5>
                        <a href="tel:++38(000) 000-00-00">+38(000) 000-00-00</a>
                        <a href="tel:+38(000) 000-00-00">+38(000) 000-00-00</a>
                        <h5>Почта: </h5>
                        <a href="mailto:example@gmail.com">example@gmail.com</a>
                        <div class="item-socials">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="position: relative; z-index: 4;" class="col-md-5 pb-3 d-flex align-items-center">
                <form class="telegram w-100" data-aos="fade-left" data-aos-duration="800">
                    <input type="hidden" name="location" value="Футер">
                    <div class="t pb-3">
                        <h5>Остались вопросы?</h5>
                    </div>
                    <input type="text" name="name" placeholder="Ваше Имя">
                    <input class="input-mask-s" type="tel" name="phone" placeholder="Ваш Телефон*" required>
                    <button>Заказать звонок</button>
                </form>
            </div>
        </div>
    </div>
</footer>