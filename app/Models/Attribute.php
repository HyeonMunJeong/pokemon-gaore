<?php
    namespace app\Models;

    class Attribute extends Models {
        /**
         * @api 속성 정보 가져오기 :: 최신순
         * @author JHM
         */
        public function infoList(): ?array {
            $sql = "SELECT
                        ab.id, ab.`name`, fi.`path`
                    FROM `attribute` AS ab
                    INNER JOIN (
                        SELECT
                            id, `path`
                        FROM `file`
                    ) AS fi
                    ON fi.id = ab.file_id
                    ORDER BY ab.id ASC";

            return $this->getData($sql);
        }
    }