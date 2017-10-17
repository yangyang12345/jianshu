<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 2017/10/17
 * Time: 15:33
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->library('template');
    }
}


class Admin_Controller extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

//        if(! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin()){
//            redirect('auth/login','refresh');
//        }else{
//            $this->load->library('admin/breadcrumbs');

            /*load library function*/
//            $this->breadcrumbs->unshift(0,$this->lang->line('menu_dashboard'),'admin/dashboard');
//        }
    }
}

class Public_Controller extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

    }
}