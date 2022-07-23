<?php
    use Pecee\SimpleRouter\SimpleRouter;

    use app\Controllers\View\{
        MainController
    };

    SimpleRouter::get('/', [MainController::class, 'main']);