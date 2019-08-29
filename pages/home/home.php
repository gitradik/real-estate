<div class="home">

    <div id="pageLoaderId" class="page-loader d-none">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <script>
        var orderLoader = document.getElementById('pageLoaderId');
        orderLoader.classList.remove('d-none');
    </script>

    <?php
        require_once get_template_directory() . '/pages/home/components/form-modal/form-modal.php';
        require_once get_template_directory() . '/pages/home/components/navbar/navbar.php';
        require_once get_template_directory() . '/pages/home/components/first-scroll/first-scroll.php';
        require_once get_template_directory() . '/pages/home/components/sentence/sentence.php';

        require_once get_template_directory() . '/pages/home/components/open-form/open-form.php';
        require_once get_template_directory() . '/pages/home/components/participate/participate.php';
        require_once get_template_directory() . '/pages/home/components/companies/companies.php';
        require_once get_template_directory() . '/pages/home/components/list/list.php';
        require_once get_template_directory() . '/pages/home/components/open-form-2/open-form.php';
        require_once get_template_directory() . '/pages/home/components/team/participate.php';
        require_once get_template_directory() . '/pages/home/components/work/participate.php';
        require_once get_template_directory() . '/pages/home/components/youwillget/youcan.php';
        require_once get_template_directory() . '/pages/home/components/info/youcan.php';
        require_once get_template_directory() . '/pages/home/components/video-blog/video-blog.php';
        require_once get_template_directory() . '/pages/home/components/footer/footer.php';


    ?>

    <script>
        orderLoader.classList.add('d-none');
    </script>

</div>