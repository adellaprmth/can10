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
        <script src="../can10/assets/library/sweetalert.min.js"></script>
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
        .ready(function() {
            $('.right.menu .ui.dropdown').dropdown({
                on: 'hover'
            });
            $('.ui.menu a.item')
                .on('click', function() {
                    $(this)
                        .addClass('active')
                        .siblings()
                        .removeClass('active');
                    });
        });
    $(function(){
	    $("#pesanan").click(function(){
		    $("#pesananModal").modal('show');
	    });
	    $("#pesananModal").modal({
		    closable: true
	    });
    });
    let menu = <?php echo $menu ?>
    
    let data = [];
    function setListPesanan(){
        let menu = document.getElementById('menu');
        menu.innerHTML = "";
        for (let i = 0; i<data.length; i++){

            let object = document.createElement('tr');
            object.id = "menu"+i;

            let kantin = document.createElement('td');
            kantin.id = "kantin"+i;

            let nama = document.createElement('td');
            nama.id = "nama"+i;

            let jumlah = document.createElement('span');
            jumlah.id = "jumlah"+i;

            let harga = document.createElement('td');
            harga.id = "harga"+i;
            
            let tdTambahan = document.createElement('td');
            let tambahan = document.createElement('textarea');
            tambahan.id = "tambahan"+i;
            tambahan.setAttribute("style", "width:95%");
            tambahan.setAttribute('onchange', `setTambahan(${i})`);
            tdTambahan.appendChild(tambahan);

            let tdJumlah = document.createElement('td');
            let plusClick = document.createElement('a');
            plusClick.setAttribute('onclick',`setJumlah(${i}, true)`);
            let plus = document.createElement('i');
            plus.setAttribute('class', "plus icon small" );
            plusClick.appendChild(plus);
            let minusClick = document.createElement('a');
            minusClick.setAttribute('onclick',`setJumlah(${i}, false)`);
            let minus = document.createElement('i');
            minus.setAttribute('class', "minus icon small" );
            minusClick.appendChild(minus);
            tdJumlah.appendChild(minusClick);
            tdJumlah.appendChild(jumlah);
            tdJumlah.appendChild(plusClick);

            let batal = document.createElement('td');
            let batalClick = document.createElement('a');
            batalClick.setAttribute('onclick', `deletePesanan(${i})`);
            let batalIcon = document.createElement('i');
            batalIcon.setAttribute('class', 'trash icon red');
            batalClick.appendChild(batalIcon);
            batal.appendChild(batalClick);

            object.appendChild(kantin);
            object.appendChild(nama);
            object.appendChild(tdJumlah);
            object.appendChild(harga);
            object.appendChild(tdTambahan);
            object.appendChild(batal);

            menu.appendChild(object);
            document.getElementById("kantin"+i).innerHTML = data[i].nama_kantin;
            document.getElementById("nama"+i).innerHTML = data[i].nama_menu;
            document.getElementById("jumlah"+i).innerHTML = " "+data[i].jumlah+" ";
            document.getElementById("harga"+i).innerHTML = "Rp. "+(data[i].jumlah * data[i].harga_persatuan);
            document.getElementById("tambahan"+i).value = data[i].tambahan;
            
        }
        document.getElementById('data').value = JSON.stringify(data);
        setTotalHarga();
    }
    
    function setTotalHarga(){
        let sum = 0;
        //console.log(data);
        for (let i = 0; i<data.length; i++){
            sum += data[i].jumlah * data[i].harga_persatuan;
            //console.log(data);
        }
        document.getElementById('totalHarga').innerHTML = "<h2>Rp. "+sum+"</h2>";
        
    }
    function setJumlah(num, ket){
        let a = document.getElementById('jumlah'+num);
        if (ket){
            let n = Number(a.innerHTML);
            a.innerHTML = n+1;
            data[num].jumlah = n+1;
        } else {
            let n = Number(a.innerHTML);
            if (n>1) {
                a.innerHTML = n-1;
                data[num].jumlah = n-1;
            }
            
        }
        setListPesanan();
    }
    function deletePesanan(i){
        data.splice(i, 1);
        setListPesanan();
    }
    function setTambahan(i){
        req = document.getElementById('tambahan'+i).value;
        data[i].tambahan = req;
        setListPesanan();
    }
    function addMenu(id_menu){
        //console.log(id_menu);
        for (let i = 0; i<menu.length;i++){
            if (menu[i].id_menu != id_menu) continue;
            else {
                let temp = {
                    "id_menu":menu[i].id_menu,
                    "id_kantin":menu[i].id_kantin,
                    "nama_kantin" : menu[i].nama_kantin,
                    "nama_menu":menu[i].nama_menu,
                    "harga_persatuan":menu[i].harga_menu,
                    "jumlah":1,
                    "tambahan":""
                }
                let same = false;
                let index = -1;
                for (let j = 0; j<data.length; j++){
                    if (data[j].id_menu == id_menu) {
                        same = true;
                        index = j;
                    }
                }
                if (!same){
                    data.push(temp);
                } else {
                    data[index].jumlah++;
                }
                swal("Pemesanan Sukses!", "Silakan lihat dengan menekan tombol List Pemesanan", "success");
                break;
            }
        }
    }
  </script>
    </head>

    <body>
        <div class="container fluid">
            <!--Header-->
            <div class="ui inverted menu large" style="width:100%">
                <div class="header item">
                    <img src="../can10/assets/img/logo can10.png" style="width: 140px; height: 35px;">
                </div>
                <!--
                <div class="ui search selection item" style="width: 55%; padding-left: 8%;">
                    <div class="ui inverted icon input">
                        <input class="prompt" type="text" placeholder="Search">
                        <i class="search link icon"></i>
                    </div>
                </div>
                -->
                <div class="right menu">                    
                    <div class="item" style="padding-top: 4%">
                        <a href="" class="ui labeled inverted icon button" id="lihatpesanan" style="box-shadow : 0 0 0 #fff inset!important; padding-left: 2.7em!important;">
                            <i class="dolly flatbed icon"></i>
                            Lihat Pesanan
                        </a>
                        <button onclick= 'setListPesanan()' class="ui labeled inverted icon button" id="pesanan" style="box-shadow : 0 0 0 #fff inset!important; padding-left: 2.7em!important;">
                            <i class="clipboard list icon"></i>
                            List Pesanan
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal-->
        <div class="ui modal" id="pesananModal">
            <div class="header">Pesanan Anda </div>
            <div class="content">
                <table class="ui table">
                    <thead>
                        <tr>
                            <th>Kantin</th>
                            <th>Nama Menu</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Permintaan Tambahan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="menu"></tbody>
                </table>
                <div class="ui grid">
                        <div class="four column row">
                            <div class = "right floated column"></div>
                            <div class = "right floated column"></div>
                            <div class = "right floated column"><h2>Total Harga : </h2></div>
                            <div class = "right floated column" id="totalHarga"></div>
                        </div>
                </div>
                <form class="ui form" action = "<?php echo base_url().'pesan'?>"method="post">
                    <input  type="text" id="data" hidden name="data" value="">
                    <div class="field">
                        <label>Nama Pemesan</label>
                        <input type="text" style="width:75%" name="nama" required>
                    </div>
                    <input type="submit" class="ui button" value="PESAN">
                </form>
            </div>
            <div class="actions">
                <div class="ui black deny button">
                    Close
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
        <?php 
        foreach($kantin as $kan){ ?>
            <div class="title" style="padding-left: 2%; padding-top: 5%;">
                <h2 class="ui header">
                    <img class="ui image" src="../can10/assets/img/food.png">
                    <div class="content"><?php echo $kan->nama_kantin ?></div>
                </h2>
            </div>            
            <div class="content" style="padding-left: 4%; padding-top: 2%;">
                <!--row 1-->
                <div class="ui special cards">
                <?php 
                foreach($kan->menu as $men){ ?>
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <button class="ui inverted button" onclick='addMenu(<?php echo $men->id_menu;?>)'>Pesan</button>
                                    </div>
                                </div>
                            </div>
                            <img src="../can10/assets/img/<?php echo $men->gambar.".jpg" ?>" style="height: 250px;">
                        </div>
                        <div class="content">
                            <a class="header"><?php echo $men->nama_menu?></a>
                        </div>
                        <div class="extra content">
                            <a>Rp. <?php echo $men->harga_menu ?></a>
                        </div>
                    </div>
                <?php 
                }
                ?>                        
                </div>
            </div>
        <?php 
        } ?>            
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