<h1>Listado de usuarios</h1>
<?php While($usuario = $todos_los_usuarios->fetch_object()) : ?>
    <?= $usuario->email?> - <?= $usuario->fecha?><br/>
<?php endwhile; ?>