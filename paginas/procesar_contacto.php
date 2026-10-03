<?php require_once('../componentes/header.php'); ?>

<h2>¡Gracias por contactarnos!</h2>
<p>Hemos recibido la información de tu formulario correctamente:</p>

<div class="resumen-datos">
<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$ex_favorito = $_POST['ex_favorito'];
$mensaje = $_POST['mensaje'];
$foto = time() . ".jpg";

move_uploaded_file($_FILES['foto']['tmp_name'], "../archivos/$foto");

print "
    <p><strong>Nombre:</strong> $nombre</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Ex Favorito:</strong> $ex_favorito</p>
    <p><strong>Mensaje:</strong> $mensaje</p>
    <p><strong>Fanart enviado:</strong></p>
    <p><img src='../archivos/$foto' width='150' style='border-radius: 6px;'></p>
";
?>
</div>

<br>
<p><a href="index.php" style="color: #ffcc00;">&larr; Volver a la página principal</a></p>

<?php require_once('../componentes/footer.php'); ?>