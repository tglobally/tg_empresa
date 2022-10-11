<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 0.48.13
 * @verclass 1.0.0
 * @created 2022-07-25
 * @final En proceso
 *
 */
namespace tglobally\tg_empresa\controllers;


use PDO;
use stdClass;
/**
 * este contralador se encarga de generar el contructor que define los parametros y da un titulo a la lista
 */

class controlador_dp_estado extends \controllers\controlador_dp_estado {

    public function __construct(PDO $link,  stdClass $paths_conf = new stdClass()){


        parent::__construct(link: $link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Estados';

    }


}
