<?php


$file = "data.txt";
$content = file_get_contents($file);
$lines = explode(PHP_EOL, $content);
$config = [];
foreach ($lines as $line) {
    $datos = explode("=", $line);

    if (count($datos) === 2) {
        $key = trim($datos[0]);
        $value = trim($datos[1]);

        $config[$key] = $value;
    }
}

$cupon_1yearSIESA = $config['cupon_1yearSIESA'];
$cupon_2yearsSIESA = $config['cupon_2yearsSIESA'];
$precio12meses_FE = $config['precio12meses_FE'];
$precio24meses_FE = $config['precio24meses_FE'];
$descuento_FE = $config['descuento_FE'];
$precio12meses_PJ= $config['precio12meses_PJ'];
$precio24meses_PJ= $config['precio24meses_PJ'];
$descuento_PJ= $config['descuento_PJ'];
$precio12meses_Token= $config['precio12meses_Token'];
$precio24meses_Token= $config['precio24meses_Token'];
$descuento_Token= $config['descuento_Token'];
$precio12meses_Virtual= $config['precio12meses_Virtual'];
$precio24meses_Vitual= $config['precio24meses_Vitual'];
$descuento_Virtual= $config['descuento_Virtual'];

//include "plantilla.php";

$data= array (
    //Facturación Electrónica Persona Juridica
    '10' =>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite la identidad del representante legal de la persona jur&iacute;dica.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">2. RUT (vigente, fecha de expedici&oacute;n menor a 90 d&iacute;as).</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento completo y legible, es opcional si presenta c&aacute;mara de comercio, fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">3. Certificado de camara de comercio que acredite representacion legal de la identidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento legible con fecha de expedicion menor a 90 d&iacute;as).</span>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                </p>
                            </li>",
        'tipo_cert'=>'Facturaci&oacute;n Electr&oacutenica <br> Persona Juridica',                
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Persona-Jur%C3%ADdica-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/facturacion-electronica/persona-juridica/"
  
    ),
    //Facturación Electrónica Persona Natural
    '11'=>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite su identidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">2. RUT.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(vigente, fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                </p>
                            </li>",
        'tipo_cert'=>'Facturaci&oacute;n Electronica <br> Persona Natural',  
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Persona-natural-1-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/facturacion-electronica/persona-natural/"
    ),
    //Persona Juridica
    '13'=>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite la identidad del representante legal de la persona jur&iacute;dica.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">2. RUT o documento equivalente que acredite identificaci&oacute;n de la entidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento completo y legible, es opcional si presenta c&aacute;mara de comercio, fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\"> 3. C&aacute;mara de comercio o documento que acredite representaci&oacute;n legal de la entidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento legible con fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                </p>
                            </li>",
        'tipo_cert'=>'Persona Juridica',  
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Persona-Jur%C3%ADdica-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/vinculacion-empresa/persona-juridica/"
    
    ),
    //Representante Legal
    '8'=>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite su identidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">2. RUT o documento equivalente que acredite identificaci&oacute;n de la entidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento completo y legible, es opcional si presenta c&aacute;mara de comercio, fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\"> 3. Certificado de C&aacute;mara de comercio o documento que acredite representaci&oacute;n legal de la entidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento legible con fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                </p>
                            </li>",
        'tipo_cert'=>'Representante Legal',                
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Representante-Legal-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/vinculacion-empresa/representante-legal/"
    
    ),
    //Pertenencia a Empresa
    '9'=>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite su identidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">2. RUT o documento equivalente que acredite identificaci&oacute;n de la entidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento completo y legible, es opcional si presenta c&aacute;mara de comercio, fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\"> 3. Carta laboral o documento equivalente que acredite el cargo que desempe&ntilde;a.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(No superior a 90 d&iacute;as).</span>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                </p>
                            </li>",
        'tipo_cert'=>'Pertenencia a Empresa',               
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Vinculaci%C2%A2n-Empresa-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/vinculacion-empresa/pertenencia-empresa/"
    
    ),
        //Función Publica
    '12'=>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite su identidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">2. RUT o documento equivalente que acredite identificaci&oacute;n de la entidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento completo y legible, es opcional si presenta c&aacute;mara de comercio, fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">3. Documentos que acrediten la vinculaci&oacute;n de la persona como funcionario p&uacute;blico o particular que ejerce funci&oacute;n p&uacute;blica y donde se especifique el cargo que desempe&ntilde;a.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento legible).</span>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                </p>
                            </li>",
        'tipo_cert'=>'Funcion Publica',  
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Funci%C3%B3n-P%C3%BAblica-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/funcion-publica/funcion-publica/"
    
    ),
    //Función Publica SIFF Nación
    '16'=>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite su identidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">2. RUT o documento equivalente que acredite identificaci&oacute;n de la entidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento completo y legible, es opcional si presenta c&aacute;mara de comercio, fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">3. Documentos que acrediten la vinculaci&oacute;n de la persona como funcionario p&uacute;blico o particular que ejerce funci&oacute;n pública y donde se especifique el cargo que desempe&ntilde;a.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento legible).</span>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                </p>
                            </li>",
        'tipo_cert'=>'Funcion Publica <br> SIFF Nacion',                
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Funci%C3%B3n-P%C3%BAblica-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/funcion-publica/funcion-publica-siif-nacion/"
    
    ),
    //Persona Natural
    '5'=>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite su identidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>",
        'tipo_cert'=>'Persona Natural', 
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Persona-natural-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/persona-natural/persona-natural/"
    
    ),
    //Persona Natural con RUT
    '15'=>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite su identidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">2. RUT.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(vigente, fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                </p>
                            </li>",
        'tipo_cert'=>'Persona Natural con RUT',
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Persona-natural-con-RUT-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/persona-natural-con-rut/"
    
    ),
    //Profesional Titulado
    '7'=>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite su identidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">2. Tarjeta profesional.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada a 150%).</span>
                                </p>
                            </li>",
        'tipo_cert'=>'Profesional Titulado',                
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Profesional-Titulado-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/profesional-titulado/"
    
    ),
    //Comunidad Academica
    '1'=>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite su identidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">2. RUT o documento equivalente que acredite identificaci&oacute;n de la entidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento completo y legible, es opcional si presenta c&aacute;mara de comercio, fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">3. Documento o evidencia digital emitido por la instituci&oacute;n educativa donde haga constar la relaci&oacute;n con el solicitante.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(No superior a 90 d&iacute;as).</span>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                </p>
                            </li>",
        'tipo_cert'=>'Comunidad Academica',                  
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Uso-Andes-Signer-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/comunidad-academica/"
    
    ),
    //Facturación Electrónica Persona Juridica convenio Sieso
    '20' =>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite la identidad del representante legal de la persona jur&iacute;dica.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">2. RUT (vigente, fecha de expedici&oacute;n menor a 90 d&iacute;as).</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento completo y legible, es opcional si presenta c&aacute;mara de comercio, fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">3. Certificado de camara de comercio que acredite representacion legal de la identidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Documento legible con fecha de expedicion menor a 90 d&iacute;as).</span>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                </p>
                            </li>",
        'tipo_cert'=>'Facturaci&oacute;n Electr&oacutenica <br> Persona Juridica <br> Convenio Sieso',                
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Persona-Jur%C3%ADdica-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/facturacion-electronica/persona-juridica/"
  
    ),
    //Facturación Electrónica Persona Natural convenio Sieso
    '21'=>array(
        'documentos' =>"<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">1. C&eacute;dula de ciudadan&iacute;a o documento equivalente que acredite su identidad.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(Ampliada al 150%).</span>
                                </p>
                            </li>
                            <li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                                    <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">2. RUT.</strong>
                                    <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                    <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">(vigente, fecha de expedici&oacute;n menor a 90 d&iacute;as).</span>
                                </p>
                            </li>",
        'tipo_cert'=>'Facturaci&oacute;n Electronica <br> Persona Natural <br> Convenio Sieso',  
        'imagen'=>'https://www.andesscd.com.co/wp-content/uploads/2020/03/Persona-natural-1-120x120.png',
        'linksolicitud'=>"https://www.andesscd.com.co/solicitud-de-certificados/facturacion-electronica/persona-natural/"
    )

);

?>