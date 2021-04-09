<?php

use app\classes\Template;

$template = new Template;
$twig = $template->init();

/**
 * Chamando o controller digitado na url
 */
$callController = new app\controllers\Controller;
$calledController = $callController->controller();
$controller = new $calledController();

/**
 * Atribuindo o twig aos controllers
 */
$controller->setTwig($twig);

/**
 * Chamando o método digitado na url
 */
$callMethod = new app\controllers\Method;
$method = $callMethod->method($controller);

$controller->$method();
