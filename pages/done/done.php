<?= get_header(); ?>

    <style>
        <?= include 'done.css'; ?>
    </style>

    <div class="done" style="background-image: url('<?= get_template_directory_uri();?>/images/main_BG.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center justify-content-center">
                    <img src="<?= get_template_directory_uri();?>/images/logo.png" alt="logo">
                </div>
                <div class="col-md-12 d-flex flex-column align-items-center">
                    <div class="done-text">
                        <h3>Спасибо, мы получили Вашу заявку!<br>

                            Наш менеджер свяжется с Вами в течении 15 мин</h3>
                        <p>Подписывайтесь на наши социальные сети<br> и будьте в курсе актуальных новостей с<br> рынка недвижимости в Болгарии</p>
                    </div>
                    <div class="time-back text-center d-flex flex-column align-items-center justify-content-center">
                    <!--    <p id="timeBackId"></p>-->
                        <div class="socials">
                            <a href=""><i class="fab fa-telegram"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="order mt-5">
                            <a href="/">На главную</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<script>
        let tCount = 5;
        const timerId = setInterval(() => {
            document.getElementById('timeBackId').innerText = `${tCount--}`;
        }, 1000);
        setTimeout(function() {
            clearInterval(timerId);
            window.location = '/';
        }, 4000);
    </script>-->

<?= get_footer(); ?>