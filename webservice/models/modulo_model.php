<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Modulo Class Model
 *
 * @package      WebService UCSC
 * @subpackage   Nombre Modulo Webservice
 * @category     Model
 * @author       Nombre Autor
 * @link         https://ws.ucsc.cl/webservice/modulo/
 */
class Modulo_model extends CI_Model{

  /**
   * Configuración Base datos entregada por la Dirección de Servicios Informáticos UCSC
   *
   * @var    array
   */
   private $config = array();

	/**
	 * Construct model
	 *
	 * @param    void
	 * @return    void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->config['hostname'] = "";
		$this->config['username'] = "";
		$this->config['password'] = "";
		$this->config['database'] = "";
		$this->config['dbdriver'] = "";
		$this->db = $this->load->database($this->config);
	}

}
