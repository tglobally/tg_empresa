<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace gamboamartin\organigrama\controllers;

use gamboamartin\errores\errores;
use gamboamartin\system\links_menu;
use gamboamartin\system\system;
use gamboamartin\template\html;

use html\org_sucursal_html;
use html\tg_com_rel_cliente_html;
use html\tg_com_tipo_ali_html;
use models\org_sucursal;
use models\tg_com_alianza;
use models\tg_com_rel_cliente;
use models\tg_com_tipo_ali;
use PDO;
use stdClass;


/**
 * este contralador se encarga de generar el contructor que define los parametros y da un titulo a la lista
 */

class controlador_tg_com_tipo_ali extends system {

    public function __construct(PDO $link, html $html = new \gamboamartin\template_1\html(),
                                stdClass $paths_conf = new stdClass()){

        $modelo = new tg_com_tipo_ali(link: $link);
        $html = new tg_com_tipo_ali_html($html);
        $obj_link = new links_menu($this->registro_id);
        parent::__construct(html:$html, link: $link,modelo:  $modelo, obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'tg_com_alianza';

    }

}
