<style>
    <?= include "companies.css"; ?>
</style>


<div class="companies">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="t">
                    <h2>Наши партнеры - застройщики</h2>
                    <div class="t-box pt-3">
                        <img class="img-fluid" src="<?= get_template_directory_uri();?>/images/title-bottom.png" alt="title-bottom">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="company-slider">

                    <?php
                        for ($i = 1; $i <= 6; $i++):
                    ?>
                        <div>
                            <div class="company-item">
                                <img src="<?= get_template_directory_uri();?>/images/portfolio/<?= $i . '.png'; ?>">
                            </div>
                        </div>
                    <?php endfor; ?>

                </div>
            </div>
        </div>
    </div>
</div>