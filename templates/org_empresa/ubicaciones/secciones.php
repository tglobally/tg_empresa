<?php /** @var controllers\controlador_org_empresa $controlador */ ?>
<div class="col-md-3 secciones">

    <div class="col-md-12 int_secciones ">
        <div class="col-md-4 seccion">
            <img src="img/1.svg" class="img-seccion">
        </div>
        <div class="col-md-8">
            <h3>Empresas</h3>
            <a href="index.php?seccion=org_empresa&accion=modifica&registro_id=<?php echo $controlador->registro_id; ?>&session_id=<?php echo $controlador->session_id; ?>">
            <button class="btn btn-default  menu-lateral">
                <img src="img/1.gris.svg" class="numero">
                <?php include "templates/org_empresa/_base/texto_menu_lateral/modifica.php"; ?>
            </button>
            </a>
            <hr class="hr-menu-lateral">

                <button class="btn btn-default menu-lateral menu-lateral-active">
                    <img src="img/2.azul.svg" class="numero">
                    <?php include "templates/org_empresa/_base/texto_menu_lateral/ubicacion.php"; ?>
                </button>

        </div>
    </div>
</div>
