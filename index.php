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
<?php
require_once(__DIR__ . '/layout/footer.html')
?>