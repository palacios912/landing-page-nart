<?php
function navbar($url1, $url2, $url3,$active1,$active2,$active3){
    $text = 'text-[#003258]';
    if($active1){
        $active1 = $text;
    }
    if($active2){
        $active2 = $text;
    }
    if($active3){
        $active3 = $text;
    }

    echo('<nav class="justify-between h-24 bg-white items-center ps-10 hidden md:flex shadow sticky top-0 absolute z-10">
    <div class="h-full"><img src="../recursos/NART-grande.jpeg" alt="" class="h-full"></div>
    <div class="flex text-xl h-full cursor-pointer ">
        <div class="h-full flex items-center '.$active1.' hover:text-[#00A4C3] px-4" onclick="inicio(\''.$url1.'\')">INICIO</div>
        <div class="h-full flex items-center '.$active2.' hover:text-[#00A4C3] px-4" onclick="nosotros(\''.$url2.'\')">NOSOTROS</div>
        <div class="h-full flex items-center '.$active3.' hover:text-[#00A4C3] px-4"onclick="contacto(\''.$url3.'\')">CONTACTO</div>
    </div>
</nav>
<nav class="block md:hidden h-24 shadow transition-height duration-500 ease-in-out bg-white" id="nav-sm">
    <div class="h-full flex justify-between px-5">
        <img src="../recursos/NART-grande.jpeg" alt="" class="h-full">
        <div class="flex justify-center items-center text-5xl pr-2">
            <button onclick="abrir()" class="focus:border border-gray-500 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="open" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg></button>
            <button onclick="cerrar()" class="focus:border border-gray-500 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="close" class="w-10 h-10 hidden">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                </svg>
                <button>
        </div>
    </div>
    <div class="h-0 w-full  bg-[#003258] overflow-hidden transition-height duration-500 ease-in-out text-white" id="menu-sm">
        <div class="hover:bg-[#00A4C3] py-4 ps-2 hover:text-black w-full cursor-pointer" onclick="inicio(\''.$url1.'\')">INICIO</div>
        <div class="hover:bg-[#00A4C3] py-4 ps-2 hover:text-black w-full cursor-pointer" onclick="nosotros(\''.$url2.'\')">NOSOTROS</div>
        <div class="hover:bg-[#00A4C3] py-4 ps-2 hover:text-black w-full cursor-pointer" onclick="contacto(\''.$url3.'\')">CONTACTO</div>

    </div>
</nav>');
}

?>