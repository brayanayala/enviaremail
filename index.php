<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Propuesta comercial</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>


    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">

        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading">
                    <img src="https://www.andesscd.com.co/wp-content/uploads/2023/02/Firma.gif" style="width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h2 class="title">Registro de información</h2>
                    <form action="validacion.php" method="POST" id="formulario">
                        <div class="input-group">
                            <label for="nombre">Nombre del cliente</label>
                            <input class="input--style-3" type="text" placeholder="Nombre" name="name">
                        </div>
                        <div class="input-group">
                            <label for="correo">Correo del cliente</label>
                            <input class="input--style-3" type="email" placeholder="Correo" name="correo">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <label for="Asesor">Asesor Comercial</label>
                                <select name="asesor">
                                    <option disabled="disabled" selected="selected">Asesor</option>
                                    <option value="lina.jimenez@andesscd.com.co">Lina Jimenez</option>
                                    <option value="jeimy.becerra@andesscd.com.co">Jeimy Torres</option>
                                    <option value="jenny.celis@andesscd.com.co">Jenny Celis</option>
                                    <option value="olga.rolon@andesscd.com.co">Lucia Rolon</option>
                                    <option value="maritzabel.bautista@andesscd.com.co">Maritzabel Pedraza</option>
                                    <option value="alexandra.gamba@andesscd.com.co">Alexandra Gamba</option>
                                    <option value="juan.garcia@andesscd.com.co">Juan Garcia</option>
                                    <option value="michael.calderon@andesscd.com.co">Michael Calderon</option>
                                    <option value="michell.perez@andesscd.com.co">Michell Perez</option>
                                    <option value="mariceth.julio@andesscd.com.co">Mariceth Julio</option>
                                    <option value="luisa.herrera@andesscd.com.co">Luisa Herrera</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <label for="plataforma">Plataforma de uso</label>
                                <select name="plataforma" onchange="ocultarCuponDiv()">
                                    <option disabled="disabled" selected="selected">Plataforma</option>
                                    <option value="1">SIESA</option>
                                    <option>ADRESS REGISTRO SINIESTROS</option>
                                    <option>CETIL</option>
                                    <option>DIAN</option>
                                    <option>RUNT</option>
                                    <option>SUPER SALUD</option>
                                    <option>VUCE</option>
                                    <option>SUPER FINANCIERA</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <label for="tcert">Tipo de certificado digital</label>
                                <select name="tipo_certificado">
                                    <option disabled="disabled" selected="selected">Certificado</option>
                                    <option value="10">Facturación Electrónica - Persona Juridica</option>
                                    <option value="11">Facturación Electrónica - Persona Natural</option>
                                    <option value="13">Persona Juridica</option>
                                    <option value="8">Representante Legal</option>
                                    <option value="9">Pertenencia a Empresa</option>
                                    <option value="12">Función Publica</option>
                                    <option value="16">Función Publica SIFF Nacion</option>
                                    <option value="5">Persona Natural</option>
                                    <option value="15">Persona Natural con RUT</option>
                                    <option value="7">Profesional titulado</option>
                                    <option value="1">Comunidad Academica</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group" id="formato">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <label for="formato">Formato de entrega</label>
                                <select name="formato">
                                    <option disabled="disabled" selected="selected">Formato</option>
                                    <option value="token">Token</option>
                                    <option value="virtual">Token Virtual</option>
                                    <option value="pkcs10">PKCS10</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group" id="cuponDiv">
                            <label for="cupon">Cupon de descuento</label>
                            <input class="input--style-3" type="text" placeholder="Cupon de descuento" name="cupon">
                        </div>
                        <div class="p-t-10">
                            <button id="enviar" class="btn btn--pill btn--green" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src="js/global.js"></script>
    <script src="js/funciones.js"></script>

</body>

</html>
