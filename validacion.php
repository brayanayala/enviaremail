<?php 

include 'vistas/enviar_email.php';
include 'vistas/generate.php';



if (!empty($_POST["name"]) and !empty($_POST["correo"]) and !empty($_POST["asesor"]) and !empty($_POST["plataforma"]) and !empty($_POST["formato"]) and !empty($_POST["tipo_certificado"]) and !empty($_POST['asesor'])) {
    
    $formato = $_POST ['formato'];
    $id_cert = $_REQUEST['tipo_certificado'];
    $correo = $_POST['asesor'];
    $cliente = $_POST['name'];
    $plataforma = $_POST['plataforma'];
    $id_cert = $_REQUEST['tipo_certificado'];
    $email_client = $_POST['correo'];
    $cupon = $_POST['cupon'];
    
    $cuponHtml = !empty($cupon) ? "<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
                        <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
                        <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">Cupon de descuento: <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 20px; color:#56c400;\">$cupon</span></strong></p></li>" : '';


    
    if (($formato == 'pkcs10') && ($id_cert == '10' || $id_cert =='11')) {
    
        $precio = array (
            //Facturación Electrónica Persona Juridica
                
                    'formato'=>'PKCS10',                   
                    'precio12meses'=>$precio12meses_FE,
                    'precio24meses'=>$precio24meses_FE,
                    'descuento'=>$descuento_FE,
                    'cupon'=>$cuponHtml 
         );

         if ($plataforma == 1) {

            $plataforma = 'SIESA';
            $precio['cupon1año'] = "<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
            <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
            <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">Cupon de descuento 1 a&ntilde;o: <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 20px; color:#56c400;\">$cupon_1yearSIESA</span></strong></p></li>";
            $precio['cupon2año'] = "<li style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 13px;\">
            <p style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px; color: #000000;\">
            <strong style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 12px;\">Cupon de descuento 2 a&ntilde;os: <span style=\"font-family: 'Century Gothic', 'Avenir', 'Roboto', 'Heiti SC', sans-serif; font-size: 20px; color:#56c400;\">$cupon_2yearsSIESA</span></strong></p></li>";
        }

         $mail=new enviarEmail($data[$id_cert],$precio,$cliente,$plataforma,$id_cert,$correo,$email_client);
    
    } elseif (($formato == 'token') && ($id_cert != '10' && $id_cert != '11' && $id_cert !='13'  && $id_cert !='20' && $id_cert !='21')) {
    
        $precio = array (
                //Certificados en Token fisico
                    'formato'=>'Token Fisico',
                    'precio12meses'=>$precio12meses_Token,
                    'precio24meses'=>$precio24meses_Token,
                    'descuento'=>$descuento_Token,
                    'cupon'=>$cuponHtml   
         );

         
         $mail=new enviarEmail($data[$id_cert],$precio,$cliente,$plataforma,$id_cert,$correo,$email_client);
    
    } elseif (($formato == 'virtual') && ($id_cert != '10' && $id_cert !='11' && $id_cert !='13' && $id_cert !='20' && $id_cert !='21')) {
        $precio = array (
            //Certificados en Token virtual

                'formato'=>'Token Virtual',
                'precio12meses'=>$precio12meses_Virtual,
                'precio24meses'=>$precio24meses_Vitual,
                'descuento'=>$descuento_Virtual,
                'cupon'=>$cuponHtml   
        );
        
        $mail=new enviarEmail($data[$id_cert],$precio,$cliente,$plataforma,$id_cert,$correo,$email_client);
        
    } elseif (($formato == 'pkcs10') && ($id_cert == '13')){
    
        $precio = array (
            //Certificado Persona Juridica

                'formato'=>'PKCS10',
                'precio12meses'=>$precio12meses_PJ,
                'precio24meses'=>$precio24meses_PJ,
                'descuento'=>$descuento_PJ,
                'cupon'=>$cuponHtml    
        );
        
        $mail=new enviarEmail($data[$id_cert],$precio,$cliente,$plataforma,$id_cert,$correo,$email_client);
                
    } else{
        
        $repuesta  = array (

            'datos'=> 'El tipo de certificado no aplica para el tipo de formato seleccionado',
            'estado'=> 'error',
            'titulo'=> 'Opss..'

        );
        
        echo json_encode($repuesta);
   
    } 

}else{

    $mensajeError = 'Alguno de los campos está vacío:';
    
    if (empty($_POST["name"])) {
        $mensajeError .= '"Nombre del cliente".';
    }
    if (empty($_POST["correo"])) {
        $mensajeError .= '"Correo del Cliente".';
    }
    if (empty($_POST["asesor"])) {
        $mensajeError .= '"Asesor Comercial".';
    }
    if (empty($_POST["plataforma"])) {
        $mensajeError .= '"Plataforma de uso".';
    }
    if (empty($_POST["formato"])) {
        $mensajeError .= '"Formato de entrega".';
    }
    if (empty($_POST["tipo_certificado"])) {
        $mensajeError .= '"Tipo de certificado digital".';
    }

    $repuesta  = array (

        'datos'=> $mensajeError,
        'estado'=> 'error',
        'titulo'=> 'Opss..'

    );
    
    echo json_encode($repuesta);

}



?>