<?php

require_once __DIR__.'/registration.php';
$app->get('/', function ($req, $res) {
    return $this->captchaController->dispatch($req, $res);
});
