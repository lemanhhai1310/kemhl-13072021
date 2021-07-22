<div class="uk-section-small block_tintuc">
    <div class="uk-container uk-container-small">
        <div class="uk-text-center home__box1">
            <h2 class="uk-h2 home__box1__title">TIN TỨC</h2>
        </div>
        <div uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'images/tintuc1.png',
                                'title' => 'Hùng Linh ra mắt mẫu kem mới chào hè 2021',
                            ),
                            array(
                                'src' => 'images/tintuc2.png',
                                'title' => 'Có gì đặc biệt trong bộ sưu tập Kem Hè 2021?',
                            ),
                            array(
                                'src' => 'images/tintuc3.png',
                                'title' => 'Hùng Linh khánh thành nhà máy kem thứ 2',
                            ),
                            array(
                                'src' => 'images/tintuc1.png',
                                'title' => 'Hùng Linh ra mắt mẫu kem mới chào hè 2021',
                            ),
                            array(
                                'src' => 'images/tintuc2.png',
                                'title' => 'Có gì đặc biệt trong bộ sưu tập Kem Hè 2021?',
                            ),
                            array(
                                'src' => 'images/tintuc3.png',
                                'title' => 'Hùng Linh khánh thành nhà máy kem thứ 2',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                        <li>
                            <div class="uk-cover-container">
                                <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                <canvas width="668" height="460"></canvas>
                            </div>
                            <div class="block_tintuc__card uk-card uk-card-body">
                                <div class="block_tintuc__card__time">17 tháng 6, 2021</div>
                                <h3 class="block_tintuc__card__title uk-h3"><?= $v['title'] ?></h3>
                                <div class="block_tintuc__card__box">
                                    <a href="" class="block_tintuc__card__link">Xem thêm <span uk-icon="icon: arrow-right; ratio: 1;"></span></a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <!--<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>-->

        </div>
    </div>
</div>