<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 2017/10/17
 * Time: 15:48
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
//       if (! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin()){
//           redirect('auth/login','refresh');
//       }else{
           /*page title*/
//           $this->page_title->push(lang('menu_dashboard'));
//           $this->data['pagetitle'] = $this->page_title->show();
//
//           /*breadcrumbs*/
//           $this->data['breadcrumb'] = $this->breadcrumbs->show();

           /*load Template*/
           $this->template->admin_render('admin/dashboard/index');
       }

//    }


    public function test(){
        $this->template->admin_render('admin/dashboard/test');
    }
}