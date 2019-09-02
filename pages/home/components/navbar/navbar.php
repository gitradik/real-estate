<style>
    <?= include 'navbar.css'; ?>
</style>

<nav id="mainNavbarId" class="navbar navbar-expand-lg navbar-light" style="background-image: url('<?= get_template_directory_uri();?>/images/main_BG.jpg')">
    <a class="navbar-brand" href="/">
        <img src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="logo">
    </a>
    <button id="mainNavBarToggleId" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamListId" aria-controls="hamListId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background-image: url('<?= get_template_directory_uri();?>/images/icons8-menu-100.png')"></span>

    </button>

    <div class="collapse navbar-collapse" id="hamListId">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#aboutId">О нас</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#listId">Предложения</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#portfolioId">Портфолио</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#reviewsId">Отзывы</a>
            </li>
            <li class="nav-item nav-order">
                <a class="nav-link smooth-anchor" href="#footerId">Контакты</a>
            </li>
            <li class="nav-item nav-order">
                <a href="#" class="nav-link nav-link-ord" data-toggle="modal" data-target="#formModal"
                    onclick="onClickFormModal('Заказать звонок', 'formModalLongTitle', 'Шапка сайта', 'formInputHiddenId')"
                >Заказать звонок</a>
            </li>
        </ul>
    </div>
</nav>

