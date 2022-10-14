<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace tglobally\tg_empresa\controllers;
use gamboamartin\errores\errores;
use PDO;
use stdClass;
use tglobally\template_tg\html;
use tglobally\template_tg\menu_lateral;


class controlador_org_clasificacion_dep extends \gamboamartin\organigrama\controllers\controlador_org_clasificacion_dep {


    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Clasificacion Departamento';

    }


}
