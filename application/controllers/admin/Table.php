<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 2017/10/18
 * Time: 11:30
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends Admin_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->template->admin_render('admin/table/index');
    }
}