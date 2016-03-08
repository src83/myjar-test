<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_BaseLoans extends Controller_Template {

    public $template = 'layout';

    public $_general = '';

    public function before() {

        parent::before();

        $general = Kohana::$config->load('general');
        $this->_general = $general->as_array();

        View::set_global('title', $this->_general['ProjectName']);

    }

}
