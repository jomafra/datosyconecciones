<?php
include 'conecc.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

    $Nombres=$_POST["nombres"];
    $Apellidos=$_POST["apellidos"];            
    $Genero= $_POST["sexo"];       
    $Email= $_POST["email"];
    $Pais= $_POST["pais"];
    $Ciudad= $_POST["ciudad"];
    $Telefono= $_POST["telefono"];
    $Direccion= $_POST["direccion"];
    $Asunto= $_POST["asunto"];
    $Mensaje= $_POST["mensaje"];
    $Condicion= $_POST["condicion"];
/* aquí va la validacion de aceptar los terminos y condiciones
    if($Condicion == ischeccked){}
    
 ** 20 20 10 50 15 80 80 255...........*/
$sql="INSERT INTO peticiones 
            (nombres,apellidos,genero,email,pais,telefono,direccion,asunto,mensaje)
            VALUES
            ('$Nombres', '$Apellidos', '$Genero', '$Email', '$Pais', '$Telefono', '$Direccion', '$Asunto', '$Mensaje')";
    
$resultado = mysqli_query($coneccion,$sql);
    if($resultado){
        echo"sus datos se han recibido ";
        $mail = new PHPMailer(true);

        try {
            //Configuracion de Servidor
            $mail->SMTPDebug = 0;     //SMTP::DEBUG_SERVER;          //Enable verbose debug output
            $mail->isSMTP();                                         //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    //Set the SMTP server to send through
            
            $mail->setFrom    = 'jm72152327@gmail.com';                  //Enable SMTP authentication
            $mail->Username   = 'jm72152327@gmail.com';              //SMTP username
            $mail->Password   = 'euazhjkmdwjtohzf';                  //SMTP password
            $mail->SMTPAuth   = true; 
            $mail->SMTPSecure = 'tls';                               //PHPMailer::ENCRYPTION_SMTPS;  
            $mail->Port       = 587;                     //465;      //TCP port to connect to; use 587

            //Receptor
            $mail->addAddress('jose-fragozo@hotmail.com');       

        /* $mail->addAddress('ellen@example.com');               //Name is optional
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');*/

            /*Adjuntar archivos o imagenes
            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            */
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $Asunto;
            $mail->Body    = $Mensaje;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo '<h4>El mensaje se ha enviado con exito</h4>';
            header('refresh: 2; url= index.php');
            
        } catch (Exception $e) {
            echo "<h4>Sus datos fueron guardados pero El correo no se pudo enviar</h4>";
            echo" <h4>pronto nos comunicaremos con ud</h4>";
            echo " Mailer Error: {$mail->ErrorInfo}";
        } 

}else{
    echo"<h4>No se pudo hacer el registro de su peticion</h4>";
    echo"<h4><a href= 'contacto.php'>Quiero Intentarlo Nuevamente</a></h4>";
}

    








