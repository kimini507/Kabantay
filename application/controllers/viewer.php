
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by JetBrains PhpStorm.
 * User: John Denielle
 * Date: 11/16/13
 * Time: 2:13 PM
 * To change this template use File | Settings | File Templates.
 */


class Viewer extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('home_view');
    }

}

?>