

<h1>Listado de notas</h1>
<?php While($nota = $notas->fetch_object()) : ?>
    <?= $nota->titulo?> - <?= $nota->fecha?><br/>
<?php endwhile; ?>
