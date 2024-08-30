<?php
require_once(__DIR__ . '/layout/head.html');
require_once(__DIR__ . '/variables.php');
?>
<h1 class="bg-success mx-auto p-2">
    Hello <?= $_ENV['NOMBRE'] ?>
</h1>

<div class="mx-auto p-2">
    <p class="">
        Tu edad es <?= $_ENV['EDAD'] ?>
    </p>
</div>

<form action="getExcel.php" method="GET">
    <input type="submit" value="Descargar Excel">
</form>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi vero perferendis voluptas iusto, blanditiis at in, maxime debitis reiciendis, vel a harum distinctio expedita recusandae aliquid accusantium deleniti doloribus asperiores.</p>

<?php
require_once(__DIR__ . '/layout/footer.html')
?>