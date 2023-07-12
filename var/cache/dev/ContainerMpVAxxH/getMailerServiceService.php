<?php

namespace ContainerMpVAxxH;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailerServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\MailerService' shared autowired service.
     *
     * @return \App\Service\MailerService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'MailerService.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'MailerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'Mailer.php';

        $a = ($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService'));

        if (isset($container->privates['App\\Service\\MailerService'])) {
            return $container->privates['App\\Service\\MailerService'];
        }
        $b = ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService());

        if (isset($container->privates['App\\Service\\MailerService'])) {
            return $container->privates['App\\Service\\MailerService'];
        }
        $c = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['App\\Service\\MailerService'])) {
            return $container->privates['App\\Service\\MailerService'];
        }

        return $container->privates['App\\Service\\MailerService'] = new \App\Service\MailerService(new \Symfony\Component\Mailer\Mailer($a, $b, $c));
    }
}