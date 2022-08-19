<?php
use config\generales;
use config\views;

$url_base = (new generales())->url_base;
$url_template = (new views())->url_assets;
$url_template .= 'css/';

?>
<style>
    @import "<?php echo $url_base; ?>css/secciones.css";
    @import "<?php echo $url_base; ?>css/forms.css";
    @import "<?php echo $url_template; ?>botones.css";
</style>
