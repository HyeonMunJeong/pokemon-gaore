<?php
    use Pecee\SimpleRouter\SimpleRouter;

    use app\Controllers\View\{
        MainController,
        DiskViewController
    };

    SimpleRouter::get('/', [MainController::class, 'main']);

    // 디스크 정보
    SimpleRouter::group(['prefix' => 'disk'], function() {
        // D001 - 디스크 정보 입력 View Page
        SimpleRouter::get('/', [DiskViewController::class, 'main']);
    });