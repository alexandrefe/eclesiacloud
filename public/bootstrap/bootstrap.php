<?php

use app\classes\Parameters;
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

$parameters = new Parameters;
$parameter = $parameters->getParameterMethod($controller, $method);

/**
 * Chamando o controller através da classe controller e da classe method
 */
$controller->$method();
