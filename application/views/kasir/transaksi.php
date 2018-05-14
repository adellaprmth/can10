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
                <label>
                    <h1>KANTIN</h1>
                </label>
            </div>
        </div>
    </div>
    <!--Body-->
    <div class="container" style="padding-top: 3%">
        <center>
            <h1>TRANSAKSI</h1>
            <div class="ui search" style="padding-bottom: 2%">
                <div class="ui icon input" style="width: 70%; height: 10%">
                    <input class="prompt" type="text" placeholder="Masukkan Kode Pesanan...">
                    <i class="search icon"></i>
                </div>
                <div class="results"></div>
            </div>
            <!--Isi Pesanan-->
            <table class="ui unstackable teal table" style="width: 70%">
                <thead>
                    <tr>
                        <th>1.</th>
                        <th>35H3K5JO</th>
                        <th>Adella Paramitha</th>
                        <th></th>
                        <th class="right aligned">Rabu, 10 Mei 2018</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>List Pesanan</th>
                        <th>Jumlah</th>
                        <th>@Harga</th>
                        <th class="right aligned">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Ayam Kecap</td>
                        <td>2</td>
                        <td>Rp 10000</td>
                        <td class="right aligned">Rp 20000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Mie Kuah</td>
                        <td>1</td>
                        <td>Rp 4000</td>
                        <td class="right aligned">Rp 4000</td>

                    </tr>
                    <tr>
                        <td></td>
                        <td>Es Teh</td>
                        <td>4</td>
                        <td>Rp 2500</td>
                        <td class="right aligned">Rp 10000</td>
                    </tr>
                </tbody>
                <tfoot class="full width">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>
                            <h4>Total Harga</h4>
                        </th>
                        <th class="right aligned">
                            <h4>Rp 34000</h4>
                        </th>
                    </tr>
                </tfoot>
            </table>
            <br>
            <button class="ui teal labeled icon button">
                <i class="calendar check outline">Verifikasi</i>
            </button>
        </center>
    </div>
</body>

</html>