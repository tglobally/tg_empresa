<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace tglobally\tg_empresa\controllers;


use PDO;
use stdClass;


class controlador_fc_csd extends \gamboamartin\facturacion\controllers\controlador_fc_csd {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){


        parent::__construct(link: $link, paths_conf: $paths_conf);

        $this->titulo_lista = 'CSD';

    }


}
