<?php
  header('Content-Type: text/html; charset=utf-8');
  mb_internal_encoding('UTF-8');
  require("PHPMailer-master/src/PHPMailer.php");
  require("PHPMailer-master/src/SMTP.php");
  error_reporting(0);

  $etiquetaTel = utf8_encode("Teléfono");
  $etiquetaArea = utf8_encode("Área de interés");
  $etiquetaVacante = utf8_encode("Vacante de interés");
  $etiquetaSituacion = utf8_encode("Situación profesional");
  $etiquetaTrabaja = utf8_encode("¿Trabaja actualmente?");
  $etiquetaTipo = utf8_encode("Tipo de prestación");

  // Mapeo de niveles de skills
  $niveles = [
      0 => "No lo conozco",
      1 => "Conozco solo teoría",
      2 => "Principiante",
      3 => "Intermedio",
      4 => "Avanzado",
      5 => "Experto"
  ];

  // Obtención de datos del formulario
  $firstName = ($_GET['firstName']);
  $lastName = ($_GET['lastName']);
  $inputEmail = ($_GET['email']);
  $inputPhone = ($_GET['telefono']);
  $areaOfInterest = ($_GET['AreaDeInteres']);
  $vacancyOfInterest = ($_GET['VacanteDeInteres']);
  $professionalSituation = ($_GET['SituacionProfesional']);
  $typeOfService = ($_GET['TipoDePrestacion']);
  $workActually = isset($_GET['trabajo']) ? 'Si' : 'No';
  $cv = $_FILES['cv'];
  //$cv_tmp = $_GET['cv_tmp'];
  //$cv_name = $_GET['cv_name'];


  $correo = $_GET['c'];
  $mainEmail = "contacto@giintapeinnovahue.com";

  // Variables para promedios
  $totalHard = $countHard = $totalSoft = $countSoft = 0;
  
  // Obtener Hard Skills
  $hardSkillsText = "<br><b>Hard Skills:</b><br>";
  foreach ($_POST['hardSkills'] as $skill => $level) {
      $hardSkillsText .= "<b>" . htmlspecialchars($skill) . ":</b> " . $niveles[$level] . "<br>";
      $totalHard += $level;
      $countHard++;
  }

  // Obtener Soft Skills
  $softSkillsText = "<br><b>Soft Skills:</b><br>";
  foreach ($_POST['softSkills'] as $skill => $level) {
      $softSkillsText .= "<b>" . htmlspecialchars($skill) . ":</b> " . $niveles[$level] . "<br>";
      $totalSoft += $level;
      $countSoft++;
  }

  
    // Convertir los valores a una escala de 100
    $promedioHard = ($countHard > 0) ? round(($totalHard / $countHard) * 20, 2) : 0;
    $promedioSoft = ($countSoft > 0) ? round(($totalSoft / $countSoft) * 20, 2) : 0;
    $promedioGeneral = round(($promedioHard + $promedioSoft) / 2, 2);


   // Asunto del correo
   $subject = utf8_decode($firstName) . " " . utf8_decode($lastName) . " nos envió su CV.";

  // Cuerpo del correo para el equipo de Giintape
  $body = utf8_encode("<h2>Hola, equipo Giintape</h2>
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
  <b>- " . $etiquetaTel . ":</b> " . $inputPhone . "<br>
  <b>- " . $etiquetaArea . ":</b> " . $areaOfInterest . "<br>
  <b>- " . $etiquetaVacante . ":</b> " . $vacancyOfInterest . "<br>
  <b>- " . $etiquetaSituacion . ":</b> " . $professionalSituation . "<br>
  <b>- " . $etiquetaTipo . ":</b> " . $typeOfService . "<br>
  <b>- " . $etiquetaTrabaja . ":</b> " . $workActually . "</p>");

  $mail->Body .= $hardSkillsText;
  $mail->Body .= $softSkillsText;
  $mail->Body .= "<br><b>Promedio General:</b> " . $promedioGeneral . "%<br>";

  // Adjuntar archivo CV si existe
  if (isset($cv) && $cv['error'] == 0) {
    $mail->AddAttachment($cv['tmp_name'], $cv['name']);
  }
  //if (isset($cv_tmp)){
   // $mail->AddAttachment($cv_tmp, $cv_name);
    //}


  $mail->Username = "contacto@giintapeinnovahue.com";
  $mail->Password = "giintap35$";
  $mail->SetFrom("contacto@giintapeinnovahue.com");
  $mail->Subject = $subject;
  $mail->AddAddress("ygomezc@giintapeinnovahueteam.onmicrosoft.com");

  if ($correo == 1) {
    if ($mail->Send()) {
      // Enviar correo al candidato
$bodyToCandidate = "<h2>Hola $firstName,</h2>
<p>Gracias por postularte a nuestra vacante en Giintape Innovahue. Hemos recibido tu información y estamos revisando tu solicitud.</p>
<p>Para continuar con el proceso, por favor agenda tu primera entrevista en el siguiente enlace:</p>
<p><a href='https://outlook.office365.com/owa/calendar/TalentoInnovahue@giintapeinnovahueteam.onmicrosoft.com/bookings/' target='_blank' style='font-size:18px; font-weight:bold;'>Agendar entrevista</a></p>
<p>Esperamos verte pronto.</p>
<p>Saludos,<br>Equipo Giintape Innovahue</p>";

// Crear nuevo objeto PHPMailer para enviar correo al candidato
$mailToCandidate = new PHPMailer\PHPMailer\PHPMailer();
$mailToCandidate->CharSet = "UTF-8";
$mailToCandidate->IsSMTP();
$mailToCandidate->SMTPDebug = 0;
$mailToCandidate->SMTPAuth = true;
$mailToCandidate->SMTPSecure = 'STARTTLS';
$mailToCandidate->Host = "smtp-mail.outlook.com";
$mailToCandidate->Port = 587;
$mailToCandidate->IsHTML(true);

$mailToCandidate->Body = $bodyToCandidate;
$mailToCandidate->Username = "contacto@giintapeinnovahue.com";
$mailToCandidate->Password = "giintap35$";
$mailToCandidate->SetFrom("contacto@giintapeinnovahue.com");
$mailToCandidate->Subject = "Confirmación de postulación";
$mailToCandidate->AddAddress($inputEmail);

// Enviar correo al candidato
$mailToCandidate->Send();
        // Limpiar campos del formulario
        $firstName = "";
        $lastName = "";
        $inputEmail = "";
        $inputPhone = "";
        $areaOfInterest = "";
        $vacancyOfInterest = "";
        $professionalSituation = "";
        $typeOfService = "";
        $workActually = "";
        $correo = 0;
        
        // Mostrar modal de éxito o redirigir
        require("modalTest.php");
    } else {
        // En caso de error en el envío al equipo
        // var m=document.getElementById('alertSuccess'); m.style.setProperty('display','block','important');
    }
}
?>
