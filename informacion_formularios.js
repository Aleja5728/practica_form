
// Tarjeta de información
var puntos = document.querySelector(".puntos");
var boton_informe = document.querySelector(".boton_informe");
var tarjeta_informacion = document.querySelector(".tarjeta_informacion");
puntos.addEventListener("click", (e) => {
    e.preventDefault;
    boton_informe.style.display = "block";
})
tarjeta_informacion.addEventListener("mouseleave", (e) => {
    e.preventDefault;
    boton_informe.style.display = "none";
});
