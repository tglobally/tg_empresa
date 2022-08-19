<?php
use config\generales;
$url_base = (new generales())->url_base;
?>
<style>
    @import "<?php echo $url_base; ?>css/base.css";
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