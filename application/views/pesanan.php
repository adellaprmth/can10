<?php 
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Can10 - Pesanan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../can10/assets/dist/semantic.css">
    <script src="../can10/assets/library/jquery.min.js"></script>
    <script type="text/javascript" src="../can10/assets/dist/semantic.js"></script>
</head>
<body>
    <div class="ui container" style="padding-top: 2%; padding-bottom: 2%; padding-left:5%; padding-right:5%; margin-left:20%; margin-right:20%">
        <div class="ui container center aligned">
        <h1>Kode Transaksi <br> <?php echo $kode ?></h1>
        </div>
        <br>
        <h2>Nama Pemesan : <?php echo $nama ?></h2>
        <table class="ui table">
            <thead>
                <tr>
                    <th>Kantin</th>
                    <th>Nama Menu</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Permintaan Tambahan</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody id="menu">
            <?php 
            $total = 0;
            foreach($pesanan as $pesan){ ?>
                <tr>
                    <td><?php echo $pesan->nama_kantin ?></td>
                    <td><?php echo $pesan->nama_menu ?></td>
                    <td><?php echo $pesan->jumlah ?></td>
                    <td>Rp. <?php echo $pesan->harga_persatuan ?></td>
                    <td><?php echo $pesan->tambahan ?></td>
                    <td>Rp. <?php echo $pesan->jumlah * $pesan->harga_persatuan ?></td>
                </tr>
            <?php 
                $total += $pesan->jumlah * $pesan->harga_persatuan;
            } ?>
            </tbody>
        </table>
        <br>
        <div class="ui container right aligned"><h2>Total Harga : Rp. <?php echo $total ?></h2></div>
        <br>
        <div class="ui container right aligned"><h4>*Harap catat atau screenshot kode transaksi anda</h4></div>
        <br><br>
        <div class="ui container right aligned">
            <a href="<?php echo base_url()?>" class ="ui button blue">Kembali</a>
        </div>
    </div>
</body>
</html>