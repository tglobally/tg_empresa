<?php
use config\generales;
use config\views;

$path_base = (new generales())->path_base;
$url_template = (new views())->url_assets;
$url_template .= 'css/';
include $path_base.'css/base.php';
?>
<style>
    @import "<?php echo $url_template; ?>fonts.css";
</style>

<style>
.label-alerta-oculto {
    display: none;
}

.label-alerta {
    display: block;
    color: red;
}
</style>