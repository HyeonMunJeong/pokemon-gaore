<?php
    namespace app\Models;

    use PDO;

    abstract class Models {
        public function __construct() {
            try {
                // 서버 이름, 데이터베이스 이름, 사용자명과 비밀번호를 전달하여 새로운 PDO 객체를 생성
                $connect = new PDO("{$_ENV['DB_CONNECTION']}:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_DATABASE']}", $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'],
                    [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::MYSQL_ATTR_FOUND_ROWS => true]);
    
                // 생성된 PDO 객체에 에러 모드(error mode)를 설정
                // 이렇게 에러 모드를 설정하면, PDO 생성자는 에러가 발생할 때마다 PDOException 예외를 던질 것이다.
                $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $ex) {
                echo "PDO CONNECTION Error {$ex->getMessage()}"; exit;
            }
    
            $this->connect = $connect;
        }   

        function sqlFetch(string $sql, array $param = []): array {
            $stmt = $this->connect->prepare($sql);
    
            if (count($param) > 0) {
                foreach ($param AS $key => $val) {
                    $stmt->bindValue(":{$key}", "{$val}");
                }
            }
    
            $stmt->execute();
            $stmt = $stmt->fetch(PDO::FETCH_ASSOC) ?? [];
    
            return !empty($stmt) ? $stmt : [];
        }
    
        function getData(string $sql, array $param = []): array {
            $stmt = $this->connect->prepare($sql);
    
            if (count($param) > 0) {
                foreach ($param AS $key => $val) {
                    $stmt->bindValue(":{$key}", "{$val}");
                }
            }
    
            $stmt->execute();
            $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC) ?? [];
    
            return !empty($stmt) ? $stmt : [];
        }

        function sqlQuery(string $sql, array $param = []): int {
            $stmt = $this->connect->prepare($sql);
    
            if (count($param) > 0) {
                foreach ($param AS $key => $val) {
                    if (gettype($val) == 'integer') {
                        $stmt->bindValue(":{$key}", !empty($val) ? "{$val}" : $val, PDO::PARAM_INT);
                    } else {
                        $stmt->bindValue(":{$key}", !empty($val) ? "{$val}" : $val);
                    }
                }
            }

            $stmt->execute();
            $insert_idx = $pdo->lastInsertId();
    
            if ($insert_idx <= 0) {
                return 1;
            } else {
                return $insert_idx;
            }
        }
    }