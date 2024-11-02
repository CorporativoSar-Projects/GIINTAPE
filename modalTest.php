<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Modal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="e/promo.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
	#id01{
		display: block !important;
		margin-top: 60px !important;
	}
	.w3-container{
		background-color: #E0FFDC !important;
	}
</style>
<body>
	<!-- Modal -->
   <div id="id01" class="w3-modal">
      <div class="w3-modal-content">
         <div class="w3-container">
            <!-- Para minimizar ventana:
            	<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>-->
            <span onclick="window.location = 'contact.html';" class="w3-button w3-display-topright">&times;</span>
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" style="color:green !important;" width="40" height="40" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
      		<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    		</svg>
    		<h4 id="alertText">Recibimos tus datos y pronto te escribiremos. Revisa tu bandeja de correo, spam o whatsApp.</h4>
    		<br>
         </div>
      </div>
   </div>
</body>
</html>