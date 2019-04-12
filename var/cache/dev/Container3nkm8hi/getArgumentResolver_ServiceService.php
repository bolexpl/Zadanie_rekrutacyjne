<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(['App\\Controller\\SecurityController:login' => function () {
    return ${($_ = isset($this->services['service_locator.kakbubj']) ? $this->services['service_locator.kakbubj'] : $this->load('getServiceLocator_KakbubjService.php')) && false ?: '_'};
}, 'App\\Controller\\SecurityController:register' => function () {
    return ${($_ = isset($this->services['service_locator.x2iwyq0']) ? $this->services['service_locator.x2iwyq0'] : $this->load('getServiceLocator_X2iwyq0Service.php')) && false ?: '_'};
}, 'App\\Controller\\SecurityController::login' => function () {
    return ${($_ = isset($this->services['service_locator.kakbubj']) ? $this->services['service_locator.kakbubj'] : $this->load('getServiceLocator_KakbubjService.php')) && false ?: '_'};
}, 'App\\Controller\\SecurityController::register' => function () {
    return ${($_ = isset($this->services['service_locator.x2iwyq0']) ? $this->services['service_locator.x2iwyq0'] : $this->load('getServiceLocator_X2iwyq0Service.php')) && false ?: '_'};
}]));
