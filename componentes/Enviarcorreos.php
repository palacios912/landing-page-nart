<?php

if( isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $destino = "consultas@nartconsultores.com";
        $asunto = "Mensaje de " . $name;
        $correo = $msg . "\r\n\r\n--". $name;
        $header = "No responder sobre este correo " . "\r\n";
        $header .= "Reply-to:" .$email ."\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        $mail= mail($destino, $asunto, $correo, $header);
        if($mail){
            echo('<div class="bg-green-200 text-green-900 font-sans p-1 hidden">Gracias por contactarse! </div>');
        }
        else{
            echo('<div class ="bg-red-200 text-red-900 font-sans p-1 hidden">Por favor revisa que tus datos sean correctos</div>');
        }
    }
}
?>