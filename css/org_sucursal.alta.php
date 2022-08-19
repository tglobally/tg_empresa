<?php
use config\generales;
$path_base = (new generales())->path_base;
$url_base = (new generales())->url_base;
include $path_base.'css/base.php'; ?>
<style>
    @import "<?php echo $url_base; ?>css/fonts.css";
</style>

<style>
.cont_tabla_sucursal{
    margin-top: 20px;
}

.table-dark thead tr{
    background-color: #F1F2F6;
    font-family: Helvetica;
}

.table-dark thead tr th{
    font-family: Helvetica;
}

.table-dark thead tr td{
    font-family: Helvetica;
}


</style>