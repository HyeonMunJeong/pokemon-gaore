<?php
    namespace app\Controllers\View;

    use app\Models\{
        Stage,
        Attribute
    };

    class DiskViewController extends Controller {
        /**
         * @author JHM
         */
        public function main(): void {
            $stage = new Stage();
            $attribute = new Attribute();       

            $stage_obj = $stage->infoList();            // 탄수 정보 가져오기
            $attribute_obj = $attribute->infoList();    // 속성 정보 가져오기

            include $this->template_url.'/disk_main.php';
            return;
        }

        /**
         * @author JHM
         */
        public function info(): void {
            $stage = new Stage();
            $attribute = new Attribute();       

            $stage_obj = $stage->infoList();            // 탄수 정보 가져오기
            $attribute_obj = $attribute->infoList();    // 속성 정보 가져오기

            include $this->template_url.'/disk_info.php';
            return;
        }
    }