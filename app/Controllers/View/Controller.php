<?php
    namespace app\Controllers\View;

    abstract class Controller {
        protected $template_url;
        public function __construct() {
            $this->template_url = $_SERVER['DOCUMENT_ROOT'].$_ENV['ASSET_VIEWS'];
        }   
    }