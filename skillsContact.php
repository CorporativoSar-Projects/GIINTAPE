<?php 
// Lista de vacantes y habilidades
$vacantes = [
    'Desarrollador Web Back-End' => [
        'hardSkills' => ['PHP', 'Python y Django (Python web framework)', 'Bases de datos (SQL/MySQL)', 'Lógica de programación y estructura de código', 'Control de versiones (GitHub)'],
        'softSkills' => ['Resolución de problemas y pensamiento analítico', 'Trabajo en equipo y colaboración', 'Comunicación efectiva y asertiva', 'Creatividad e innovación', 'Orientado a resultados']
    ],
    'Ejecutivo de Cuenta' => [
        'hardSkills' => ['Técnicas de ventas y negociación', 'Prospección de clientes', 'Elaboración de propuestas comerciales', 'Seguimiento post-venta o fidelización', 'Atención a clientes'],
        'softSkills' => ['Comunicación persuasiva y escucha activa', 'Resiliencia y manejo de objeciones', 'Trabajo en equipo y colaboración', 'Atención al detalle y ortografía', 'Orientado a resultados']
    ],
    'Copy & Content Creator' => [
        'hardSkills' => ['Redacción persuasiva y storytelling', 'Creación de contenido para redes sociales', 'Herramientas de edición (Canva / Photoshop)', 'Adaptación de tono y estilo a la marca', 'Analítica web y métricas'],
        'softSkills' => ['Creatividad e innovación', 'Atención al detalle y ortografía', 'Trabajo en equipo y colaboración', 'Organización y gestión de múltiples contenidos', 'Capacidad de investigación y análisis']
    ],
    'Analista de Atracción de Talento' => [
        'hardSkills' => ['Reclutamiento y selección de personal', 'Manejo de portales de empleo y LinkedIn Recruiter', 'Coordinación de entrevistas', 'ATS (Sistemas de seguimiento de candidatos)', 'Aplicación y evaluación de filtros'],
        'softSkills' => ['Comunicación efectiva y asertiva', 'Atención al detalle y ortografía', 'Empatía y trato con candidatos', 'Análisis de perfiles y toma de decisiones', 'Organización y gestión de múltiples vacantes']
    ],
    'Analista de Desarrollo Organizacional' => [
        'hardSkills' => ['Evaluación de desempeño y clima laboral','Diseño y ejecución de planes de capacitación','Implementación de estrategias de cultura organizacional','Análisis de métricas de RRHH (rotación, satisfacción, etc.)','Herramientas de colaboración (Teams, formularios, etc.)'],
        'softSkills' => ['Pensamiento estratégico y visión de negocio','Atención al detalle y ortografía','Empatía y escucha activa','Capacidad de análisis e interpretación de datos','Trabajo en equipo y colaboración']
    ],
    'Asistente de Operaciones' => [
        'hardSkills' => ['Manejo de Excel y análisis de datos','Documentación de procesos y flujos de trabajo','Optimización de procesos internos','Creación y seguimiento de indicadores de desempeño (KPIs)','Gestión de calidad y control de procesos'],
        'softSkills' => ['Resolución de problemas y toma de decisiones','Atención al detalle y ortografía','Pensamiento analítico y crítico','Comunicación efectiva y asertiva','Adaptabilidad a cambios y mejora continua']
    ]
];

// Recoger la vacante seleccionada desde el formulario
$vacanteSeleccionada = isset($_POST['VacanteDeInteres']) ? trim($_POST['VacanteDeInteres']) : null;
$habilidades = null;

if ($vacanteSeleccionada && array_key_exists($vacanteSeleccionada, $vacantes)) {
    // Obtener las habilidades de la vacante seleccionada
    $habilidades = $vacantes[$vacanteSeleccionada];
} else {
    $mensajeError = "Vacante no encontrada.";
}

