<?php
    namespace app\Models;

    class Stage extends Models {
        /**
         * @api 탄수 정보 가져오기 :: 최신순
         * @author JHM
         */
        public function infoList(): ?array {
            $sql = "SELECT
                        id,
                        `name`
                    FROM stage
                    ORDER BY id ASC";

            return $this->getData($sql);
        }
    }