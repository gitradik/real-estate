<style>
    <?= include "form-modal.css"; ?>
</style>

<!-- Modal -->
<div class="modal fade form-modal" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="telegram">
                    <input type="hidden" name="location" id="formInputHiddenId">
                    <div class="t">
                        <p>Заполните форму ниже<br> и получите БЕСПЛАТНУЮ<br> консультация прямо СЕЙЧАС</p>
                    </div>
                    <input placeholder="Ваше Имя" name="name" type="text">
                    <input class="input-mask-s" placeholder="Ваш Телефон*" name="phone" type="tel" required>
                    <div class="order">
                        <button>Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>