<?php use config\views; ?>

<div class="col-md-3 secciones">
    <div class="col-md-12 int_secciones ">
        <div class="col-md-4 seccion">
            <img src="<?php echo (new views())->url_assets.'img/stepper/1.svg'?>" class="img-seccion">
        </div>
        <div class="col-md-8">
            <h3>Registro Patronal</h3>
            <?php include "templates/org_sucursal/_base/links/modifica.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/org_sucursal/_base/buttons/2.azul.registro_patronal.php"; ?>
        </div>
    </div>
</div>