<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace controllers;

use gamboamartin\errores\errores;
use gamboamartin\system\init;
use PDO;
use stdClass;
use tglobally\template_tg\html;

class controlador_org_sucursal extends \gamboamartin\organigrama\controllers\controlador_org_sucursal {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Sucursal';

    }







}
