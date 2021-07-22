<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kem Hùng Linh - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="<?= ($is_home) ? 'isHome' : '' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<header id="header" class="header">
    <div class="header__top">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li><a href="#">TIN TỨC</a></li>
                        <li><a href="#">LIÊN HỆ</a></li>
                        <li><a href="#">RSS</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="header__bottom">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-center">
                    <div class="uk-navbar-center-left uk-visible@m">
                        <div>
                            <ul class="uk-navbar-nav">
                                <li><a href="#">TRANG CHỦ</a></li>
                                <li><a href="#">GIỚI THIỆU</a></li>
                                <li>
                                    <a href="#">KEM HÙNG LINH</a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-active"><a href="#">Active</a></li>
                                            <li><a href="#">Item</a></li>
                                            <li><a href="#">Item</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">KEM SNOWBABY</a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-active"><a href="#">Active</a></li>
                                            <li><a href="#">Item</a></li>
                                            <li><a href="#">Item</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="uk-navbar-item uk-logo" href="#"><img src="images/logo.png" alt=""></a>
                    <div class="uk-navbar-center-right uk-visible@m">
                        <div>
                            <ul class="uk-navbar-nav">
                                <li><a href="#">ĐẠI LÝ</a></li>
                                <li><a href="#">HỆ THỐNG</a></li>
                                <li><a href="#">TUYỂN DỤNG</a></li>
                            </ul>
                            <div class="uk-navbar-item">
                                <div class="uk-text-center header__bottom__hotline">
                                    <div class="header__bottom__hotline__txt1">HOTLINE</div>
                                    <div class="header__bottom__hotline__txt2">093.118.6279</div>
                                </div>
                            </div>
                            <div>
                                <a class="uk-navbar-toggle" href="#" uk-search-icon></a>
                                <div class="uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">

                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <form class="uk-search uk-search-navbar uk-width-1-1">
                                                <input class="uk-search-input" type="search" placeholder="Search" autofocus>
                                            </form>
                                        </div>
                                        <div class="uk-width-auto">
                                            <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>