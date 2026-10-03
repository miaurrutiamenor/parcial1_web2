<?php require_once('../componentes/header.php'); ?>

<h2>Formulario de Contacto</h2>
<p>Completa tus datos para unirte a la Liga o enviarnos tu mensaje:</p>

<form action="procesar_contacto.php" method="post" enctype="multipart/form-data" class="formulario">
    <div class="campo">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
    </div>

    <div class="campo">
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div class="campo">
        <label for="foto">Subi tu fanart:</label>
        <input type="file" name="foto" id="foto" required>
    </div>

    <div class="campo">
        <label for="ex_favorito">¿Cuál es tu Ex Malvado favorito?</label>
        <select id="ex_favorito" name="ex_favorito">
            <option value="Matthew Patel">Matthew Patel</option>
            <option value="Lucas Lee">Lucas Lee</option>
            <option value="Todd Ingram">Todd Ingram</option>
            <option value="Roxie Richter">Roxie Richter</option>
            <option value="Kyle y Ken Katayanagi">Kyle y Ken Katayanagi</option>
            <option value="Gideon Graves">Gideon Graves</option>
        </select>
    </div>

    <div class="campo">
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
    </div>

    <button type="submit" class="btn-enviar">Enviar Datos</button>
</form>

<?php require_once('../componentes/footer.php'); ?>