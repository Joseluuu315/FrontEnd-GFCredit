<?php
/**
 * Template Name: Custom Template
 */
get_header(); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $select_menu = filter_var($_POST['select_menu'], FILTER_SANITIZE_STRING);

    // Validación básica
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($select_menu)) {
        // Detalles del correo
        $to = "admin@gfcredit.com";  // Cambia esto por tu correo
        $subject = "Nuevo contacto desde la web";
        $body = "Nombre: $name\nCorreo: $email\nTeléfono: $phone\nInterés: $select_menu";
        $headers = "From: noreply@gfcredit.com\r\nReply-To: noreply@gfcredit.com";

        // Enviar correo
        if (mail($to, $subject, $body, $headers)) {
            $msg = "Mensaje enviado exitosamente.";
        } else {
            $msg = "Error al enviar el mensaje.";
        }
    } else {
        $msg = "Todos los campos son obligatorios.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title>Gestión financiera | Credibrokers</title>
    <meta name="description"
        content="Credibrokers ofrece soluciones de gestión financiera personalizadas, asesoramiento experto en inversiones, planificación de jubilación y más.">
    <meta name="keywords"
        content="gestión financiera de créditos, planificación de jubilación, inversión, servicios financieros">
    <meta property="og:title" content="Gestión financiera de créditos - Credibrokers" />
    <meta property="og:description"
        content="Soluciones expertas en gestión financiera para asegurar tu futuro financiero." />
    <meta property="og:image" content="https://gfcredit.es/assets/images/logo/credibrokers_logo.webp" />
    <meta property="og:url" content="https://gfcredit.es/" />
    <meta property="og:type" content="website" />
    <meta name="robots" content="index, follow"/>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/animation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <link rel="icon" href="assets/images/logo/credibrokers_logo.webp" type="image/png" sizes="16x16">
    <!-- Captcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
			<div id="empezar">
	
		</div>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
    var header = document.querySelector('.header');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) { // Puedes ajustar este valor según lo necesario
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
	</script>
<style>
	.header{
		background-color: transparent;
    	transition: background-color 0.3s ease;
	}
	.header.scrolled{
		background-color: #20163d;
	}
body{
    width: 100vw;
    position: relative;
    margin: 0px;
    padding: 0px;
}
</style>
<body>
<style>
.business_grow {
    position: relative;
    overflow: hidden;
    height: 50%;
}
@media (min-width: 922px) {
    .site-content .ast-container {
        display: block !important;
        width: 100%;
        max-width: 100%; /* O el valor que necesites */
        margin: 0 auto; /* Centra el contenedor si es necesario */
    }
}
.ast-container {
    box-sizing: border-box;
}
.ast-container {
    margin: 0 auto; /* Esto centra el contenedor horizontalmente */
    padding: 0; /* Ajusta el padding según sea necesario */
}


.bg_hero {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    overflow: hidden;
}

.bg_hero img {
    width: 100%;
    height: auto;
}

.section-layout {
    position: relative;
    z-index: 1;
    padding: 50px 0; /* Ajusta según sea necesario */
}

.container {
    position: relative;
}

.text-area {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: none;
	   margin: 0;
    padding: 0;
}

.title_ch {
    font-size: 2.5em;
    color: #333;
}

.content_message {
    margin: 20px 0;
    font-size: 1.2em;
    color: #666;
}

.btn-theme {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

.btn-theme:hover {
    background-color: #0056b3;
}
.title_ch {
    max-width: 100%;
}

	.menu-centrado {
		display: flex;
    justify-content: center;
    margin-top: 10px; 
	}
	.contenido-item {
		color: black;
	}
	
	.contenido-item {
		color: black;
		text-align: center;
	}
	
	        .full-width-gallery {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 100vw;
            overflow: hidden;
        }

        .full-width-gallery a {
            flex: 1;
            text-decoration: none;
        }

        .full-width-gallery img {
            width: 100%;
            height: auto; /* Mantener proporción */
            display: block;
        }
</style>

<!-- business_grow Start -->
<section class="business_grow">
    <div class="bg_hero">
        <img src="https://i.imgur.com/1s6y54a.png" alt="" class="rellax" data-rellax-speed="-3"
            data-rellax-tablet-speed="-3" data-rellax-mobile-speed="1" data-rellax-xs-speed="-1">
    </div>

    <div class="section-layout">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-area">
                        <!-- Título y logotipo -->
                        <h1 class="title_ch">Gestión Financiera de Crédito</h1>
						<p style="color: white;">
							Gestión financiera de Crédito es un Bróker que ofrece financiación según las necesidades del cliente.
							Cuando un persona física o sociedad acude a nuestra ayuda, sea para financiar la compra de una vivienda, naves industriales, compra de nuevo stock o necesita liquidez para potenciar su negocio, nuestros gestores analizan el caso y dependiendo de sus características, lo derivamos a un tipo de financiación, sea dentro de la banca tradicional o dentro de la financiación privada.
							La información que nos ofrece el cliente nos permite comprender cuales son sus necesidades de solvencia y la capacidad de retorno de la inversión. Nosotros somos capaces de diagnosticar la situación y preparar un plan de trabajo a medida. Siempre existe un tipo de financiamiento para cada caso.
						</p>
                        <a href="#contact" class="btn-theme mr-4"><span>Contáctanos</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- business_grow End -->

<!-- Script para mostrar el contenido de Misión, Visión y Valores -->
<script>
function mostrarContenido(id) {
    // Ocultar todos los contenidos
    var items = document.querySelectorAll('.contenido-item');
    items.forEach(function(item) {
        item.style.display = 'none';
    });

    // Mostrar el contenido seleccionado
    document.getElementById(id).style.display = 'block';
}
</script>

 <!-- Menú Misión, Visión y Valores -->
                        <div class="menu-centrado">
							<a class="text-black" style="font-size: 1.5rem; font-weight: bold;">Nuestra &nbsp;</a>	
                            <a href="javascript:void(0);" class="menu-item text-black" onclick="mostrarContenido('mision')" style="font-size: 1.5rem; font-weight: bold;">Misión</a> | 
                            <a href="javascript:void(0);" class="menu-item text-black" onclick="mostrarContenido('vision')" style="font-size: 1.5rem; font-weight: bold;">Visión</a> | 
                            <a href="javascript:void(0);" class="menu-item text-black" onclick="mostrarContenido('valores')" style="font-size: 1.5rem; font-weight: bold;">Valores</a>
                        </div>

                        <!-- Contenido de Misión, Visión y Valores -->
<div id="contenido" class="contenido">
    <!-- Imagen Principal -->
<div style="text-align: center; margin-bottom: 20px;">
    <img src="http://www.gfcredit.es/wp-content/uploads/2024/11/1-PRESENTACION-DE-MISION-VISION-VALORES.jpg" 
         alt="Presentación Misión Visión Valores" 
         style="max-width: 30%; height: auto;">
</div>

    <div id="mision" class="contenido-item" style="display:none; text-align: justify; margin: 0 auto; max-width: 800px;">
        <h3 style="color: black; text-align: center;">Misión</h3>
        <!-- Imagen para Misión -->
        <div style="text-align: center; margin-bottom: 15px;">
            <img src="http://www.gfcredit.es/wp-content/uploads/2024/11/2-MISION.jpg" alt="Imagen de Misión" style="max-width: 100%; height: auto;">
        </div>
         <p style="color: black;">Brindar soluciones financieras personalizadas y responsables a quienes buscan apoyo para alcanzar sus metas, ya sea en la compra de una vivienda, el crecimiento de un negocio o el fortalecimiento de su liquidez. Nos comprometemos a analizar cada caso individualmente, ofreciendo planes de financiamiento adecuados y accesibles que se ajusten a las características y necesidades de cada cliente, sin importar su perfil o situación financiera.<br></p>

    </div>

    <div id="vision" class="contenido-item" style="display:none; text-align: justify; margin: 0 auto; max-width: 800px;">
        <h3 style="color: black; text-align: center;">Visión</h3>
        <!-- Imagen para Visión -->
        <div style="text-align: center; margin-bottom: 15px;">
            <img src="http://www.gfcredit.es/wp-content/uploads/2024/11/3-VISION.jpg" alt="Imagen de Visión" style="max-width: 100%; height: auto;">
        </div>
                <p style="color: black;">Ser el bróker de referencia en el ámbito de financiamiento personalizado, promoviendo una cultura de igualdad, respeto y apoyo mutuo. Aspiramos a construir relaciones de confianza y comprensión con nuestros clientes, donde cada persona se sienta valorada y comprendida. Queremos ser una empresa que no solo facilite la financiación, sino que inspire un cambio positivo en la industria y en la vida de nuestros clientes.<br></p>

    </div>

    <div id="valores" class="contenido-item" style="display:none; text-align: justify; margin: 0 auto; max-width: 800px;">
        <h3 style="color: black; text-align: center;">Valores</h3>
        <!-- Imagen para Valores -->
        <div style="text-align: center; margin-bottom: 15px;">
            <img src="http://www.gfcredit.es/wp-content/uploads/2024/11/4-VALORES.jpg" alt="Imagen de Valores" style="max-width: 100%; height: auto;">
        </div>
 <ul style="color: black; text-align: justify;">
            <li>1. Empatía y respeto: Nos preocupamos profundamente por comprender las necesidades y circunstancias de cada persona, sin juzgar, y tratándolos con el respeto y la dignidad que merecen.</li>
            <br>
            <li>2. Igualdad e inclusión: Creemos que todas las personas deben tener acceso a oportunidades financieras sin importar su origen, raza o género. Promovemos un ambiente donde la igualdad y la diversidad sean la base de nuestro trabajo.</li>
            <br>
            <li>3. Transparencia y ética: La confianza es esencial, por eso operamos con honestidad y claridad en cada proceso, garantizando que nuestros clientes entiendan completamente sus opciones.</li>
            <br>
            <li>4. Compromiso y dedicación: Nos esforzamos por encontrar siempre la mejor solución para cada cliente, comprometiéndonos a guiarlos y acompañarlos en cada paso de su proceso financiero.</li>
            <br>
            <li>5. Pasión por ayudar: Inspirados en la idea de que el éxito individual contribuye al bienestar colectivo, nos dedicamos a ayudar a nuestros clientes a alcanzar sus sueños con soluciones a su medida.<br></li>
        </ul>
    </div>
</div>
	<script>
    function mostrarContenido(id) {
        // Oculta todos los elementos de contenido
        const items = document.querySelectorAll('.contenido-item');
        items.forEach(item => {
            item.style.display = 'none';
        });

        // Muestra el elemento seleccionado
        const selectedItem = document.getElementById(id);
        if (selectedItem) {
            selectedItem.style.display = 'block';

            // Desplaza la página hasta el elemento
            selectedItem.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
</script>

    <!-- On Time Start -->
    <section class="on_time_area section_pyUp">
        <div class="section-layout">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="part">
                            <div class="img_area">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 1024 1024">
                                    <path fill="#4f46e5"
                                        d="m960 95.888l-256.224.001V32.113c0-17.68-14.32-32-32-32s-32 14.32-32 32v63.76h-256v-63.76c0-17.68-14.32-32-32-32s-32 14.32-32 32v63.76H64c-35.344 0-64 28.656-64 64v800c0 35.343 28.656 64 64 64h896c35.344 0 64-28.657 64-64v-800c0-35.329-28.656-63.985-64-63.985zm0 863.985H64v-800h255.776v32.24c0 17.679 14.32 32 32 32s32-14.321 32-32v-32.224h256v32.24c0 17.68 14.32 32 32 32s32-14.32 32-32v-32.24H960v799.984zM736 511.888h64c17.664 0 32-14.336 32-32v-64c0-17.664-14.336-32-32-32h-64c-17.664 0-32 14.336-32 32v64c0 17.664 14.336 32 32 32zm0 255.984h64c17.664 0 32-14.32 32-32v-64c0-17.664-14.336-32-32-32h-64c-17.664 0-32 14.336-32 32v64c0 17.696 14.336 32 32 32zm-192-128h-64c-17.664 0-32 14.336-32 32v64c0 17.68 14.336 32 32 32h64c17.664 0 32-14.32 32-32v-64c0-17.648-14.336-32-32-32zm0-255.984h-64c-17.664 0-32 14.336-32 32v64c0 17.664 14.336 32 32 32h64c17.664 0 32-14.336 32-32v-64c0-17.68-14.336-32-32-32zm-256 0h-64c-17.664 0-32 14.336-32 32v64c0 17.664 14.336 32 32 32h64c17.664 0 32-14.336 32-32v-64c0-17.68-14.336-32-32-32zm0 255.984h-64c-17.664 0-32 14.336-32 32v64c0 17.68 14.336 32 32 32h64c17.664 0 32-14.32 32-32v-64c0-17.648-14.336-32-32-32z" />
                                </svg>
                            </div>
                            <div class="text_part">
                                <h5 class="content_title_mb">Planificación <br />Personalizada.</h5>
                                <p class="">Nos adaptamos a tus objetivos financieros individuales, ofreciendo
                                    estrategias de inversión personalizadas que se alinean con tus metas a corto, medio
                                    y largo plazo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="part">
                            <div class="img_area">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 14 14">
                                    <path fill="#4f46e5" fill-rule="evenodd"
                                        d="M7.527 9.331a5.025 5.025 0 0 0 1.49-1.319a1.964 1.964 0 0 1-.273-.661l-.019-.088a1.294 1.294 0 0 0-1.042-.998c-2.072-.36-2.072-3.334 0-3.695a1.293 1.293 0 0 0 1.03-.948a5 5 0 1 0-6.187 7.709V10.5a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V9.331Zm-5 3.919a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 0 1.5h-3.5a.75.75 0 0 1-.75-.75Zm7.28-11.533C9.99.881 11.18.876 11.37 1.71l.009.04l.018.078a2.395 2.395 0 0 0 1.921 1.812c.872.152.872 1.404 0 1.556a2.396 2.396 0 0 0-1.925 1.827l-.023.102c-.19.835-1.381.83-1.565-.007l-.019-.087A2.38 2.38 0 0 0 7.87 5.194c-.871-.151-.871-1.401 0-1.553a2.38 2.38 0 0 0 1.915-1.826L9.8 1.75l.008-.033Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="text_part">
                                <h5 class="content_title_mb" href="https://www.gfcredit.es/?page_id=76">Financiación <br /> privada.</h5>
                                <p class="">Utilizamos las últimas tecnologías en análisis financiero y gestión de
                                    carteras para maximizar tus rendimientos, minimizando al mismo tiempo los riesgos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="part mb_none">
                            <div class="img_area">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 2048 2048">
                                    <path fill="#4f46e5"
                                        d="M384 1536h128v128H256V384H128v1408h384v128H0V256h256V128h384q88 0 169 27t151 81q69-54 150-81t170-27h384v128h256v819l-128-58V384h-128v575l-128-59V256h-256q-71 0-136 24t-120 71v608l-128 58V351q-54-46-119-70t-137-25H384v1280zm1408 255l-448 225l-448-225q0-36 1-76t8-81t20-77t36-67l-193-88v582H640v-640l704-320l704 320l-321 146l8 11q21 31 32 67t17 73t7 76t1 74zm-448-627l-395 180l395 180l395-180l-395-180zm0 709l320-161q-1-26-4-47t-11-41t-16-39t-23-42l-266 121l-266-121q-15 24-24 43t-16 38t-9 40t-4 49l319 160z" />
                                </svg>
                            </div>
                            <div class="text_part">
                                <h5 class="content_title_mb">Educación y<br /> recursos financieros.</h5>
                                <p>Proporcionamos a nuestros clientes una amplia gama de recursos educativos para
                                    fomentar una comprensión más profunda de los mercados financieros.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- On Time End -->
	
	
	<!-- Area de colaboradores Inicio -->   
	<div class="title_area title_mb">
        <h2 class="service_title" style="text-align: center;">Colaboradores</h2>
	</div>
	
	 <section class="full-width-gallery">
        <a href="https://www.dgtalit.es" target="_blank">
            <img src="http://www.gfcredit.es/wp-content/uploads/2024/11/Captura-de-Pantalla-2024-11-13-a-las-15.30.45.png" alt="Imagen 1">
        </a>
        <a href="https://www.abanca.com/es/" target="_blank">
            <img src="http://www.gfcredit.es/wp-content/uploads/2024/11/Captura-de-Pantalla-2024-11-13-a-las-15.29.27.png" alt="Imagen 2">
        </a>
        <a href="https://www.caixabank.es/particular/home/particulares_es.html" target="_blank">
            <img src="http://www.gfcredit.es/wp-content/uploads/2024/11/Captura-de-Pantalla-2024-11-13-a-las-15.27.40.png" alt="Imagen 3">
        </a>
        <a href="https://portal.kutxabank.es/cs/Satellite/kb/es/particulares" target="_blank">
            <img src="http://www.gfcredit.es/wp-content/uploads/2024/11/Captura-de-Pantalla-2024-11-13-a-las-15.24.05.png" alt="Imagen 4">
        </a>
    </section>
	
	<!-- Area de colaboradores Final-->
	
	
    <!-- Services Area Start -->
    <section class="services_area section_pyDown" id="service">
        <div class="section-layout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title_area title_mb">
                            <h2 class="service_title">Servicios</h2>
                            <p>Especializados en</p>
                        </div>

                        <div class="services">

                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="part">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                            viewBox="0 0 24 24">
                                            <path fill="#4f46e5"
                                                d="M17 9h2V7h-2v2Zm0 4h2v-2h-2v2Zm0 4h2v-2h-2v2Zm0 4v-2h4V5h-9v1.4l-2-1.45V3h13v18h-6ZM1 21V11l7-5l7 5v10H9v-5H7v5H1Zm2-2h2v-5h6v5h2v-7L8 8.45L3 12v7Zm14-9Zm-6 9v-5H5v5v-5h6v5Z" />
                                        </svg>
                                        <div class="text_part">
                                            <h3 class="part_title">Hipotecas</h3>
                                            <p>
                                                Encontramos la hipoteca que mejor se adapta a tus
                                                necesidades y presupuesto.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="part">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                            viewBox="0 0 24 24">
                                            <g fill="none" stroke="#4f46e5" stroke-width="1.5">
                                                <path
                                                    d="M2 14c0-3.771 0-5.657 1.172-6.828C4.343 6 6.229 6 10 6h4c3.771 0 5.657 0 6.828 1.172C22 8.343 22 10.229 22 14c0 3.771 0 5.657-1.172 6.828C19.657 22 17.771 22 14 22h-4c-3.771 0-5.657 0-6.828-1.172C2 19.657 2 17.771 2 14Zm14-8c0-1.886 0-2.828-.586-3.414C14.828 2 13.886 2 12 2c-1.886 0-2.828 0-3.414.586C8 3.172 8 4.114 8 6" />
                                                <path stroke-linecap="round"
                                                    d="M12 17.333c1.105 0 2-.746 2-1.666c0-.92-.895-1.667-2-1.667s-2-.746-2-1.667c0-.92.895-1.666 2-1.666m0 6.666c-1.105 0-2-.746-2-1.666m2 1.666V18m0-8v.667m0 0c1.105 0 2 .746 2 1.666" />
                                            </g>
                                        </svg>
                                        <div class="text_part">
                                            <h3 class="part_title">Planificación financiera</h3>
                                            <p>
                                                Te ayudamos a alcanzar tus objetivos financieros, sea cual sea tu
                                                situación.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="part">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                            viewBox="0 0 32 32">
                                            <path fill="#4f46e5"
                                                d="M18.57 28C17.897 26.725 16 22.226 16 12v-.131l1.117.744A6.461 6.461 0 0 1 20 18h2a8.457 8.457 0 0 0-3.773-7.05L16.803 10h1.53a7.04 7.04 0 0 1 4.2 1.4l1.867 1.4l1.2-1.6l-1.867-1.4a9.06 9.06 0 0 0-5.4-1.8h-1.216A7.03 7.03 0 0 1 22 6h2V4h-2a9.035 9.035 0 0 0-7 3.364A9.035 9.035 0 0 0 8 4H6v2h2a7.03 7.03 0 0 1 4.883 2h-1.216a9.06 9.06 0 0 0-5.4 1.8L4.4 11.2l1.2 1.6l1.867-1.4a7.04 7.04 0 0 1 4.2-1.4h1.53l-1.423.95A8.457 8.457 0 0 0 8 18h2a6.461 6.461 0 0 1 2.883-5.387L14 11.87V12c0 8.944 1.412 13.765 2.361 16H2v2h28v-2Z" />
                                        </svg>
                                        <div class="text_part">
                                            <h3 class="part_title">Jubilación</h3>
                                            <p>
                                                Planificamos tu jubilación para que tengas una renta
                                                suficiente en la edad dorada.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="part">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                            viewBox="0 0 24 24">
                                            <path fill="#4f46e5"
                                                d="M17 9h2V7h-2v2Zm0 4h2v-2h-2v2Zm0 4h2v-2h-2v2Zm0 4v-2h4V5h-9v1.4l-2-1.45V3h13v18h-6ZM1 21V11l7-5l7 5v10H9v-5H7v5H1Zm2-2h2v-5h6v5h2v-7L8 8.45L3 12v7Zm14-9Zm-6 9v-5H5v5v-5h6v5Z" />
                                        </svg>
                                        <div class="text_part">
                                            <h3 class="part_title">Hipotecas no residentes</h3>
                                            <p>
                                                Te ayudamos a obtener una hipoteca en España, incluso si no eres
                                                residente.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="part">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                            viewBox="0 0 24 24">
                                            <path fill="#4f46e5"
                                                d="M11.875 20q.1 0 .2-.05t.15-.1l8.2-8.2q.3-.3.438-.675t.137-.75q0-.4-.138-.763t-.437-.637l-4.25-4.25q-.275-.3-.638-.438T14.776 4q-.375 0-.75.138t-.675.437l-.275.275l1.85 1.875q.375.35.55.8t.175.95q0 1.05-.712 1.763t-1.763.712q-.5 0-.963-.175t-.812-.525L9.525 8.4L5.15 12.775q-.075.075-.113.163T5 13.124q0 .2.15.363t.35.162q.1 0 .2-.05t.15-.1l2.7-2.7q.275-.275.688-.288t.712.288q.275.275.275.7t-.275.7l-2.675 2.7q-.075.075-.113.163t-.037.187q0 .2.15.35t.35.15q.1 0 .2-.05t.15-.1l2.7-2.675q.275-.275.688-.288t.712.288q.275.275.275.7t-.275.7l-2.675 2.7q-.075.05-.113.15t-.037.2q0 .2.15.35t.35.15q.1 0 .188-.038t.162-.112l2.7-2.675q.275-.275.688-.288t.712.288q.275.275.275.7t-.275.7l-2.7 2.7q-.075.075-.113.163t-.037.187q0 .2.163.35t.362.15Zm-.025 2q-.925 0-1.638-.613t-.837-1.537q-.85-.125-1.425-.7t-.7-1.425q-.85-.125-1.413-.713T5.15 15.6q-.95-.125-1.55-.825t-.6-1.65q0-.5.188-.962t.537-.813L8.1 6.975Q8.675 6.4 9.513 6.4t1.412.575L12.8 8.85q.05.075.15.113t.2.037q.225 0 .375-.137t.15-.363q0-.1-.038-.2t-.112-.15L9.95 4.575q-.275-.3-.637-.438T8.55 4q-.375 0-.75.138t-.675.437L3.6 8.125q-.225.225-.375.525t-.2.6q-.05.3 0 .613t.2.587l-1.45 1.45q-.425-.575-.625-1.262T1 9.25q.05-.7.35-1.363T2.175 6.7L5.7 3.175Q6.3 2.6 7.038 2.3T8.55 2q.775 0 1.513.3t1.312.875l.275.275l.275-.275q.6-.575 1.338-.875t1.512-.3q.775 0 1.513.3t1.312.875L21.825 7.4q.575.575.875 1.325t.3 1.525q0 .775-.3 1.513t-.875 1.312l-8.2 8.175q-.35.35-.813.55t-.962.2ZM9.4 8Z" />
                                        </svg>
                                        <div class="text_part">
                                            <h3 class="part_title">Hipotecas o compras en país de origen</h3>
                                            <p>
                                                Te ayudamos a comprar una vivienda en tu país de origen, incluso si
                                                estás viviendo en España.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="part">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                            viewBox="0 0 16 16">
                                            <g fill="#4f46e5">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                                <path
                                                    d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                            </g>
                                        </svg>
                                        <div class="text_part">
                                            <h3 class="part_title">Líneas de crédito</h3>
                                            <p>
                                                Gestionamos y obtenemos las líneas de crédito que necesitas para tu
                                                negocio.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Area End -->

    <!-- countdown Area Start -->
    <div class="countdown">
        <div class="bg_countdown">
            <img src="http://www.gfcredit.es/wp-content/uploads/2024/08/Screenshot_1.png"
                alt="" class="rellax" data-rellax-speed="-6" data-rellax-tablet-speed="-2" data-rellax-mobile-speed="-1"
                data-rellax-xs-speed="0" data-rellax-percentage="0.7">
        </div>
        <div class="section-layout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="works section_py">
                            <div class="part">
                                <div class="text_part">
                                    <p class="xxxlarge mb_rem">+100</p>
                                    <p class="slarge">Clientes satisfechos</p>
                                </div>
                            </div>
                            <div class="part">
                                <div class="text_part">
                                    <p class="xxxlarge mb_rem">+200</p>
                                    <p class="slarge">Gestiones realizadas</p>
                                </div>
                            </div>
                            <div class="part">
                                <div class="text_part">
                                    <p class="xxxlarge mb_rem">+15</p>
                                    <p class="slarge">Años de experiencia</p>
                                </div>
                            </div>
                            <div class="part">
                                <div class="text_part">
                                    <p class="xxxlarge mb_rem">9.6</p>
                                    <p class="slarge">Valoración de nuestros clientes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- countdown Area End -->
    <!-- Área de Consultoría Inicio -->
    <section class="consulting section_padding" id="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="consulting_text">
                        <h3 class="section_title_mb xx_large">Ofrecemos servicios de alta calidad y estamos en constante
                            crecimiento.</h3>
                        <p class="mb_2UpRem">Brindamos servicios de alta calidad y estamos en constante crecimiento.
                            Excelencia y compromiso en cada proyecto. Nos esforzamos en proporcionar soluciones
                            innovadoras y efectivas para tu negocio o para personas físicas. La confianza y satisfacción
                            de nuestros clientes
                            nos avalan.</p>
						<br>
						<p class="mb_2UpRem">
							Nuestros horarios<br><br>
							09:00  – 13:00 <br>
							16:00  – 20:00 <br><br>
							Lunes – Viernes
						</p>
                        <div class="consulting_bottom">
                            <a href="tel:+34931701687">
                                <div class="left_text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32">
                                        <g fill="none" stroke="#4f46e5" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2">
                                            <path
                                                d="M3 12c0-7 7-7 13-7s13 0 13 7c0 8-7-1-7-1H10s-7 9-7 1Zm8 2s-5 5-5 14h20c0-9-5-14-5-14H11Z" />
                                            <circle cx="16" cy="21" r="4" />
                                        </g>
                                    </svg>
                                    <p class="text large">+34 931701687</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
    <div class="consulting_contact">
        <p class="color">OBTÉN MÁS INFORMACIÓN</p>
        <p class="mb_3halfRem">¿Quieres que te llamemos? Rellena el formulario y nos pondremos en contacto contigo lo antes posible</p>
<form id="frmContactus" class="contact_form">
            <div class="in-box">
                <input type="text" class="form-control" name="name" id="name" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="in-box">
                <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu correo electrónico" required>
            </div>
            <div class="in-box">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Ingresa tu teléfono" required>
            </div>
            <div class="in-box">
                <select class="form-select form-control" name="select_menu" id="select_menu" aria-label="Ejemplo de selección predeterminada" required>
                    <option selected disabled>Selecciona una opción</option>
                    <option value="Hipotecas">Hipotecas</option>
                    <option value="Capital privado">Capital privado</option>
                    <option value="Planificación financiera">Planificación financiera</option>
                    <option value="Jubilación">Jubilación</option>
                    <option value="Hipotecas no residentes">Hipotecas no residentes</option>
                    <option value="Hipotecas o compras en país de origen">Hipotecas o compras en país de origen</option>
                    <option value="Líneas de crédito">Líneas de crédito</option>
                </select>
            </div>
            <div class="g-recaptcha mb_1UpRem" id="reCaptcha" data-sitekey="6LctligpAAAAAJ4lR3y0rsVtkuzgdgUoBAigzoZF"></div>
            <span class="message-error error"></span>
            <span id="msg"></span>
            <button type="submit" class="btn-theme large" name="submit" id="submit">Enviar Mensaje</button>
        </form>
    </div>
</div>

            </div>
        </div>
    </section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#frmContactus').submit(function(e) {
        e.preventDefault(); // Evitar que el formulario se envíe de forma convencional

        $.ajax({
            url: '/wp-admin/admin-ajax.php', // URL del archivo admin-ajax.php
            type: 'POST',
            data: $(this).serialize() + '&action=enviar_formulario_contacto', // Serializar los datos del formulario y añadir la acción
            success: function(response) {
                // Mostrar la respuesta del servidor en un alert
                alert(response); // Muestra un cuadro de alerta con la respuesta
            },
            error: function(xhr, status, error) {
                // Mostrar el error en un alert
                alert('Error al enviar el formulario: ' + xhr.responseText); // Alerta si hay un error en la solicitud
            }
        });
    });
});
</script>


    <!-- Área de Consultoría Fin -->
    <a href="#" class="scrollToTop"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 32 32">
            <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M30 20L16 8L2 20" />
        </svg></a>

    <!-- Script -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- plugins -->
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/rellax.min.js"></script>
    <script src="assets/js/countMe.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- custom -->
   <!-- <script src="assets/js/custom.js"></script> -->
	<script>
		window.addEventListener('scroll', function() {
    var header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.style.backgroundColor = '#20163d'; // Fondo morado con transparencia
    } else {
        header.style.backgroundColor = 'transparent';
    }
});

	</script>
</body>

</html>

<?php get_footer(); ?>
