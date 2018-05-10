<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Can10 - Transaksi</title>

        <link rel="stylesheet" type="text/css" href="../../../../can10/assets/dist/semantic.css">
        <script src="../../../../can10/assets/library/jquery.min.js"></script>
        <script type="text/javascript" src="../../../../can10/assets/dist/semantic.min.js"></script>
    </head>

    <body>
        <div class="container fluid">
            <!--Header-->
            <div class="ui inverted menu large" style="width:100%">
                <div class="header item">
                    <img src="<?php echo base_url() ?>assets/img/logo can10.png" style="width: 140px; height: 35px;">
                </div>
                <div class="right menu" style="padding-top: 0.5%; padding-right: 2%; color: #008080">
                    <label><h1>KANTIN</h1></label>
                </div>
            </div>
        </div>
        <!--Body-->
        <div class="container" style="padding-top: 3%">
            <div class="ui right sidebar">
                <h1>TRANSAKSI</h1>
                <div class="ui fluid category search" style="padding-top: 3%">
                    <div class="ui icon input" style="width: 70%">
                        <input class="prompt" type="text" placeholder="Masukkan Kode Pesanan...">
                        <i class="search icon" ></i>
                    </div>
                    <div class="results">
                        
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>