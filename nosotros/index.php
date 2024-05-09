<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NART | nosotros</title>
    <link href="../output.css" rel="stylesheet">
    <link rel="icon" href="../recursos/iconoNART.ico" type="image/x-icon">
    <script src="../scripts/navbarlogic.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="h-full flex flex-col font-helvetica bg-[#EFEFEF]">
    <?php
    include("../componentes/navbar.php");
    $n1=null;
    $n2=true;
    $n3=null;
    navbar("../", "", "../contacto/",$n1,$n2,$n3);
    ?>

    <main class="flex-grow md:w-5/6 w-full mx-auto ">
        <div class="py-10 ">
            <!--<img src="./recursos/nart-logo-alt.jpeg" alt="" class="h-52 mx-auto">-->
            <h1 class="text-3xl text-center mt-10 font-medium font-sans">¿QUIÉNES SOMOS?</h1>
        </div>
        <div class="font-sans text-justify">
            <div class="pb-10 md:px-0 px-10">

                <p>En NART estamos comprometidos a ofrecer soluciones estratégicas innovadoras y personalizadas a nuestros clientes.
                    Nuestro equipo está compuesto por profesionales altamente calificados y apasionados por el éxito organizacional.
                    Con una combinación única de experiencia, habilidades y perspectivas, estamos aquí para guiarlo en cada paso
                    del camino hacia el crecimiento y la excelencia. <br><br>
                    Nuestro equipo de consultores está formado por expertos en diversas áreas de negocios, incluidas estrategia,
                    capital humano, operaciones y finanzas. Estamos dedicados a comprender las necesidades únicas de cada cliente y a
                    desarrollar soluciones a medida que impulsen el éxito a largo plazo.
                </p>
            </div>
             <h1 class="text-3xl mb-5 font-medium text-center">DIRECTOR</h1>
            <div class="md:flex">
                <div class="md:flex">
                <div class="md:w-1/5 w-2/4 ps-5 flex items-center justify-center mx-auto">
                    <div>
                        <img src="./recursos/director.jpeg" alt="" class="rounded-full">
                        <div class="pt-1">
                            <a href="https://www.linkedin.com/in/nicolasartigue/" target="_blank" class="flex items-center justify-center">
                                <img src="../recursos/icons-linkedin2.png" alt="" class="w-[20px] h-[20px]">
                                <p class="ps-1">Nicolás Artigue</p>
                            </a>
                        </div>
                    </div>
                </div>
               
                <div class="md:w-4/5 md:ms-10 flex items-center px-10 md:px-0 pt-10">
                    <div>
                        <h1 class="text-3xl mb-5 font-medium text-center block md:hidden"></h1>
                        <p>Ejecutivo de RRHH y Estrategia Empresarial, cuenta con sólidos conocimientos adquiridos en
                            compañías multinacionales sobre el mercado regional y sus leyes laborales, así como las mejores
                            prácticas en gestión de Capital Humano para una amplia gama de países, incluidos Chile, Argentina,
                            Uruguay, Perú, México, Brasil, Puerto Rico, República Dominicana, entre otros. Es Licenciado en
                            Dirección de RRHH egresado de la Escuela Argentina de Negocios, con posgrados en Administración
                            de Negocios y Gestión del Cambio e Innovación Corporativa de la Universidad Adolfo Ibáñez (Chile).
                            Además, cuenta con una Certificación Internacional en Negocios, Relaciones Internacionales y
                            Política Económica otorgada por la London School of Economics and Political Science (Inglaterra).
                            Recientemente, fue seleccionado por el Gobierno de la Ciudad de Buenos Aires para realizar la
                            certificación ejecutiva en Trabajo del Futuro y Política Laboral en la Universidad Torcuato Di
                            Tella.
                        </p>
                    </div>

                </div>
                </div>
            </div>
          
            <!-- -->
            <section class="product bg-[#EFEFEF] mb-5 mt-5">
                <h2 class="product-category text-center">VALORES</h2>
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
                <div class="product-container overflow-y-hidden">
                    <div class="product-card ">
                        <div class="product-image mx-auto">
                            <img src="./recursos/excelencia.jpg" class="product-thumb rounded-full" alt="">
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand text-center">Excelencia</h2>
                            <p class="product-short-description text-center">Compromiso con la calidad en cada aspecto de nuestro trabajo y en la entrega de soluciones sobresalientes a nuestros clientes</p>
                            
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image mx-auto">
                            <img src="./recursos/integridad.jpg" class="product-thumb rounded-full" alt="">
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand text-center">Integridad</h2>
                            <p class="product-short-description text-center">Actuamos con honestidad, transparencia y ética en todas nuestras interacciones y decisiones.</p>
                            
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image mx-auto">
                            <img src="./recursos/colaboracion.jpg" class="product-thumb rounded-full" alt="">
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand text-center">Colaboración</h2>
                            <p class="product-short-description text-center">
                            Trabajamos en equipo con nuestros clientes y colegas para alcanzar objetivos comunes y generar resultados exitosos.
                            </p>
                            
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image mx-auto">
                            <img src="./recursos/innovacion.jpg" class="product-thumb rounded-full" alt="">
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand text-center">Innovación</h2>
                            <p class="product-short-description text-center">
                            Fomentamos la creatividad y la búsqueda de nuevas ideas y enfoques para abordar los desafíos organizacionales de manera innovadora.
                            </p>
                            
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image mx-auto">
                            <img src="./recursos/cliente.jpg" class="product-thumb rounded-full" alt="">
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand text-center">Orientación al Cliente</h2>
                            <p class="product-short-description text-center">
                            Nos comprometemos a comprender las necesidades y expectativas de nuestros clientes y a brindarles un servicio personalizado y de alta calidad.
                            </p>
                            
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image mx-auto">
                            <img src="./recursos/empoderamiento.jpg" class="product-thumb rounded-full" alt="">
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand text-center">Empoderamiento</h2>
                            <p class="product-short-description text-center">
                            Capacitamos a nuestros clientes para que tomen decisiones informadas y desarrollen habilidades que impulsen su éxito a largo plazo.
                            </p>
                            
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image mx-auto">
                            <img src="./recursos/adaptabilidad.jpg" class="product-thumb rounded-full" alt="">
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand text-center">Adaptabilidad</h2>
                            <p class="product-short-description text-center">
                            Nos adaptamos rápidamente a los cambios del mercado y a las necesidades de nuestros clientes para ofrecer soluciones relevantes y efectivas en todo momento.
                            </p>
                            
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image mx-auto">
                            <img src="./recursos/exito.jpg" class="product-thumb rounded-full" alt="">
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand text-center">Pasión por el éxito</h2>
                            <p class="product-short-description text-center">
                            Nos apasiona ver crecer a nuestros clientes y nos esforzamos por ser un catalizador para su éxito organizacional.
                            </p>
                            
                        </div>
                    </div>
                    
                    

                </div>
            </section>




            </div>
    </main>
    <?php
    include("../componentes/footer.php");
    footer();
    ?>
    <a href="https://wa.me/5493794202226" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</body>
<script src="../scripts/productslogic.js"></script>

</html>