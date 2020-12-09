<form method="post"
<?php
action="pagina2.php" >
$nombre = $_POST["nombre"];
Por favor, envía la newsletter a: <br
$apellido = $_POST["apellido"];
/>
$email = $_POST["email"];
Tu nombre: <input type="text"
echo "Hola " . $nombre . " " .
name="nombre" /><br />
$apellido . ", <br />
Tu apellido: <input type="text"
Te has registrado con el siguiente
name="apellido" /><br />
correo electrónico: " . $email .
Tu correo electrónico: <input
".";
?>
type="text" name="email" /><br />
<input type="submit" value="Enviar
formulario" />
</form>
