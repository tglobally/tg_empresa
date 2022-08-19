<?php
/** @var string $url_template */
use config\generales;
include 'url_template.php';
$path_base = (new generales())->path_base;
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