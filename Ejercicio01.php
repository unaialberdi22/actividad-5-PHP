/Ejercicio 01:
Crear un formulario de login y visulizar la información en pantalla
Los campos del formulario serán usuario y contrasena
El formulario enviará la información por POST.<br>
Al principio hacer la prueba con GET para ver cómo se envían los parámetros.<br>
Página de login ejercicio01Login.html<br>
PHP del servidor ejercicio 01 Login.php<br><br>

Welcome 
<?php echo $_POST["nombre"]; ?><br>
Your email address is: 
<?php echo $_POST["email"]; ?>