// Obtención de datos del formulario
$firstName = utf8_encode($_POST['firstName']);
$lastName = utf8_encode($_POST['lastName']);
$inputEmail = utf8_encode($_POST['email']);
$inputPhone = utf8_encode($_POST['telefono']);
$areaOfInterest = utf8_encode($_POST['AreaDeInteres']);
$vacancyOfInterest = utf8_encode($_POST['VacanteDeInteres']);
$professionalSituation = utf8_encode($_POST['SituacionProfesional']);
$typeOfService = utf8_encode($_POST['TipoDePrestacion']);
$workActually = isset($_POST['trabajo']) ? 'Si' : 'No';
//$cv = $_FILES['cv'];
//$cv_tmp =$cv['tmp_name'];
//$cv_name =$cv['name'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-PK0MJ379N5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-PK0MJ379N5');
  </script>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!--Icon-Font-->
  <script src="https://kit.fontawesome.com/c41cb6ddd6.js" crossorigin="anonymous"></script>
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="marketing digital,desarrollo de software,páginas web,aplicaciones web,redes sociales,tecnología,Microsoft 365,soporte técnico,Vacantes desarrollador de software,Prácticas profesionales,Servicio social,Empleos de TI,Vacantes en tecnología,Vacantes en redes sociales,Vacantes en CDMX para practicantes,Vacantes en Ciudad de México,Vacantes en México,inteligencia artificial,ia,IA,AI,capacitación en microsoft 365,tecnologías microsoft" />
  <meta name="description" content="Expertos en Marketing Digital, Desarrollo de Software y Capacitación en Microsoft 365. Únete a nuestro equipo, libera tus prácticas profesionales o servicio social."/>
  <meta name="author" content="GIINTAPE INNOVHAUE" />
  <link rel="shortcut icon" href="icon/logogiintape.png">

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <!--Icon-Font-->
  <script src="https://kit.fontawesome.com/c41cb6ddd6.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <title>Evaluación de Habilidades</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f4f4f4;
        

    }

    .form-skills {
        background: #023047;
        color: white;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        margin: auto;
        padding: 50px;
        width: 100%;
    }

    h2, h3 {
    color: white;
    font-weight: 700;
    margin-bottom: 15px;
    }

    .skills-container {
        display: flex;
        justify-content: space-between;
        gap: 40px;
        margin-bottom: 20px;
    }

    .skills-column {
        width: 50%;
        text-align: left;
    }

    label {
        font-weight: 600;
        display: block;
        margin-top: 10px;
    }

    select {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    input[type="submit"] {
        background: #023047;
        color: white;
        font-size: 16px;
        font-weight: 600;
        padding: 12px;
        border: 2px solid white;
        border-radius: 5px;
        cursor: pointer;
        width: 10%;
    }

    input[type="submit"]:hover {
        background: white;
        color: #023047;
    }
    @media (max-width: 768px) {
    .skills-container {
        flex-direction: column;
        gap: 20px;
    }

    .skills-column {
        width: 100%;
    }

    input[type="submit"] {
        width: 100%;
    }
    .skills-column h3 {
        cursor: pointer;
            background-color: #f0f0f0;
            padding: 10px 20px;
            text-align: left;
            border: none;
            border-left: 5px solid #023047; /* Pestaña del lado izquierdo */
            color: #023047;
            font-weight: bold;
            font-size: 18px;
            margin: 0;
            transition: background-color 0.3s;
    }
}


</style>

<body>
  <!--Barra Redes-->
  <div class="container-bar">
    <input type="checkbox" id="btn-social">
    <label for="btn-social" class="fa fa-play"></label>
    <div class="icon-social">
      <a href="https://www.facebook.com/innsolcorporation" class="fa fa-facebook">
        <span id="title">Facebook</span>
      </a>
      <a href="https://www.instagram.com/giintape_innovahue/" class="fa fa-instagram">
        <span id="title">Instagram</span>
      </a>
      <a href="mailto:contacto@giintapeinnovahue.com" class=" fa fa-envelope">
        <span id="title">Correo</span>
      </a>
      <a href="https://wa.me/525653975314" class="fa fa-whatsapp">
        <span id="title">WhatsApp</span>
      </a>
    </div>
  </div>
  <!--End Barra Redes-->
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logogiintape.png" width="40" height=auto>
            <span>
              GIINTAPE
            </span>
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> Informaci&oacute;n </a>
                </li>
                <li class="nav-item" style="text-align: center;">
                  <a class="nav-link">Servicios </a>
                  <ul>
                    <li class="nav-item">
                      <a class="nav-link" href="consultoriamk.html">Marketing Digital</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="desarrolloweb.html">Desarrollo de Software</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="soporteTecnico.html">Soporte Técnico</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.html">Talento INNOVAHUE </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
<br>
<!--Formulario de skills-->
<div class="form-skills">
  <center><h2>Postulación: <?php echo htmlspecialchars($vacanteSeleccionada ?? "No seleccionada"); ?></h2></center>
  <?php if (isset($mensajeError)): ?>
      <p style="color: red;"><?php echo $mensajeError; ?></p>
  <?php elseif ($habilidades): ?>
    <form action="contact.php?firstName=<?php echo $firstName; ?>&lastName=<?php echo $lastName; ?>&email=<?php echo $inputEmail; 
    ?>&telefono=<?php echo $inputPhone; ?>&AreaDeInteres=<?php echo $areaOfInterest; ?>&VacanteDeInteres=<?php echo $vacancyOfInterest; 
    ?>&SituacionProfesional=<?php echo $professionalSituation; ?>&TipoDePrestacion=<?php echo $typeOfService; 
    ?>&trabajo=<?php echo $workActually; ?>&c=1" method="POST" enctype="multipart/form-data" onsubmit="return validarRecaptcha();">
    
        <br>
        <div class="skills-container">
    <div class="skills-column">
        <h3 class="toggle-skills" onclick="toggleSkills('hardSkillsSection')">Hard Skills<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
        </svg></h3>
        <div id="hardSkillsSection" class="skills-section">
            <?php foreach ($habilidades['hardSkills'] as $skill): ?>
                <div>
                    <label for="<?php echo $skill; ?>"><?php echo $skill; ?>:</label>
                    <select name="hardSkills[<?php echo $skill; ?>]" id="<?php echo $skill; ?>">
                        <option value="0">No lo conozco</option>
                        <option value="1">Conozco solo teoría</option>
                        <option value="2">Principiante</option>
                        <option value="3">Intermedio</option>
                        <option value="4">Avanzado</option>
                        <option value="5">Experto</option>
                    </select>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div class="skills-column">
        <h3 class="toggle-skills" onclick="toggleSkills('softSkillsSection')">Soft Skills <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
        </svg></h3>
        
        <div id="softSkillsSection" class="skills-section">
            <?php foreach ($habilidades['softSkills'] as $skill): ?>
                <div>
                    <label for="<?php echo $skill; ?>"><?php echo $skill; ?>:</label>
                    <select name="softSkills[<?php echo $skill; ?>]" id="<?php echo $skill; ?>">
                        <option value="0">No lo conozco</option>
                        <option value="1">Conozco solo teoría</option>
                        <option value="2">Principiante</option>
                        <option value="3">Intermedio</option>
                        <option value="4">Avanzado</option>
                        <option value="5">Experto</option>
                    </select>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
    <div class="inputBox">
            <span style="color: rgb(238, 234, 234);">Adjunta tu CV*: </span>
            <input style="font-size:  10px;" type="file" id="btn-file" name="cv" accept=".pdf, .doc, .docx" required>
            <p id="file-error" style="color: red; display: none;">Por favor, adjunta un archivo en formato PDF, DOC o DOCX con un tamaño máximo de 5 MB.</p>
    </div>

        <div class="g-recaptcha" data-sitekey="6Ld7FqsqAAAAABJq7tGF-AIvOWPtiEl0Q51lYvhw"></div>
        <br>
        <input type="submit" value="Enviar">
    </form>
  <?php endif; ?>
</div>
<br>
<br>
<!-- footer section -->
<section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="images/logogiintape.png" width="200" height="200">
          <br>
          <br>
          <div class="info-logo">
            <h2>
              GIINTAPE INNOVAHUE
            </h2>
            <p>
              GRUPO IMPULSOR DE INNOVACIÓN EN TECNOLOGÍA Y AUTOMATIZACIÓN DE PROCESOS EMPRESARIALES INNOVAHUE, S.A.S.
            </p>
          </div>
        </div>
        <div class="col-md-4 nav-options">
          <div class="info-nav">
            <h4 style="font-size: 25px;">
              Navegar
            </h4>
            <ul>
              <li>
                <a style="font-size: 23px"  href="index.html">
                  Inicio
                </a>
              </li>
              <li>
                <a style="font-size: 23px" href="about.html">
                  Informaci&oacute;n
                </a>
              </li>
              <li>
                <a style="font-size: 23px" href="consultoriamk.html">
                  Marketing Digital
                </a>
              </li>
              <li>
                <a style="font-size: 23px" href="desarrolloweb.html">
                  Desarrollo de Software
                </a>
              </li>
              <li>
                <a style="font-size: 23px;" href="https://giintapeinnovahue.freshdesk.com/support/home">
                  Soporte Técnico
                </a>
              </li>
              <li>
                <a style="font-size: 23px" href="contact.html">
                  Talento INNOVAHUE
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info-contact">
            <h4 style="font-size: 22px">
              Información de Contacto
            </h4>
            <div class="location">
              <h6 style="font-size: 20px; color: white;">
                Nuestras Oficinas:
              </h6>
              <a href="https://maps.app.goo.gl/rjm6zeSu2Z2jMfmP9" target="_blank">
                <img src="images/location.png" alt="giintape innovahue publicidad en redes sociales cdmx">
                <span style="font-size: 16px;">
                  Río Guadiana 31, Cuauhtémoc, Cuauhtémoc, 06500, CDMX
                </span>
              </a>
            </div>
            <div class="call">
              <h6 style="font-size: 20px; color: white;">
                Tel&eacute;fono:
              </h6>
              <a>
                <img src="images/telephone.png" alt="whatsapp giintape innovahue marketing en redes sociales cdmx">
                <span style="font-size: 16px;">
                  (+52)56 5397 5314
                </span>
              </a>
            </div>
            <br>
            <div class="email">
              <h6 style="font-size: 20px; color: white;">
                Correo:
              </h6>
              <a href="mailto:contacto@giintapeinnovahue.com" target="_blank">
                <img src="images/email_icon_giin.png" alt="correo giintape innovahue marketing en redes sociales cdmx">
                <span style="font-size: 16px;">
                  contacto@giintapeinnovahue.com
                </span>
              </a>
            </div>
            <div class="time">
              <h6 style="font-size: 20px; color: white;">
                Horario:
              </h6>
              <a>
                <img src="images/time.png" alt="horario giintape innovahue marketing en redes sociales cdmx">
                <span style="font-size: 16px;">
                  Lunes a viernes de 9 a 18 hrs.
                </span><br>
              </a>
            </div>
          </div>
          <!--Links Redes Sociales-->
          <ul class="sci">
            <li><a href="https://www.facebook.com/innsolcorporation"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="https://www.instagram.com/giintape_innovahue/"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="https://es.linkedin.com/company/giintape-innovahue"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <!--<li><a href="https://www.tiktok.com/@mktikeip7"><ion-icon name="logo-tiktok"></ion-icon></a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end footer section -->
   
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script src="js/validation.js"></script>
  <script src="js/modalPrivacyNotice.js"> </script>
  <script src="js/none.js"> </script>
  <script src="js/filterVacancy.js"></script>
  <!--Iconos redes sociales footer-->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="js/vaca.js"></script>
  
  <script>
        // Función para alternar la visibilidad de las secciones
        function toggleSkills(skillSectionId) {
            var section = document.getElementById(skillSectionId);
            if (section.style.display === "none" || section.style.display === "") {
                section.style.display = "block"; // Mostrar la sección
            } else {
                section.style.display = "none"; // Ocultar la sección
            }
        }

        function validarRecaptcha()
        {
          var response = grecaptcha.getResponse(); // Obtiene la respuesta del reCAPTCHA
          if (response.length === 0) { // Si está vacío, no deja enviar el formulario
            alert("Por favor, completa el reCAPTCHA antes de enviar el formulario.");
            return false;
          }
          return true;
        }
    </script>
  
</body>
</html>