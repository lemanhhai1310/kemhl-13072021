<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Slider-->
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1920:670">

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/slider1.png" alt="" uk-cover>
        </li>
        <li>
            <img src="images/dark.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/light.jpg" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<!--End Slider-->

<!--Banner-->
<div class="uk-visible@m">
    <div class="uk-child-width-1-2@m uk-grid-collapse" uk-grid>
        <div>
            <a href=""><img class="uk-width-1-1" src="images/banner1.png" alt=""></a>
        </div>
        <div>
            <a href=""><img class="uk-width-1-1" src="images/banner2.png" alt=""></a>
        </div>
    </div>
</div>
<!--End Banner-->

<?php require "template-parts/layouts/block_tintuc.php"; ?>

<!--Khach Hang-->
<div class="home__kh uk-section-small uk-background-norepeat uk-background-top-center" data-src="images/Group23873.png" uk-img>
    <div class="uk-container uk-container-small">

    </div>
</div>
<!--End Khach Hang -->

<div class="home__video uk-section-small">
    <div class="uk-container uk-container-small">
        <div class="uk-text-center home__box1">
            <h2 class="uk-h2 home__box1__title">VIDEO+</h2>
        </div>
        <div class="uk-grid-medium uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" frameborder="0" allowfullscreen uk-responsive uk-video="automute: false"></iframe>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-child-width-1-3 uk-child-width-1-1@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" frameborder="0" allowfullscreen uk-responsive uk-video="automute: false"></iframe>
                    </div>
                    <div>
                        <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" frameborder="0" allowfullscreen uk-responsive uk-video="automute: false"></iframe>
                    </div>
                    <div>
                        <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" frameborder="0" allowfullscreen uk-responsive uk-video="automute: false"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>