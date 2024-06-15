<?php
    $n1="DR. MARIO R. VILLALVA KARAIJU";
    $n2="MAESTRO DOMINGO MENESES MÉNDEZ";
    $n3="DR. RAMÓN MARTÍNEZ CORIA";
    $n4="MG.SC. MIGUEL BAUDILIO";
    $n5="DR. MIGUEL ÁNGEL VERÓN GÓMEZ";
    $n6="MG. YANETH MARITZA PACHO HURTADO";
    $n7="MG. SC. JHONNY COA HUANCA";
    $n8="MG. HUGO SAIRE PUMA";
    $n9="DR. FLORENTINO VISCARRA PINTO";
    $nombre="";
    $codigo="";
    $id=$_GET['id'];
    switch ($id) {
        case md5($n1):
            $nombre=$n1;
            $codigo=$id;
            break;
        case md5($n2):
            $nombre=$n2;
            $codigo=$id;
            break;
        case md5($n3):
            $nombre=$n3;
            $codigo=$id;
            break;
        case md5($n4):
            $nombre=$n4;
            $codigo=$id;
            break;
        case md5($n5):
            $nombre=$n5;
            $codigo=$id;
            break;
        case md5($n6):
            $nombre=$n6;
            $codigo=$id;
            break;
        case md5($n7):
            $nombre=$n7;
            $codigo=$id;
            break;
        case md5($n8):
            $nombre=$n8;
            $codigo=$id;
            break;
        case md5($n9):
            $nombre=$n9;
            $codigo=$id;
            break;    
    }
?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        
        <title>VALIDACION</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <meta content="" name="description">
        <meta content="" name="author">
        
        <link href="./MINEDU-SSC_files/pace-theme-flash.css" rel="stylesheet" type="text/css">
        <link href="./MINEDU-SSC_files/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="./MINEDU-SSC_files/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="./MINEDU-SSC_files/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen">
        <link href="./MINEDU-SSC_files/select2.min.css" rel="stylesheet" type="text/css" media="screen">
        <link href="./MINEDU-SSC_files/switchery.min.css" rel="stylesheet" type="text/css" media="screen">
        <link href="./MINEDU-SSC_files/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen">
        <link href="./MINEDU-SSC_files/rickshaw.min.css" rel="stylesheet" type="text/css">
        <link href="./MINEDU-SSC_files/MetroJs.css" rel="stylesheet" type="text/css" media="screen">
        <link href="./MINEDU-SSC_files/font-montserrat.css" rel="stylesheet" type="text/css">
        <link href="./MINEDU-SSC_files/icons.css" rel="stylesheet" type="text/css">
        <link href="./MINEDU-SSC_files/app.css" rel="stylesheet" type="text/css" class="main-stylesheet">
        
        <style>
        .header {background-color:#FFF}
        .header a{color:#fff;text-transform:uppercase;}
        .header a:hover,.header a:focus{color:#48b0f7;}
        .fk-search{width: 300px;padding: 5px;border-radius: 2px;border: 0;}
        .header .search-link{margin-left:-30px}
        .footer{position:static !important;}
        i.fa{font-size:20px;color:#42a692}
        @media (max-width: 480px) {.page-content-wrapper{padding-left:20px;padding-right:26px}}
        hr {
        border-bottom-color:initial;
        border-bottom-style:initial;
        border-image:initial;
        border-left-color:initial;
        border-left-style:initial;
        border-right-color:initial;
        border-right-style:initial;
        border-top-color:#07126e;
        border-top-style:solid;
        border-width:1px 0 0;
        margin:10px 20px;
        }
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        }
        .img-container {
        text-align: center;
        display: block;
      }
        </style>
    </head>
    <body>
        <div class="header" style="height: 90px">
            <div class="container-fluid relative">
                <div class="pull-center hidden-md hidden-lg">
                    <div class="header-inner">
                        <div class="brand inline">
                            <img src="logo.png" alt="logo" data-src="" data-src-retina="" width="500">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden-xs hidden-sm">
                <div class="img-container">
                    <img src="logo.png" alt="logo" data-src="" data-src-retina="" width="550">
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-default ">
                    <div class=" padding-20">
                        <div align="center">
                            <h5 class="font-montserrat all-caps hint-text m-t-0">Validación de certificados mediante Código QR</h5>
                        </div>
                        <hr>
                        <div class="col-md-1"></div>
                        <div class="col-md-9" align="center">
                            
                            <form role="form">
                                <div class="form-group-attached">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group form-group-default">
                                                <label>Nombre del Evento</label>
                                                SEMINARIO INTERNACIONAL DE EDUCACIÓN INTRACULTURAL, INTERCULTURAL Y PLURILINGÜE
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group form-group-default">
                                                <label>Lugar Evento</label>
                                                UNIVERSIDAD PÚBLICA DE EL ALTO
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>Gestión</label>
                                                2024
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group form-group-default">
                                                <label>EXPOSITOR</label>
                                                <?php echo $nombre ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group form-group-default">
                                                <label>Código Verificación</label>
                                                <?php echo $codigo ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2" align="center">
                            <img src="./MINEDU-SSC_files/doc_ok.png" alt="logo" width="120">
                        </div>
                        <hr>
                        <br><br>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-9">
                                <div class="alert alert-info bordered" role="alert">
                                    <p><strong>Importante:</strong> Si la información expuesta coincide con la información impresa del certificado que desea validar, el certificado puede considerarse válido, caso contrario es inválido.</p>
                                </div>
                            </div>
                        </div>
                        <div align="center">
                            
                            
                            
                            <hr>
                            <div align="center">
                                <p><span class=""></span><a target="_blank"> www.upea.bo</a></p>
                                <span class=""></span> <a >EL ALTO - LA PAZ</a> <br>
                                <span class=""></span> <a >BOLIVIA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        
        echo "Dr. Mario R. Villalva KaraiJu ;".md5($n1)."<br>";
        
        echo "Maestro Domingo Meneses Méndez ;".md5($n2)."<br>";
        
        echo "Dr. Ramón Martínez Coria ;".md5($n3)."<br>";
        
        echo "Mg.Sc. Miguel Baudilio ;".md5($n4)."<br>";
        
        echo "Dr. Miguel Ángel Verón Gómez ;".md5($n5)."<br>";
        
        echo "Mg. Yaneth Maritza Pacho Hurtado ;".md5($n6)."<br>";
        
        echo "Mg. Sc. Jhonny Coa Huanca ;".md5($n7)."<br>";
        
        echo "Mg. Hugo Saire Puma ;".md5($n8)."<br>";
        
        echo "Dr. Florentino Viscarra Pinto ;".md5($n9)."<br>";
        echo "EL NOMBRE ES: ".$nombre." CODIGO: ".$codigo;
    ?>
    </body>
</html>