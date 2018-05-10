<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Can10 - Upload Data Kantin</title>

    <link rel="stylesheet" type="text/css" href="../../../../can10/assets/dist/semantic.css">
    <script src="../../../../can10/assets/library/jquery.min.js"></script>
    <script type="text/javascript" src="../../../../can10/assets/dist/semantic.min.js"></script>
    <script>
        function previewImage() {
            document.getElementById("image-preview").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("image-preview").src = oFREvent.target.result;
            };
        };
    </script>
</head>

<body>
    <div class="container fluid">
        <!--Header-->
        <div class="ui inverted menu large" style="width:100%">
            <div class="header item">
                <img src="<?php echo base_url() ?>assets/img/logo can10.png" style="width: 140px; height: 35px;">
            </div>
            <div class="right menu">
                <div class="item" style="padding-top: 4%">
                    <a href="" class="ui labeled inverted icon button" id="upload" style="box-shadow : 0 0 0 #fff inset!important; padding-left: 2.7em!important;">
                        <i class="upload icon"></i>
                        Upload Menu
                    </a>
                    <button class="ui labeled inverted icon button" id="lihatmenu" style="box-shadow : 0 0 0 #fff inset!important; padding-left: 2.7em!important;">
                        <i class="list alternate icon"></i>
                        Lihat Menu
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--Body-->
    <div class="container">
        <center style="padding-top: 2%;">
            <h2>UPLOAD DATA MENU KANTIN</h2>
        </center>
        <form class="ui form" style="padding: 5%;">
            <div class="field">
                <label>Nama Menu </label>
                <input type="text" name="namamenu" placeholder="Nama Menu" required>
            </div>
            <div class="ui labeled input">
                <div class="ui label">
                    Rp.
                </div>
                <input type="text" placeholder="Harga Menu" required>
            </div>
            <br><br>
            <img id="image-preview" alt="image preview" style="display: none; width: 450px; height: 300px;" />
            <input type="file" id="image-source" onchange="previewImage();">
            <br>
            <br>
            <center style="padding-top: 1%;">
                <div class="ui buttons">
                    <button class="ui button">Cancel</button>
                    <div class="or"></div>
                    <button class="ui positive button">Upload</button>
                </div>
            </center>
        </form>
    </div>
</body>

</html>