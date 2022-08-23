<?php
use config\views;
$number =  basename(__FILE__, ".php");
$url_assets = (new views())->url_assets; ?>
<img src="<?php echo $url_assets."img/numeros/$number.svg"; ?>" class="numero">