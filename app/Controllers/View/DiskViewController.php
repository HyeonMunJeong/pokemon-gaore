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
            // 탄수 정보 가져오기
            $stage = new Stage();
            $stage_obj = $stage->infoList();

            // 속성 정보 가져오기
            $attribute = new Attribute();
            $attribute_obj = $attribute->infoList();

            include $this->template_url.'/disk_main.php';
            return;
        }
    }