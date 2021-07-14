<footer id="footer" class="footer">
    <div class="uk-section-small footer__top">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-expand">
                    <figure class="footer__top__logo uk-text-center"><img src="images/logo.png" alt=""></figure>
                </div>
                <div class="uk-width-auto@m">
                    <div class="uk-child-width-auto@m uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-flex uk-flex-column">
                                <div class="uk-flex-auto uk-margin-bottom">
                                    <h3 class="uk-h3 footer__top__title">Sản phẩm</h3>
                                    <ul class="footer__top__nav uk-list">
                                        <li><a href="">Kem Hùng Linh</a></li>
                                        <li><a href="">Kem Snow Baby</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <a href=""><img src="images/bocongthuong.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="footer__top__width">
                            <div>
                                <h3 class="uk-h3 footer__top__title">Liên hệ</h3>
                                <div>
                                    <div class="footer__top__address__name">Công ty cổ phần Kem Hùng Linh</div>
                                    <ul class="uk-list uk-margin-remove-bottom">
                                        <li>
                                            <div class="uk-grid-10" uk-grid>
                                                <div class="uk-width-auto">
                                                    <span class="footer__top__address__icon" uk-icon="icon: receiver; ratio: 0.9"></span>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="footer__top__address__txt">0931186279 - Hotline</div>
                                                    <div class="footer__top__address__txt">0931186279 - Hỗ trợ khách hàng</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-grid-10" uk-grid>
                                                <div class="uk-width-auto">
                                                    <span class="footer__top__address__icon" uk-icon="icon: mail; ratio: 0.9"></span>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="footer__top__address__txt">kemhunglinh@gmail.com</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-grid-10" uk-grid>
                                                <div class="uk-width-auto">
                                                    <span class="footer__top__address__icon" uk-icon="icon: location; ratio: 0.9"></span>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="footer__top__address__txt">Thôn Mạch Kỳ, Xã Hồng Dương,
                                                        Huyện Thanh Oai, TP. Hà Nội</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer__top__width">
                            <div>
                                <h3 class="uk-h3 footer__top__title">Kết nối với Hùng Linh</h3>
                                <div>
                                    <div class="fb-page" data-href="https://www.facebook.com/cathtmlcss.net/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cathtmlcss.net/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cathtmlcss.net/">Cắt Html/css</a></blockquote></div>
                                </div>
                                <div class="uk-grid-10 uk-child-width-auto uk-margin-small" uk-grid>
                                    <?php
                                    $data = array(
                                        'instagram',
                                        'facebook',
                                        'youtube',
                                        'tiktok',
                                    );
                                    foreach ($data as $k => $v): ?>
                                    <div><a class="footer__top__address__icon" href="" uk-icon="icon: <?= $v ?>; ratio: 0.9"></a></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bg uk-background-default" data-src="images/bg_footer_Image66.png" uk-img></div>
    <div class="footer__bottom uk-section-xsmall uk-text-center uk-background-default">
        <div class="uk-container">
            <span class="footer__copyRight">Copyright © 2021 Hung Linh Ice Cream Co.,Ltd</span>
        </div>
    </div>
</footer>
</section>
</body>
</html>