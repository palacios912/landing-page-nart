<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NART | inicio</title>
    <link href="./output.css" rel="stylesheet">
    <link rel="icon" href="./recursos/iconoNART.ico" type="image/x-icon">
    <link href="./fix.css" rel="stylesheet">
    <script src="./scripts/navbarlogic.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="h-full flex  flex-col font-helvetica bg-[#EFEFEF]">
    <?php
    include("./componentes/navbar.php");
    $n1=true;
    $n2 = null;
    $n3 = null;
    navbar("../", "./nosotros/", "./contacto/",$n1,$n2,$n3);
    
    ?>
    

    <main class="pb-20 flex-grow w-full ">

        <div class="w-full relative">
            <!--principal4.jpg-->
            <img src="./recursos/bannerprincipal3.jpg" alt="" class="w-full filter brightness-100 hidden md-block">
            <img src="./recursos/bannerprincipal2.jpg" alt="" class="w-full filter brightness-100 block md-hidden">
            <p class="absolute inset-0 text-white text-3xl bg-[#003258]/20 flex items-center justify-center font-bold"></p>
        </div>
        <div class="bg-white py-3 h-1/2">
            <p class="text-2xl text-center md:flex mx-auto md:w-4/6 px-5 md:px-0 py-10 font-sans">
                Somos una empresa de consultoría y soporte para la gestión de organizaciones públicas y privadas, que tiene como finalidad generar una visión clara del futuro apoyada en la implementación de estrategias centradas en los negocios, el desarrollo organizacional, el capital humano, la innovación y la transparencia. Brindamos apoyo a equipos directivos para mejorar los procesos de diseño, definición y concreción de políticas y programas.
            </p>
            <br>

        </div>
        <section class="product bg-[#003258] text-white font-sans">
            <h2 class="product-category text-center">SOLUCIONES Y SERVICIOS</h2>
            <button class="pre-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </button>
            <button class="nxt-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </button>
            <div class="product-container">
                <?php
                $imagenes = array(
                    "consultoria.jpg",
                    "reclutamiento.jpg",
                    "coach.jpg",
                    "gerente.jpg",
                    "vinculacion.jpg",
                    "analisis.jpg",
                    "servicios.jpg"
                );

                $titulos = array(
                    "Consultoría Organizacional",
                    "Selección de Talentos",
                    "Coaching y Desarrollo de Habilidades Gerenciales",
                    "Gerenciamiento Externo de RRHH",
                    "Vinculación Público-Privada",
                    "Análisis Económico-Financiero",
                    "Otros Servicios",
                );
                $descripciones =array(
                    "Nos enfocamos en ayudar a organizaciones a mejorar su rendimiento, eficiencia y competitividad a través de la optimización de sus procesos, estructuras y recursos.",
                    "Nos centramos en identificar, reclutar y evaluar a individuos con habilidades y experiencia específicas que se ajusten a las necesidades y requisitos de la organización.",
                    "Nos enfocamos en mejorar las capacidades de liderazgo, gestión y toma de decisiones de los líderes y ejecutivos de una organización.",
                    "Nos encargamos de funciones como reclutamiento, selección, contratación, administración de nómina, capacitación, evaluación del desempeño y gestión de beneficios laborales.",
                    "Buscamos ser un nexo para establecer y fortalecer relaciones colaborativas entre el sector público y el sector privado con el fin de promover el desarrollo económico y la generación de empleo.",
                    "Este análisis incluye la revisión de estados financieros, ratios financieros, flujos de efectivo, rentabilidad, liquidez y solvencia, entre otros aspectos relevantes.",
                    "Comunicación Corporativa <br>
                    Soporte Legal <br>
                    Asesoramiento para Minería e Industria
                    ",
                );
                for ($i = 0; $i < 7; $i++) {
                    echo ('
                        <div class="product-card ">
                            <div class="product-image mx-auto">
                            <img src="./recursos/servicios/'.$imagenes[$i].'" class="product-thumb rounded-full" alt="">
                         </div>
                         <div class="product-info">
                             <h2 class="product-brand text-center">'.$titulos[$i].'</h2>
                             <p class="product-short-description text-center pt-1">
                             '.$descripciones[$i].'
                             </p>

                    </div>
                </div>
                        ');
                }

                ?>


            </div>
        </section>

        </div>
        </div>
        <div class="slider w-5/6 md:w-2/3 h-auto m-auto overflow-hidden">
            <p class="text-center text-3xl py-20">EMPRESAS QUE CONFÍAN EN NOSOTROS</p>
            <div class="slider-track">
                <?php
                $empresas = array(0 => "Puerto Rico", 1 => "Puerto Rico", 2 => "Puerto Rico", 3 => "Argentina", 4 => "Puerto Rico", 5 => "Puerto Rico", 6 => "Puerto Rico", 7 => "Chile", 8 => "Argentina", 9 => "Republica Dominicana");
                for ($i = 0; $i < 10; $i++) {
                    echo ("
                <div class='slide p-3 grid grid-cols-1'>
                        <div class='relative items-center justify-center flex'>
                        <img src='./recursos/Logo-empresas/" . $i + 1 . ".png' alt=''class='self-end' />
                        </div>
                        <div class='text-center font-sans self-end'>" . $empresas[$i] . "</div>
                 </div>
                ");
                }
                for ($i = 0; $i < 10; $i++) {
                    echo ("
                <div class='slide p-3 grid grid-cols-1'>
                    <div class='relative items-center justify-center flex'>
                    <img src='./recursos/Logo-empresas/" . $i + 1 . ".png' alt='' class='self-end'/>
                    </div>
                    <div class='text-center font-sans self-end'>" . $empresas[$i] . "</div>
                </div>
               
                ");
                }
                ?>
            </div>
        </div>
    </main>
    
    <?php
    include("./componentes/footer.php");
    footer();
    ?>
    <a href="https://wa.me/5493794202226" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</body>
<script src="./scripts/productslogic.js"></script>

</html>