<?php

require_once __DIR__.'/service.php';

$app->get('/', function ($req, $res) {
    return $this->captchaController->dispatch($req, $res);
});
