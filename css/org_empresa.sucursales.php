<?php
use config\generales;
$path_base = (new generales())->path_base;
$url_base = (new generales())->url_base;
include $path_base.'css/base.php'; ?>
<style>
    @import "<?php echo $url_base; ?>css/fonts.css";
</style>


<style>
.footable.table th, .footable-details.table th {
    font-family: Helvetica;
}
.footable.table td, .footable-details.table td {
    font-family: Helvetica;
}
.footable .footable-filtering .input-group .form-control:last-child, .footable .footable-filtering .input-group-addon:last-child, .footable .footable-filtering .input-group-btn:last-child > .btn, .footable .footable-filtering .input-group-btn:last-child > .btn-group > .btn, .footable .footable-filtering .input-group-btn:last-child > .dropdown-toggle, .footable .footable-filtering .input-group-btn:first-child > .btn:not(:first-child), .footable .footable-filtering .input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
    background-color: #0B0595;
    border: 1px solid #0B0595
}
</style>