// Get the modal
var modalAviso = document.getElementById("privacyModal");
var btnTrabajo = document.getElementById("btnTrabajo");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeAviso")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modalAviso.style.display = "block";
    btnTrabajo.style.display= "none";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modalAviso.style.display = "none";
    btnTrabajo.style.display= "block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modalAviso.style.display = "none";
    btnTrabajo.style.display= "block";
  }
}
