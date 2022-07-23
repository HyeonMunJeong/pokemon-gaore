<?php
    namespace app\Controllers\View;

    class MainController extends Controller {
        /**
         * @author JHM 
         */
        public function main(): void {
            include $this->template_url.'/main.php';
            return;
        }
    }