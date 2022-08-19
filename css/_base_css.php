<?php
/** @var string $url_template */
use config\generales;
include 'url_template.php';
$path_base = (new generales())->path_base;
include $path_base.'css/base.php';
