<?php /** @var controllers\controlador_adm_session $controlador */

use config\views;
$url_assets = (new views())->url_assets;
?>

<?php echo $controlador->container_text_inicio; ?>

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