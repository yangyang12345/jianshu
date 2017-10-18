<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 2017/10/18
 * Time: 14:33
 */
class Breadcrumbs{
    protected $CI;

    private $breadcrumbs = array();

    public function __construct()
    {
        $this->CI = & get_instance();

        $this->breadcrumb_start = $this->CI->config->item('breadcrumb_start');
        $this->breadcrumb_end = $this->CI->config->item('breadcrumb_end');
        $this->breadcrumb_li_start = $this->CI->config->item('breadcrumb_li_start');
        $this->breadcrumb_li_end = $this->CI->config->item('breadcrumb_li_end');
        $this->breadcrumb_el_first = $this->CI->config->item('breadcrumb_el_first');
        $this->breadcrumb_el_last = $this->CI->config->item('breadcrumb_el_last');
    }

    function array_sorter($key)
    {
        return function ($a, $b) use ($key)
        {
            return strnatcmp($a[$key], $b[$key]);
        };
    }

    public function push($id,$page,$url){
        if(!$page OR !$url) return;

        $url = site_url($url);

        $this->breadcrumbs[$url] = array('id'=>$id,'page'=>$page,'href'=>$url);
    }

    public function unshift($id, $page, $url){
        if (!$page OR !$url) return;

        $url = site_url($url);

        array_unshift($this->breadcrumbs, array('id' => $id, 'page' => $page, 'href' => $url));
    }

    public function show(){
        if($this->breadcrumbs){

        }
    }
}