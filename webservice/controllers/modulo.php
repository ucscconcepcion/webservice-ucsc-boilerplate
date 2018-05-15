<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

/**
 * Modulo Class Controller
 *
 * @package      WebService UCSC
 * @subpackage   Nombre Modulo Webservice
 * @category     Controller
 * @author       Nombre Autor
 * @link         https://ws.ucsc.cl/<webservice>/<modulo>/
 */
class Modulo extends REST_Controller {

	/**
	 * Clave generada por la Dirección de Servicios Informáticos UCSC
	 *
	 * @var    string
	 */
	protected $key = "";

	/**
	 * Construct model
	 *
	 * @param    void
	 * @return    void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->model('modulo_model');
	}
}
