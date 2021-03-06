<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.guard.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Guard/Firewall/GuardAuthenticationListener.php';

return $this->services['security.authentication.listener.guard.main'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(${($_ = isset($this->services['security.authentication.guard_handler']) ? $this->services['security.authentication.guard_handler'] : $this->load('getSecurity_Authentication_GuardHandlerService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, 'main', new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['App\Security\LoginFormAuthenticator']) ? $this->services['App\Security\LoginFormAuthenticator'] : $this->load('getLoginFormAuthenticatorService.php')) && false ?: '_'};
}, 1), ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'});
