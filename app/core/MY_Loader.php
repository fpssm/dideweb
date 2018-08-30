<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
    static $nucleo = array();

    public function view($view, $vars = array(), $return = FALSE)
    {
       self::$nucleo = array_merge($vars, self::$nucleo);
       return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_prepare_view_vars(self::$nucleo), '_ci_return' => $return));
    }
}