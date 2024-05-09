<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NART | contacto</title>
    <link href="../output.css" rel="stylesheet">
    <link rel="icon" href="../recursos/iconoNART.ico" type="image/x-icon">
    <script src="../scripts/navbarlogic.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="h-screen flex flex-col font-helvetica bg-[#EFEFEF]">
    <?php 
    include("../componentes/navbar.php");
    $n3=true;
    $n1 = null;
    $n2 = null;
    navbar("../", "../nosotros/", "./",$n1,$n2,$n3);
    ?>
    <main class="flex-grow w-5/6 mx-auto flex py-5 md:py-0 ">
        <div class="md:flex w-full items-center">
            <div class="flex py-5 md:py-0 md:w-1/2">
                <div class="">
                  
                    <p class="font-sans text-2xl">Creemos algo genial juntos <br> Contáctanos!</p>
                </div>
            </div>
            <div class="flex md:w-1/2 md:items-center">
            <div class="md:w-3/4 w-full md:mx-auto">
                <form action="" method="post" class="font-sans w-full">
                    <div>
                        <label for="name">Nombre</label>
                        <input id="name" type="text" class="border rounded w-full my-2 eading-tight focus:outline-none focus:shadow-outline px-1 py-1" name="name" required>
                        </div>
                    <div>
                        <label for="email">Email</label>
                        <input id="email" type="text" class="border rounded w-full my-2 eading-tight focus:outline-none focus:shadow-outline px-1 py-1" name="email" required>
                    </div>
                    <div class="grid">
                        <label for="msg" class="md:full">Mensaje</label >
                        <textarea id="msg" cols="20" rows="10" class="border rounded eading-tight focus:outline-none focus:shadow-outline px-1 py-1" name="msg" required></textarea>
                    </div>
                    <div class="pt-5">
                        <button type="submit"name="enviar" class="bg-[#003258] hover:bg-[#00A4C3] hover:text-black py-2 px-5 text-white font-sans rounded">Enviar</button>
                    </div>
                </form>
    <?php
    include("../componentes/Enviarcorreos.php");
    ?>            
            </div>
            </div>
            
        </div>
    </main>
    <?php 

    include("../componentes/footer.php");
    footer();
    ?>
     <a href="https://wa.me/5493794202226" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</body>
</html>