<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 2017/10/17
 * Time: 15:25
 */

defined('BASEPATH') OR exit('No direct script access allowed');


if (isset($header))
{
    echo $header;
}

if (isset($main_header))
{
    echo $main_header;
}

if (isset($main_sidebar))
{
    echo $main_sidebar;
}

if (isset($content))
{
    echo $content;
}

//if (isset($control_sidebar) AND $admin_prefs['ctrl_sidebar'] == TRUE)
//{
//    echo $control_sidebar;
//}

if (isset($footer))
{
    echo $footer;
}
