<?php
 var_dump($_GET);
 var_dump($_POST);
?>
<form method="POST">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre">
    </div>
    <div>
        <label>Apellido</label>
        <input type="text" name="apellido">
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email">
    </div>
    <div>
        <label>Contraseña</label>
        <input type="password" name="contraseña">
    </div>
    <button type="submit">Registrarse</button>
</form>