<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    
    public function index(){

        // js 
        $data['js'] = [
            "ajax.js",
            "function.js",
            "helper.js",
            "modules/waqif.js",
            "load_data/waqif_reload.js",
        ];

        $this->load->view("pewaqif", $data);
    }
}
/* End of file Transaksi.php */
