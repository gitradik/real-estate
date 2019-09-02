<style>
    <?= include "form-modal-special.css"; ?>
</style>

<!-- Modal -->
<div class="modal fade form-modal-special" id="formModalSpecial" tabindex="-1" role="dialog" aria-labelledby="formModalSpecialTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="<?= get_template_directory_uri();?>/images/logo.png" alt="">
                    </div>
                    <div class="col-md-12 d-flex align-items-center justify-content-center">
                        <div class="t">
                            <h5 class="modal-title" id="formModalSpecialLongTitle">Modal title</h5>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 order-md-1 mt-3">
                        <form class="telegram">
                            <input type="hidden" name="location" id="formSpecialInputHiddenId">
                            <div class="t">
                                <p>Заполните форму ниже и получите<br>

                                    каталог горячих предложений и<br> консультацию менеджера БЕСПЛАТНО</p>
                            </div>
                            <input placeholder="Ваше Имя" name="name" type="text">
                            <input class="input-mask-s" placeholder="Ваш Телефон*" name="phone" type="tel" required>
                            <div class="order">
                                <button>Отправить</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 order-md-0 mt-3 d-flex align-items-center justify-content-center">
                        <ul>
                            <li><img src="<?= get_template_directory_uri();?>/images/opf-trig1.svg" alt="">Тур рассчитан на 3-5 дней пребывания в Болгарии</li>
                            <li><img src="<?= get_template_directory_uri();?>/images/opf-trig2.svg" alt="">В течение смотрового тура можно будет заключить договор купли-продажи напрямую с застройщиком или собственником данной недвижимости, внести депозит в размере 2 000 евро</li>
                            <li><img src="<?= get_template_directory_uri();?>/images/opf-trig3.svg" alt="">Затраты на проживание и трансфер , связанные со смотровым туром – будут Вам компенсированы</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>