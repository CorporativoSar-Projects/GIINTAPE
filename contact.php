<?php
 
  header('Content-Type: text/html; charset=utf-8');
  mb_internal_encoding('UTF-8');
  require("PHPMailer-master/src/PHPMailer.php");
  require("PHPMailer-master/src/SMTP.php");

  $firstName = utf8_encode($_POST['firstName']);
  $lastName = utf8_encode($_POST['lastName']);
  $inputEmail = utf8_encode($_POST['email']);
  $inputPhone = utf8_encode($_POST['telefono']);
  $areaOfInterest = utf8_encode($_POST['AreaDeInteres']);
  $professionalSituation = utf8_encode($_POST['SituacionProfesional']) ;
  $typeOfService = utf8_encode($_POST['TipoDePrestacion']);
  $workActually = isset($_POST['trabajo']) ? 'SI' : 'NO';
  $cv = $_FILES['cv'];
  $correo=$_GET['c'];
  $mainEmail = "contacto@giintapeinnovahue.com";

  $subject = $firstName . " " . $lastName . " desea unirse a nuestro equipo.";

  $body = utf8_encode("<h2>Hola equipo Giintape!</h2>
  <p>Una persona quiere unirse a nuestro equipo de trabajo.</p>
  <p>Aquí los detalles:</p>");

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->CharSet = "UTF-8";
  $mail->IsSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'STARTTLS';
  $mail->Host = "smtp-mail.outlook.com";
  $mail->Port = 587;
  $mail->IsHTML(true);

  $mail->Body = utf8_decode($body . "
  <p><b>- Nombre(s):</b> " . $firstName . "<br>
  <b>- Apellido(s):</b> " . $lastName . "<br>
  <b>- Correo:</b> " . $inputEmail . "<br>
  <b>- Teléfono:</b> " . $inputPhone . "<br>
  <b>- Área de interés:</b> " . $areaOfInterest . "<br>
  <b>- Situación Profesional:</b> " . $professionalSituation . "<br>
  <b>- Tipo de prestación:</b> " . $typeOfService . "<br>
  <b>- ¿Trabaja actualmente?:</b> " . $workActually . "</p>
  <p>Por favor, contacta a este candidato para poder agendar una primera entrevista.</p>
  <p style='font-size: 8pt;'><em>* Correo enviado a través del sitio web corporativo. No respondas a este correo.</em></p>");

  $mail->Username = "contacto@giintapeinnovahue.com";
  $mail->Password = "giintap35$";
  $mail->SetFrom("contacto@giintapeinnovahue.com");
  $mail->Subject = $subject;
  $mail->AddAddress("econtrerasp@giintapeinnovahueteam.onmicrosoft.com");

  if(isset($cv) && $cv['error'] == 0) {
    $mail->AddAttachment($cv['tmp_name'], $cv['name']);
  }
  if($correo==1){
    if ($mail->Send()) {
      
      $firstName = "";
      $lastName = "";
      $inputEmail = "";
      $inputPhone = "";
      $areaOfInterest = "";
      $professionalSituation = "";
      $typeOfService = "";
      $workActually= "";
      $correo=0;
      require_once("contact.html?c=0");

      require("modalTest.php");
    }
    else
    {
      /*var m=document.getElementById('alertSuccess');m.style.setProperty('display','block','important');*/
    }
    

  }else{

  }

?>
