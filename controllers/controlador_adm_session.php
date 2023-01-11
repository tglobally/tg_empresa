<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace tglobally\tg_empresa\controllers;

use config\generales;
use config\views;
use gamboamartin\errores\errores;
use gamboamartin\system\links_menu;
use JsonException;
use PDO;
use stdClass;
use tglobally\tg_empresa\controllers\html\_base;

class controlador_adm_session extends \gamboamartin\controllers\controlador_adm_session {

    public array $secciones = array("org_tipo_empresa", "org_empresa",
        "org_clasificacion_dep","org_sucursal","org_tipo_puesto","org_puesto",
        "org_tipo_sucursal","org_departamento","org_tipo_actividad","org_actividad");
    public array $links_catalogos = array();
    public stdClass $links;

    public bool $existe_msj = false;
    public string $include_menu = '';
    public string $mensaje_html = '';

    public string $container_text_inicio = '';

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass())
    {
        parent::__construct(link: $link,paths_conf:  $paths_conf);

        $links = (new links_menu(link: $link, registro_id: $this->registro_id))->genera_links(controler: $this);
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al inicializar links', data: $links);
            print_r($error);
            die('Error');
        }


        $this->links = $links;

        $this->links_catalogos["org_tipo_empresa"]['titulo'] = 'Tipos de empresa';

        $this->links_catalogos["org_empresa"]["titulo"] = "Empresa";
        $this->links_catalogos["org_empresa"]["subtitulo"] = "Catalogo";
        $this->links_catalogos["org_clasificacion_dep"]["titulo"] = "Clasificacion Dep";
        $this->links_catalogos["org_clasificacion_dep"]["subtitulo"] = "Catalogo";
        $this->links_catalogos["org_sucursal"]["titulo"] = "Sucursal";
        $this->links_catalogos["org_sucursal"]["subtitulo"] = "Catalogo";
        $this->links_catalogos["org_tipo_puesto"]["titulo"] = "Tipos de puesto";
        $this->links_catalogos["org_tipo_puesto"]["subtitulo"] = "Catalogo";
        $this->links_catalogos["org_puesto"]["titulo"] = "Puestos";
        $this->links_catalogos["org_puesto"]["subtitulo"] = "Catalogo";
        $this->links_catalogos["org_tipo_sucursal"]["titulo"] = "Tipos de sucursal";
        $this->links_catalogos["org_tipo_sucursal"]["subtitulo"] = "Catalogo";
        $this->links_catalogos["org_departamento"]["titulo"] = "Departamentos";
        $this->links_catalogos["org_departamento"]["subtitulo"] = "Catalogo";
        $this->links_catalogos["org_tipo_actividad"]["titulo"] = "Tipos de actividad";
        $this->links_catalogos["org_tipo_actividad"]["subtitulo"] = "Catalogo";
        $this->links_catalogos["org_actividad"]["titulo"] = "Actividad";
        $this->links_catalogos["org_actividad"]["subtitulo"] = "Catalogo";


    }

    /**
     * Funcion de controlador donde se ejecutaran siempre que haya un acceso denegado
     * @param bool $header Si header es true cualquier error se mostrara en el html y cortara la ejecucion del sistema
     *              En false retornara un array si hay error y un string con formato html
     * @param bool $ws Si ws es true retornara el resultado en formato de json
     * @return array vacio siempre
     */
    public function denegado(bool $header, bool $ws = false): array
    {

        return array();

    }

    public function get_link(string $seccion, string $accion = "lista"): array|string
    {
        $seccion = trim($seccion);
        if($seccion === ''){
            return $this->errores->error(mensaje: 'Error seccion esta vacia', data: $seccion);
        }
        $accion = trim($accion);
        if($accion === ''){
            return $this->errores->error(mensaje: 'Error accion esta vacia', data: $accion);
        }

        if (!property_exists($this->links, $seccion)) {
            $links = (new links_menu(link: $this->link, registro_id: $this->registro_id))->genera_links(controler: $this);
            if (errores::$error) {
                return $this->errores->error(mensaje: 'Error al inicializar links', data: $links);
            }
        }
        if (!property_exists($this->links->$seccion, $accion)) {
            return $this->errores->error(mensaje: 'Error no existe la accion', data: $accion);
        }

        return $this->links->$seccion->$accion;
    }

    /**
     * Funcion de controlador donde se ejecutaran los elementos necesarios para poder mostrar el inicio en
     *      session/inicio
     *
     * @param bool $aplica_template Si aplica template buscara el header de la base
     *              No recomendado para vistas ajustadas como esta
     * @param bool $header Si header es true cualquier error se mostrara en el html y cortara la ejecucion del sistema
     *              En false retornara un array si hay error y un string con formato html
     * @param bool $ws Si ws es true retornara el resultado en formato de json
     * @return string|array string = html array = error
     * @throws JsonException si hay error en forma ws
     */
    public function inicio(bool $aplica_template = false, bool $header = true, bool $ws = false): string|array
    {

        $template =  parent::inicio($aplica_template, false); // TODO: Change the autogenerated stub
        if(errores::$error){
            return $this->retorno_error(mensaje:  'Error al generar template',data: $template, header: $header, ws: $ws);
        }

        $links_catalogos = $this->inicializar_links();
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al inicializar links', data: $links_catalogos,
                header: $header,ws: $ws);
        }

        $this->links_catalogos = $links_catalogos;

        $this->include_menu = (new generales())->path_base;
        $this->include_menu .= 'templates/inicio.php';

        $container_text_inicio = (new _base())->container_text_inicio(nombre_usuario: $this->nombre_usuario);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al inicializar cont_text_inicio', data: $container_text_inicio,
                header: $header,ws: $ws);
        }

        $this->container_text_inicio = $container_text_inicio;


        return $template;
    }

    public function inicializar_links(): array
    {
        foreach ($this->secciones as $seccion){
            $seccion = trim($seccion);
            if($seccion === ''){
                return $this->errores->error(mensaje: 'Error seccion esta vacia', data: $seccion);
            }

            if (!array_key_exists($seccion,$this->links_catalogos)){
                $this->links_catalogos[$seccion] = array();
            }
            if(!is_array($this->links_catalogos[$seccion])){
                return $this->errores->error(mensaje: 'Error $this->links_catalogos['.$seccion.'] debe ser un array',
                    data: $this->links_catalogos);
            }

            $titulo = $seccion;
            if (array_key_exists("titulo",$this->links_catalogos[$seccion])){
                $titulo = $this->links_catalogos[$seccion]["titulo"];
            }

            $subtitulo = '';
            if (array_key_exists("subtitulo",$this->links_catalogos[$seccion])){
                $subtitulo = $this->links_catalogos[$seccion]['subtitulo'];
            }

            $link_url = $this->get_link(seccion: $seccion);
            if(errores::$error){
                return $this->errores->error(mensaje: 'Error al obtener link', data: $link_url);
            }

            $data_link = (new _base())->data_link(link: $link_url, subtitulo: $subtitulo, titulo: $titulo, url_assets: (new views())->url_assets);
            if(errores::$error){
                return $this->errores->error(mensaje: 'Error al obtener cont_text_accion', data: $data_link);
            }
            $this->links_catalogos[$seccion]['data_link'] = $data_link;



        }
        return $this->links_catalogos;
    }

    /**
     * Funcion de controlador donde se ejecutaran los elementos necesarios para la asignacion de datos de logueo
     * @param bool $header Si header es true cualquier error se mostrara en el html y cortara la ejecucion del sistema
     *              En false retornara un array si hay error y un string con formato html
     * @param bool $ws Si ws es true retornara el resultado en formato de json
     * @param string $accion_header
     * @param string $seccion_header
     * @return array string = html array = error
     *
     */
    public function loguea(bool $header, bool $ws = false, string $accion_header = 'login', string $seccion_header = 'session'): array
    {

        $loguea = parent::loguea(header: true,accion_header:  $accion_header,
            seccion_header:  $seccion_header); // TODO: Change the autogenerated stub
        if(errores::$error){
            return $this->retorno_error(mensaje:  'Error al loguear',data: $loguea, header: $header, ws: $ws);
        }


        return $loguea;
    }


    /**
     * Funcion de controlador donde se ejecutaran los elementos de session/login
     *
     * @param bool $header Si header es true cualquier error se mostrara en el html y cortara la ejecucion del sistema
     *              En false retornara un array si hay error y un string con formato html
     * @param bool $ws Si ws es true retornara el resultado en formato de json
     * @return string|array string = html array = error
     */
    public function login(bool $header = true, bool $ws = false): stdClass|array
    {
        $login = parent::login($header, $ws); // TODO: Change the autogenerated stub
        if(errores::$error){
            return $this->retorno_error(mensaje:  'Error al generar template',data: $login, header: $header, ws: $ws);
        }

        $this->mensaje_html = '';
        if(isset($_GET['mensaje']) && $_GET['mensaje'] !==''){
            $mensaje = trim($_GET['mensaje']);
            if($mensaje !== ''){
                $this->mensaje_html = $mensaje;
                $this->existe_msj = true;
            }
        }

        $this->include_menu .= 'templates/login.php';

        return $login;

    }


}
