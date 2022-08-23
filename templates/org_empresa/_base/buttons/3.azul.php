<?php /** @var string $section seccion de controlador */ ?>
<?php $number = basename(__FILE__,'.php'); ?>
<button class="btn btn-default menu-lateral menu-lateral-active">
    <?php include "templates/$section/_base/buttons/_$number.php"; ?>
</button>
