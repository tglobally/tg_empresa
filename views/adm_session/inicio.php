<?php /** @var controllers\controlador_adm_session $controlador */

use config\views;
$url_assets = (new views())->url_assets;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cont_text_inicio">
                <h1 class="h-side-title page-title page-title-big text-color-primary">
                    <?php echo $controlador->nombre_usuario; ?>
                </h1>
                <h1 class="h-side-title page-title text-color-primary">Da click en la sección que deseas utilizar</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($controlador->links_catalogos as $indice => $valor): ?>
                <div class="col-sm-2">
                    <?php echo $valor["data_link"];?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>