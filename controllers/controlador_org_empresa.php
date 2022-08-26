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


/**
 * este contralador se encarga de generar el contructor que define los parametros y da un titulo a la lista
 */
class controlador_org_empresa extends \gamboamartin\organigrama\controllers\controlador_org_empresa {


    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Empresas';

        $menu_lateral = (new menu_lateral())->number_head(number_active: $this->number_active);
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al integrar include', data: '');
            print_r($error);
            exit;
        }
        $this->menu_lateral = $menu_lateral;

    }


}
