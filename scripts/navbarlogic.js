var recargada = false;
        
        // Función para recargar la página solo una vez
        function recargarUnaVez() {
            if (!recargada) {
               console.log("recargado")
                window.location.reload(); // Recargar la página
                recargada = true; // Marcar como recargada
            }
        }
function abrir(){
   document.getElementById("open").style.display="none";
   document.getElementById("close").style.display="block";
   document.getElementById("menu-sm").classList.add("h-40");
   document.getElementById("nav-sm").classList.add("mb-40");
   document.getElementById("menu-sm").classList.remove("h-0");
}
function cerrar(){
    document.getElementById("open").style.display="block";
    document.getElementById("close").style.display="none";
    document.getElementById("menu-sm").classList.add("h-0");
   document.getElementById("menu-sm").classList.remove("h-40");
   document.getElementById("nav-sm").classList.remove("mb-40");
   console.log("cerrado")
 }
 function inicio(url){
   cerrar(url);
  
    window.location.href = url;
 }
 function nosotros(url){
   cerrar();

    window.location.href = url;
 }
 function contacto(url){
  
    window.location.href = url;
 }
