<?php
/** @var string $url_template */
use config\views;

$ruta_template_base = (new views())->ruta_template_base;
include $ruta_template_base.'assets/css/_base_css.php';
?>
<style>
    @import "<?php echo $url_template; ?>fonts.css";
</style>
