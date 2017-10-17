<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 2017/10/17
 * Time: 15:59
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Template{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function admin_render($content,$data = null){
        if(!$content){
            return null;
        }else{
            $this->template['header'] = $this->CI->load->view('layout/header',$data,TRUE);
            $this->template['mian_header'] = $this->CI->load->view('layout/main_header',$data,TRUE);
            $this->template['mian_sidebar'] = $this->CI->load->view('layout/main_sidebar',$data,TRUE);
//            $this->template['control_sidebar'] = $this->CI->load->view('layout/control_sidebar',$data,TRUE);
            $this->template['footer'] = $this->CI->load->view('layout/footer',$data,TRUE);
            return $this->CI->load->view('layout/template',$this->template);
        }
    }
}