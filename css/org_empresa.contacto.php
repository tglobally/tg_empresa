<?php
use config\generales;
$path_base = (new generales())->path_base;
$url_base = (new generales())->url_base;
include $path_base.'css/base.php'; ?>
<style>
    @import "<?php echo $url_base; ?>css/fonts.css";
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