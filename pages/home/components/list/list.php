<style>
    <?= include 'list.css'; ?>
</style>
<div style="color: white">
<?= require_once 'data.php'; ?>
</div>

<div id="listId" class="list" style="background-image: url('<?= get_template_directory_uri(); ?>/images/patt_diagonals.png')">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="t" data-aos="fade-right" data-aos-duration="800">
                    <h2>Наши Предложения</h2>
                    <div class="t-box pt-3">
                        <img class="img-fluid" src="<?= get_template_directory_uri();?>/images/title-bottom.png" alt="title-bottom">
                    </div>
                </div>
            </div>

           <!-- <div class="col-md-12">
                <div class="list-item" data-aos="fade-left" data-aos-duration="1000">
                    <h4>Первичный рынок<br>
                        <span>Уникальные предложения от застройщиков</span>
                    </h4>
                </div>
            </div>
-->
            <div class="col-md-12 mb-5" data-aos="zoom-in-down" data-aos-offset="30" data-aos-duration="1200">

                <div class="slider-for">
                    <?php
                        foreach ($primary_markets as $key => $market):
                        ?>
                    <div>
                        <div class="list-item">
                            <div class="list-item-body">
                                <div class="row w-100">
                                    <div class="col-md-6">
                                        <div class="zoom-gallery" style="background-image: url('<?= $market->preview_img; ?>')">
                                            <a class="list-item-link" href="<?= $market->preview_img; ?>" title="<?= $market->name; ?>">
                                                <img src="<?= $market->preview_img; ?>" hidden alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="list-item-desc h-100">
                                            <h5><?php echo $market->name; ?></h5>
                                            <div class="list-item-desc-text">
                                                <p><?php echo $market->desc; ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; ?>

                </div>


                <div>
                    <div class="slider-nav">
                        <?php
                        foreach ($primary_markets as $market):
                            ?>
                            <li class="nav-item">
                                <img src="<?= $market->preview_img; ?>" alt="<?php echo $market->name; ?>">
                            </li>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
    </div>
</div>
</div>
