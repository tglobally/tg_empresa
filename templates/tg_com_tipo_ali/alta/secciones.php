<?php
use config\views;
$url_assets = (new views())->url_assets; ?>
<div class="col-md-3 secciones">

    <div class="col-md-12 int_secciones ">
        <div class="col-md-4 seccion">
            <img src="<?php echo $url_assets."img/numeros/1.svg"; ?>" class="img-seccion">
        </div>
        <div class="col-md-8">
            <h3>Alta de Sucursal</h3>

            <button class="btn btn-default menu-lateral menu-lateral-active">
                <img src="img/1.azul.svg" class="numero"> <span class="texto-menu-lateral">Generales</span>

            </button>
            <hr class="hr-menu-lateral">
            <button class="btn btn-default menu-lateral">
                <img src="img/2.gris.svg" class="numero"> <span class="texto-menu-lateral">Ubicacion</span>

            </button>

        </div>

    </div>
</div>
