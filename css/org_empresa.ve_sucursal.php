<?php
/** @var string $url_template */
use config\generales;
$path_base = (new generales())->path_base;
include $path_base.'css/_base_css.php';
?>
<style>
    @import "<?php echo $url_template; ?>fonts.css";
</style>

