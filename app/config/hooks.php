<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'] = function() 
{
    MY_Loader::$nucleo['assets'] = base_url('app/views/assets/');
    MY_Loader::$nucleo['nome_site'] = '<b>Dide</b>Web';
    MY_Loader::$nucleo['nome_site_mini'] = '<b>D</b>W';
};