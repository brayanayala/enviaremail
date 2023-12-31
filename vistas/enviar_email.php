<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';


//Load Composer's autoloader

class enviarEmail {

    function __construct ($data,$precio,$cliente,$plataforma,$id_cert,$correo,$email_client){
        
        $mail = new PHPMailer(true); 

        
        //Comentario en la rama desarrollador
        //Otro comentario de prueba
         try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'propuesta.comercial@andesscd.com.co';                     //SMTP username
            $mail->Password   = 'XP%sN6P6VH';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('propuesta.comercial@andesscd.com.co','Andes Servicio de Certificacion Digital');
            $mail->addAddress($email_client);     //Add a recipient
            $mail->addCC($correo); //Copia
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Propuesta comercial ANDES SCD';
            $mail->addAttachment('doc/ANDES_SERVICIO_DE_CERTIFICACION_DIGITAL_PROPUESTA_COMERCIAL.pdf');
            $mail->addAttachment('doc/Ficha_Tecnica.pdf');
            $str = $this->crearHtml($data,$precio,$cliente,$plataforma,$id_cert,$correo);
            
            $mail->Body = $str;
            $mail->send();
            
            $repuesta  = array (

                'datos'=> 'Correo Enviado Exitosamente',
                'estado'=> 'success',
                'titulo'=> ''
    
            );
            
            echo json_encode($repuesta);
             
            
        } catch (Exception $e) {
            echo "Error al enviar: {$mail->ErrorInfo}";
        }   
    }

    function crearHtml ($data,$precio,$cliente,$plataforma,$id_cert,$correo){
        
        $html ="
             
            <!DOCTYPE html>
            <html lang=\"es\">

            <head>
                <meta charset=\"UTF-8\">
                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                <title>Propuesta Comercial</title>
                <script src='sweetalert2.all.min.js'></script>
                <style>
                    @media screen and (max-width:450px) {

                        .mail-header a,
                        .mail-header a img {
                            display: block !important;
                            max-width: 100% !important;
                            margin: 0 auto !important;
                        }

                        a {
                            color: #000 !important;
                        }

                        #logo_web_mail {
                            text-align: -webkit-center !important;
                        }

                        .mail-header [colspan=\"3\"],
                        .mail-header [colspan=\"1\"],
                        .mail-note [colspan=\"3\"],
                        .mail-note [colspan=\"1\"],
                        .mail-body [colspan=\"1\"] {
                            width: 35px !important;
                        }

                        .mail-body [colspan=\"1\"] {
                            max-width: 35px !important;
                            width: 35px !important;
                        }

                        a.btn-email {
                            margin-top: 5px !important;
                            color: white !important;
                        }

                        .contact-info>tbody>tr,
                        .contact-info>tbody>tr>td {
                            display: block !important;
                            max-width: 100% !important;
                            width: 100% !important;
                        }

                        .contact-info {
                            display: block !important;
                            padding: 15px 0 !important;
                        }

                        .feature-text {
                            display: block !important;
                            font-size: 10px !important;
                            color: #ffffff !important;
                        }

                        #logo_web_mail h3 i {
                            font-size: 12px !important;
                        }

                        .main-table-documents-header>tbody>tr>td:nth-child(1) {
                            border-radius: 0 !important;
                        }

                        .main-table-documents-header>tbody>tr>td:nth-child(2),
                        .main-table-documents-header>tbody>tr>td:nth-child(3),
                        .main-table-documents-body>tbody>tr>td:nth-child(1) {
                            display: none !important;
                        }

                        .main-table-documents-body>tbody>tr>td:nth-child(2) {
                            padding: 0 15px !important;
                        }

                        .mail-body-section .bg-light-green {
                            background: transparent;
                        }

                        .recuerda-que>tbody>tr:first-child {
                            text-align: center;
                        }

                        .recuerda-que>tbody>tr:first-child * {
                            color: #00205b !important;
                        }

                        .recuerda-que>tbody>tr:last-child>td {
                            display: block;
                            width: 100% !important;
                            text-align: center;
                        }

                        .recuerda-que>tbody>tr:last-child>td:first-child {
                            margin-bottom: 15px !important;
                        }

                        .recuerda-que>tbody>tr:last-child>td * {
                            color: #ffffff !important;
                        }

                        @media (prefers-color-scheme: dark) {
                            .mail-wrapper * {
                                color: #333333 !important;
                            }

                            .mail-wrapper .text-white {
                                color: white !important;
                            }

                            .text-red {
                                color: #910202 !important;
                            }

                            .text-blue {
                                color: #00205b !important;
                            }

                        }
                    }
                </style>

            </head>

            <body>

                <table class=\"mail-wrapper\" align=\"center\" style=\"border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; max-width: 750px; width: 100%; background-image: url('https://i.imgur.com/P0poyUi.png'); background-size: 150px 100%; background-position: 110% top; background-repeat: no-repeat;\" width=\"100%\" background=\"https://i.imgur.com/P0poyUi.png\">
                    <tbody style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                <table class=\"mail-header\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; width: 100%; max-width: 100%; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\" width=\"100%\">
                                    <tbody style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                            <td colspan=\"3\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                        </tr>
                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                            <td align=\"center\" id=\"logo_web_mail\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                <a href=\"https://www.andesscd.com.co/\" target=\"_blank\" rel=\"external\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; display: block; max-width: 182px;\">
                                                    <img src=\"https://i.imgur.com/pByM4if.png\" alt=\"Logo Andes\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; display: block; max-width: 182px;\">
                                                </a>

                                                <h3 style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\"><i style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">Hola $cliente, gracias por elegirnos, estas a pocos pasos</i></h3>
                                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\"><strong class=\"feature-text\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; padding: 5px 30px; margin: 10px 0; border-top-right-radius: 50px; border-top-left-radius: 50px; border-bottom-right-radius: 50px; border-bottom-left-radius: 50px; background: #00205b; color: #ffffff;\">para obtener tu certificado de firma digital!!</strong></p>
                                            </td>
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                        </tr>
                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                            <td class=\"mail_spacing_small\" colspan=\"3\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; width: 75px; height: 15px;\" width=\"75\" height=\"15\"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                <table class=\"mail-body\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; width: 100%; max-width: 100%; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\" width=\"100%\">
                                    <tbody style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                        <tr class=\"mail-body-section\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                <table class=\"main-table-data\" style=\"width: 100%; font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\" width=\"100%\">
                                                    <tbody style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">
                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                                <table style=\"width: 100%; font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\" width=\"100%\">
                                                                    <tbody style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">
                                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; text-align: center; border-right: 1px dashed #32a700; color: #333333; border-top-left-radius: 10px; border-bottom-left-radius: 10px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; font-weight: bolder; background: #eaeaea; border: none;\" align=\"center\">
                                                                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">Plataforma</p>
                                                                            </td>
                                                                            <td class=\"small-table-spacing\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; width: 15px; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; text-align: center; border-right: 1px dashed #32a700; color: #ffffff; font-weight: bolder; background: transparent; border: none;\" width=\"15\" align=\"center\"></td>
                                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; text-align: center; background: #4fb400; border-right: 1px dashed #32a700; color: #ffffff; font-weight: bolder; border-top-left-radius: 10px; border-bottom-left-radius: 10px;\" align=\"center\">
                                                                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">Tipo Certificado</p>
                                                                            </td>
                                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; text-align: center; background: #4fb400; border-right: 1px dashed #32a700; color: #ffffff; font-weight: bolder;\" align=\"center\">
                                                                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">Vigencia</p>
                                                                            </td>
                                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; text-align: center; background: #4fb400; border-right: 1px dashed #32a700; color: #ffffff; font-weight: bolder; border-top-right-radius: 10px; border-bottom-right-radius: 10px; border: none;\" align=\"center\">
                                                                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">Precio Iva <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">incluido</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">
                                                                            <td class=\"mail_spacing_small\" colspan=\"5\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; text-align: center; height: 15px;\" height=\"15\" align=\"center\"></td>
                                                                        </tr>
                                                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">
                                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; text-align: center; border-top-left-radius: 10px; border-bottom-left-radius: 10px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; font-weight: bolder; background: #eaeaea; border: none;\" align=\"center\">
                                                                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">".$plataforma."<br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\"> </p>
                                                                            </td>
                                                                            <td class=\"small-table-spacing\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; width: 15px; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; text-align: center; background: transparent; border: none;\" width=\"15\" align=\"center\"></td>
                                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; text-align: center; background: #eaeaea; border-top-left-radius: 10px; border-bottom-left-radius: 10px; border-right: 1px dashed #32a700;\" align=\"center\">
                                                                                <div style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">
                                                                                    <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">".$precio["formato"]."</p>
                                                                                    <img src=\"".$data['imagen']."\" alt style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; display: block; width: 50px; height: 50px; margin: 0 auto;\" width=\"50\" height=\"50\">
                                                                                    <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">".$data["tipo_cert"]."</p>
                                                                                </div>
                                                                            </td>
                                                                            <td colspan=\"2\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; text-align: center; background: #eaeaea; height: 0; border-top-right-radius: 10px; border-bottom-right-radius: 10px;\" align=\"center\">
                                                                                <table style=\"width: 100%; font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 100%;\" width=\"100%\" height=\"100%\">
                                                                                    <tbody style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">
                                                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; border-right: 1px dashed #32a700; border-bottom: 1px dashed #32a700;\">12 Meses</td>
                                                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; border-bottom: 1px dashed #32a700;\">".$precio["precio12meses"]."</td>
                                                                                        </tr>
                                                                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">
                                                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; border-right: 1px dashed #32a700;\">24 Meses</td>
                                                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">".$precio["precio24meses"]."</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px;\">
                                                                            <td class=\"mail_spacing_small\" colspan=\"5\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; text-align: center; height: 15px;\" height=\"15\" align=\"center\"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                        </tr>
                                        <tr class=\"mail-body-section\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                            <td colspan=\"1\" class=\"bg-light-green\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; background: #56c400; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                <table class=\"main-table-documents-header\" style=\"width: 100%; font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; background: #eaeaea; border-top-right-radius: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\" width=\"100%\">
                                                    <tbody style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                                            <td class=\"bg-green\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; background: #4fb400; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; width: 100px; text-align: center; border-top-right-radius: 10px; border-bottom-right-radius: 10px; font-weight: bolder;\" width=\"100\" align=\"center\">
                                                                <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #ffffff;\">Documentos</p>
                                                            </td>
                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                                &nbsp;
                                                            </td>
                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                        </tr>
                                        <tr class=\"mail-body-section\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                <table class=\"main-table-documents-body\" style=\"width: 100%; font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; background: #eaeaea; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\" width=\"100%\">
                                                    <tbody style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; width: 100px; text-align: center;\" width=\"100\" align=\"center\">
                                                                &nbsp;
                                                            </td>
                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                                <ol style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; list-style-type: none; padding: 0;\">                                                
                                                                ".$data["documentos"].$precio["cupon"].(isset($precio["cupon1año"]) ? $precio["cupon1año"] : "").(isset($precio["cupon2año"]) ? $precio["cupon2año"] : "")."
                                                                </ol>  
                                                            </td>                                              
                                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                        </tr>
                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                            <td class=\"mail_spacing_small\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 15px;\" height=\"15\"></td>
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                        </tr>
                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                <p class=\"text-center\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; text-align: center; display: block; font-size: 12px;\">
                                                    <i style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: inherit;\">Recuerda que antes de solicitar tu certificado debes consultar los archivos adjuntos.</i>
                                                </p>
                                                <small class=\"text-center\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; text-align: center; display: block; color: #32a700; font-size: 9px;\">
                                                    Adjunto encontrar&aacute;s la propuesta comercial y el manual con el que podr&aacute;s realizar tu solicitud. <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                                </small>
                                            </td>
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                        </tr>
                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                            <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                <table class=\"recuerda-que\" style=\"width: 100%; font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\" width=\"100%\">
                                                    <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                                        <td colspan=\"3\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                            <h3 style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; color: #00205b; margin: 3px 0 5px; padding: 5px 15px; font-weight: bolder; font-size: 20px; text-transform: uppercase;\">Recuerda que</h3>
                                                        </td>
                                                    </tr>
                                                    <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                                        <td class=\"main-label-recuerda\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; background: url(https://i.imgur.com/jDRjd4B.png); background-size: 100% 100%; border-spacing: 0; border-collapse: collapse; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; width: 50%; padding: 10px 45px 10px 15px;\" width=\"50%\">
                                                            <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 10px; border: 1px solid #ffffff; color: #ffffff; margin: 0; padding: 3px 0; text-align: justify; text-align-last: center; border-radius: 50px; line-height: 9px;\">adquiriendo tu certificado <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">a 2 a&ntilde;os y no 2 de 1 a&ntilde;o.</p>
                                                            <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; color: #ffffff; margin: 3px 0; font-size: 11px;\">obtienes un ahorro de</p>
                                                            <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; color: #ffffff; margin: 3px 0; font-weight: bolder; font-size: 30px;\">".$precio["descuento"]."</p>
                                                            <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; color: #ffffff; margin: 3px 0 20px; font-size: 11px;\">tan solo realizarias un pago de <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\"></p>
                                                            <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; color: #ffffff; margin: 3px 0; font-weight: bolder; font-size: 30px; line-height: 20px;\">".$precio["precio24meses"]."</p>
                                                        </td>
                                                        <td class=\"small-table-spacing\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; width: 15px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; background: transparent; border: none;\" width=\"15\"></td>
                                                        <td style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                        <a href=\"https://ecommerce.andesscd.com.co/auth/login\" class=\"btn-email text-center\" target=\"_blank\" rel=\"external\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; text-align: center; padding: 5px 12px; border: 1px solid #00205b; background: #00205b; border-radius: 50px; color: #ffffff; text-decoration: none; display: inline-block;\"><b>Clic para solicitar tu certificado</b></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                        </tr>
                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                            <td colspan=\"3\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                <table style=\"width: 100%; font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; background: url(https://i.imgur.com/gsWi8I2.png); background-size: 100% 100%; background-position: bottom center;\" width=\"100%\">
                                                    <tbody style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                                            <td class=\"mail_spacing_small\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 15px;\" height=\"15\"></td>
                                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                                        </tr>
                                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                                            <td colspan=\"3\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0;\">
                                                                <small class=\"text-center\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; text-align: center; display: block; color: #32a700; font-size: 9px;\">
                                                                    para mayor informaci&oacute;n comunicate a $correo <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">o a nuestras l&iacute;neas (601) 2415539. <br style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                                                </small>
                                                            </td>
                                                        </tr>
                                                        <tr style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                                            <td class=\"mail_spacing_small\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 15px;\" height=\"15\"></td>
                                                            <td colspan=\"1\" style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px; border-spacing: 0; border-collapse: collapse; padding: 0; box-sizing: border-box; -webkit-border-horizontal-spacing: 0; -webkit-border-vertical-spacing: 0; height: 25px; width: 75px;\" width=\"75\" height=\"25\"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </body>

            </html>
                    ";
                    return $html;
        }

}

