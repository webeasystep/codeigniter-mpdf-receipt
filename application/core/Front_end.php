<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * @property CI_Config $config
 * @property CI_Session $session
 */

class Front_end extends CI_Controller {

    /***
     * pages of site in menu
     */

    function __construct() {
        parent::__construct();        
    }



    /**
     * present master page includes header and footer
     * @param string $main_containt
     * @param array $data 
     */
     function view($main_containt, $data = null) {
        $this->load->view('theme/header');
        $this->load->view($main_containt, $data);
        $this->load->view('theme/footer');
    }



}