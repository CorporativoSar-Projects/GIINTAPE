document.addEventListener("DOMContentLoaded", function () {  

    function aplicarColores() {
        const celdas = document.querySelectorAll(".PreciosMarketing td"); 
        celdas.forEach(celda => {
          const texto = celda.textContent.trim();
          if (texto === "✔") {
            celda.style.color = "green";
            celda.style.fontWeight = "bold";
          } else if (texto === "✘") {
            celda.style.color = "red";
            celda.style.fontWeight = "bold";
          }
        });
      }
      


      aplicarColores()();
});
