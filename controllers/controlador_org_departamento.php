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
use gamboamartin\organigrama\models\org_empresa;
use gamboamartin\organigrama\models\org_sucursal;
use gamboamartin\system\init;
use PDO;
use stdClass;
use tglobally\template_tg\html;


/**
 * este contralador se encarga de generar el contructor que define los parametros y da un titulo a la lista
 */
class controlador_org_departamento extends \gamboamartin\organigrama\controllers\controlador_org_departamento    {
    public array $sucursales = array();
    public string $rfc = '';
    public string $razon_social = '';

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Sucursal';

    }

}
