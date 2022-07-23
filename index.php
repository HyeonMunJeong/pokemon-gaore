<?php
    // Auto-Load 설정 [Composer / Controller]
    require __DIR__.'/vendor/autoload.php';

    use Pecee\SimpleRouter\SimpleRouter;
    use Symfony\Component\Dotenv\Dotenv;
    
    // Env File 실행
    $dotenv = new Dotenv();
    $dotenv->load(__DIR__.'/.env');

    // 운영 환경 (Production)에서는 절대 사용 금지를 권합니다.
    ini_set( "display_errors", $_ENV['ERROR_TYPE'] );

    // common File 설정
    require __DIR__.'/vendor/classAutoload.php';

    // Routes 파일 로드
    require_once 'routes.php';

    // Router 실행
    SimpleRouter::start();