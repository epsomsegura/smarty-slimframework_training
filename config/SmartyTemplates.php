<?php

namespace Config;

use Smarty;

class SmartyTemplates extends Smarty
{
    public $smarty;

    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir(__DIR__.'/../views/templates/');
        $this->setCompileDir(__DIR__.'/../views/templates_c/');
        $this->setConfigDir(__DIR__.'/../views/configs/');
        $this->setCacheDir(__DIR__.'/../views/cache/');
        // $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
    }
}

?>