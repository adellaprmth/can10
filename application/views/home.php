<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Can10 - Home</title>

        <link rel="stylesheet" type="text/css" href="../can10/assets/dist/semantic.css">
        <script src="../can10/assets/library/jquery.min.js"></script>
        <script type="text/javascript" src="../can10/assets/dist/semantic.js"></script>
        <script language='javascript'>
            $(document).ready(function () {
                $('.ui.accordion').accordion();
            });
        </script>
        <script>
            $(document)
                .ready(function () {
                    $('.special.card .image').dimmer({
                        on: 'hover'
                    });

                    $('.card .dimmer')
                        .dimmer({
                            on: 'hover'
                        })
                        ;
                })
                ;
        </script>
        <script type="text/javascript">
            $('.dropdown')
                .dropdown()
                ;
        </script>
        <script>
            $(document)
                .ready(function () {
                    $('.right.menu .ui.dropdown').dropdown({
                        on: 'hover'
                    });
                    $('.ui.menu a.item')
                        .on('click', function () {
                            $(this)
                                .addClass('active')
                                .siblings()
                                .removeClass('active')
                                ;
                        })
                        ;
                })
                ;
        </script>
    </head>

    <body>
        <div class="container fluid">
            <!--Header-->
            <div class="ui inverted menu large">
                <div class="header item">
                    <img src="../can10/assets/img/logo can10.png" style="width: 140px; height: 35px;">
                </div>
                <div class="ui search selection item" style="width: 60%; padding-left: 8%;">
                    <div class="ui inverted icon input">
                        <input class="prompt" type="text" placeholder="Search">
                        <i class="search link icon"></i>
                    </div>
                </div>
                <div class="right menu">
                    <div class="item" style="padding-top: 13%;">
                        <button class="ui labeled inverted icon button" style="box-shadow : 0 0 0 #fff inset!important; padding-left: 2.7em!important;">
                            <i class="clipboard list icon"></i>
                            List Pesanan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--Body-->
        <div class="right menu" style="padding-left: 86%; padding-top: 1.5%;">
            <div class="ui floating dropdown labeled filter icon button">
                <i class="filter icon"></i>
                <span class="text">Select Filter</span>
                <div class="menu">
                    <div class="item">Termurah</div>
                    <div class="item">Rekomendasi</div>
                    <div class="item">Makanan</div>
                    <div class="item">Minuman</div>
                </div>
            </div>
        </div>
        <div class="ui accordion">
            <div class="title" style="padding-left: 2%;">
                <h2 class="ui header">
                    <img class="ui image" src="../can10/assets/img/food.png">
                    <div class="content">Kantin A</div>
                </h2>
            </div>
            <div class="content" style="padding-left: 4%; padding-top: 2%;">
                <!--row 1-->
                <div class="ui special cards">
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Pesan</div>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/ayam kecap.jpg" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header">Ayam Kecap</a>
                        </div>
                        <div class="extra content">
                            <a>Rp 10.000</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Pesan</div>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/laksa bandung.jpg" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header">Laksa Bandung</a>
                        </div>
                        <div class="extra content">
                            <a>Rp 12.000</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Pesan</div>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/tahu telur.jpg" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header">Tahu Telor</a>
                        </div>
                        <div class="extra content">
                            <a>Rp 10.500</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Pesan</div>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/soto babat.jpg" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header">Soto Babat</a>
                        </div>
                        <div class="extra content">
                            <a>Rp 11.000</a>
                        </div>
                    </div>
                    <div style="padding-top: 2%; padding-left: 40%;">
                        <dir-pagination-controls template-url="path/to/dirPagination.tpl.html"></dir-pagination-controls>
                        <div class="ui pagination menu" ng-if="1 < pages.length || !autoHide">
                            <a class="icon item" ng-if="boundaryLinks" ng-class="{ disabled : pagination.current == 1 }" href="" ng-click="setCurrent(1)">
                                <i class="angle double left icon"></i>
                            </a>
                            <a class="icon item" ng-if="directionLinks" ng-class="{ disabled : pagination.current == 1 }" href="" ng-click="setCurrent(pagination.current - 1)">
                                <i class="left chevron icon"></i>
                            </a>

                            <a class="item" ng-repeat="pageNumber in pages track by tracker(pageNumber, $index)" ng-class="{ active : pagination.current == pageNumber, disabled : pageNumber == '...' }"
                                href="" ng-click="setCurrent(pageNumber)">1</a>

                            <a class="icon item" ng-if="directionLinks" ng-class="{ disabled : pagination.current == pagination.last }" href="" ng-click="setCurrent(pagination.current + 1)">
                                <i class="right chevron icon"></i>
                            </a>
                            <a class="icon item" ng-if="boundaryLinks" ng-class="{ disabled : pagination.current == pagination.last }" href="" ng-click="setCurrent(pagination.last)">
                                <i class=" angle double right icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--row 2-->
            <div class="title" style="padding-left: 2%; padding-top: 5%;">
                <h2 class="ui header">
                    <img class="ui image" src="../can10/assets/img/food.png">
                    <div class="content">Kantin B</div>
                </h2>
            </div>
            <div class="content" style="padding-left: 5%; padding-top: 2%;">
                <div class="ui special cards">
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Pesan</div>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/mie kuah.jpg" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header">Mie Kuah</a>
                        </div>
                        <div class="extra content">
                            <a>Rp 4.000</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Pesan</div>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/gado gado.jpg" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header">Gado-Gado</a>
                        </div>
                        <div class="extra content">
                            <a>Rp 10.000</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Pesan</div>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/mie goreng.jpg" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header">Mie Goreng</a>
                        </div>
                        <div class="extra content">
                            <a>Rp 5.000</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Pesan</div>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/nasi goreng.jpg" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header">Nasi Goreng</a>
                        </div>
                        <div class="extra content">
                            <a>Rp 12.000</a>
                        </div>
                    </div>
                </div>
                <div style="padding-top: 2%; padding-left: 40%;">
                    <dir-pagination-controls template-url="path/to/dirPagination.tpl.html"></dir-pagination-controls>
                    <div class="ui pagination menu" ng-if="1 < pages.length || !autoHide">
                        <a class="icon item" ng-if="boundaryLinks" ng-class="{ disabled : pagination.current == 1 }" href="" ng-click="setCurrent(1)">
                            <i class="angle double left icon"></i>
                        </a>
                        <a class="icon item" ng-if="directionLinks" ng-class="{ disabled : pagination.current == 1 }" href="" ng-click="setCurrent(pagination.current - 1)">
                            <i class="left chevron icon"></i>
                        </a>

                        <a class="item" ng-repeat="pageNumber in pages track by tracker(pageNumber, $index)" ng-class="{ active : pagination.current == pageNumber, disabled : pageNumber == '...' }"
                            href="" ng-click="setCurrent(pageNumber)">1</a>

                        <a class="icon item" ng-if="directionLinks" ng-class="{ disabled : pagination.current == pagination.last }" href="" ng-click="setCurrent(pagination.current + 1)">
                            <i class="right chevron icon"></i>
                        </a>
                        <a class="icon item" ng-if="boundaryLinks" ng-class="{ disabled : pagination.current == pagination.last }" href="" ng-click="setCurrent(pagination.last)">
                            <i class=" angle double right icon"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="title" style="padding-left: 2%; padding-top: 5%;">
                <h2 class="ui header">
                    <img class="ui image" src="../can10/assets/img/drink.png">
                    <div class="content">Kantin C</div>
                </h2>
            </div>
            <div class="content" style="padding-left: 5%; padding-top: 2%;">
                <!--row 1-->
                <div class="ui special cards">
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Pesan</div>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/es jeruk.jpg" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header">Es Jeruk</a>
                        </div>
                        <div class="extra content">
                            <a>Rp 3.000</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Pesan</div>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/es teh.jpg" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header">Es Teh</a>
                        </div>
                        <div class="extra content">
                            <a>Rp 2.500</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Pesan</div>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/es cappucino.jpg" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header">Es Cappucino</a>
                        </div>
                        <div class="extra content">
                            <a>Rp 5.000</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Pesan</div>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/air mineral.jpg" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header">Air Mineral</a>
                        </div>
                        <div class="extra content">
                            <a>Rp 3.000</a>
                        </div>
                    </div>
                    <div style="padding-top: 2%; padding-left: 40%;">
                        <dir-pagination-controls template-url="path/to/dirPagination.tpl.html"></dir-pagination-controls>
                        <div class="ui pagination menu" ng-if="1 < pages.length || !autoHide">
                            <a class="icon item" ng-if="boundaryLinks" ng-class="{ disabled : pagination.current == 1 }" href="" ng-click="setCurrent(1)">
                                <i class="angle double left icon"></i>
                            </a>
                            <a class="icon item" ng-if="directionLinks" ng-class="{ disabled : pagination.current == 1 }" href="" ng-click="setCurrent(pagination.current - 1)">
                                <i class="left chevron icon"></i>
                            </a>

                            <a class="item" ng-repeat="pageNumber in pages track by tracker(pageNumber, $index)" ng-class="{ active : pagination.current == pageNumber, disabled : pageNumber == '...' }"
                                href="" ng-click="setCurrent(pageNumber)">1</a>

                            <a class="icon item" ng-if="directionLinks" ng-class="{ disabled : pagination.current == pagination.last }" href="" ng-click="setCurrent(pagination.current + 1)">
                                <i class="right chevron icon"></i>
                            </a>
                            <a class="icon item" ng-if="boundaryLinks" ng-class="{ disabled : pagination.current == pagination.last }" href="" ng-click="setCurrent(pagination.last)">
                                <i class=" angle double right icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <footer class="footer" style="padding-top: 9%; color: #008080;">
            <div class="ui equal width center aligned padded grid" style="background-color: #000000; height: 100%; padding-top: 1%;">
                <div class="col">
                    <center>
                        <p>Temukan kami di : </p>
                        <div class="row">
                            <a href="#">
                                <img hspace="5" src="<?php echo base_url() ?>/assets/img/facebook logo.png" height="30px">
                            </a>
                            <a href="#">
                                <img hspace="5" src="<?php echo base_url() ?>/assets/img/twitter logo.png" height="30px">
                            </a>
                            <a href="#">
                                <img hspace="5" src="<?php echo base_url() ?>/assets/img/instagram logo.png" height="30px">
                            </a>
                            <a href="#">
                                <img hspace="5" src="<?php echo base_url() ?>/assets/img/web logo.png" height="30px">
                            </a>
                        </div>
                        <br>
                        <p>Copyright 2018 Can10 All Rights Reserved </p>

                    </center>
                </div>
            </div>
        </footer>
    </body>

    </html>