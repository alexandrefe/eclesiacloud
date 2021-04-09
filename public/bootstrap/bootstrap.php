<?php

use app\classes\Template;

$template = new Template;
$twig = $template->init();

dd($twig);

/**
 * Chamando o controller digitado na url
 */
$callController = new app\controllers\Controller;
$calledController = $callController->controller();
$controller = new $calledController();

/**
 * Chamando o método digitado na url
 */
$callMethod = new app\controllers\Method;
$method = $callMethod->method($controller);

$controller->$method();
