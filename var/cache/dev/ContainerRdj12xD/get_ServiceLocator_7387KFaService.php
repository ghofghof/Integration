<?php

namespace ContainerRdj12xD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7387KFaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7387KFa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7387KFa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EmailController::sendEmail' => ['privates', '.service_locator.6E9xidT', 'get_ServiceLocator_6E9xidTService', true],
            'App\\Controller\\EvenementController::addStudent' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController::delete' => ['privates', '.service_locator.V3UURFY', 'get_ServiceLocator_V3UURFYService', true],
            'App\\Controller\\EvenementController::edit' => ['privates', '.service_locator.wXSRjZL', 'get_ServiceLocator_WXSRjZLService', true],
            'App\\Controller\\EvenementController::index' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController::search' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController::statistiques' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController::studentelement' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EvenementController::translateEvent' => ['privates', '.service_locator.q2ji3lu', 'get_ServiceLocator_Q2ji3luService', true],
            'App\\Controller\\ReserverEventController::addReservation' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReserverEventController::delete' => ['privates', '.service_locator.tGKl8La', 'get_ServiceLocator_TGKl8LaService', true],
            'App\\Controller\\ReserverEventController::edit' => ['privates', '.service_locator.tGKl8La', 'get_ServiceLocator_TGKl8LaService', true],
            'App\\Controller\\ReserverEventController::index' => ['privates', '.service_locator.2yQ19cc', 'get_ServiceLocator_2yQ19ccService', true],
            'App\\Controller\\ReserverEventController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\EmailController:sendEmail' => ['privates', '.service_locator.6E9xidT', 'get_ServiceLocator_6E9xidTService', true],
            'App\\Controller\\EvenementController:addStudent' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController:delete' => ['privates', '.service_locator.V3UURFY', 'get_ServiceLocator_V3UURFYService', true],
            'App\\Controller\\EvenementController:edit' => ['privates', '.service_locator.wXSRjZL', 'get_ServiceLocator_WXSRjZLService', true],
            'App\\Controller\\EvenementController:index' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController:search' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController:statistiques' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController:studentelement' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EvenementController:translateEvent' => ['privates', '.service_locator.q2ji3lu', 'get_ServiceLocator_Q2ji3luService', true],
            'App\\Controller\\ReserverEventController:addReservation' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReserverEventController:delete' => ['privates', '.service_locator.tGKl8La', 'get_ServiceLocator_TGKl8LaService', true],
            'App\\Controller\\ReserverEventController:edit' => ['privates', '.service_locator.tGKl8La', 'get_ServiceLocator_TGKl8LaService', true],
            'App\\Controller\\ReserverEventController:index' => ['privates', '.service_locator.2yQ19cc', 'get_ServiceLocator_2yQ19ccService', true],
            'App\\Controller\\ReserverEventController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\EmailController::sendEmail' => '?',
            'App\\Controller\\EvenementController::addStudent' => '?',
            'App\\Controller\\EvenementController::delete' => '?',
            'App\\Controller\\EvenementController::edit' => '?',
            'App\\Controller\\EvenementController::index' => '?',
            'App\\Controller\\EvenementController::search' => '?',
            'App\\Controller\\EvenementController::statistiques' => '?',
            'App\\Controller\\EvenementController::studentelement' => '?',
            'App\\Controller\\EvenementController::translateEvent' => '?',
            'App\\Controller\\ReserverEventController::addReservation' => '?',
            'App\\Controller\\ReserverEventController::delete' => '?',
            'App\\Controller\\ReserverEventController::edit' => '?',
            'App\\Controller\\ReserverEventController::index' => '?',
            'App\\Controller\\ReserverEventController::new' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\EmailController:sendEmail' => '?',
            'App\\Controller\\EvenementController:addStudent' => '?',
            'App\\Controller\\EvenementController:delete' => '?',
            'App\\Controller\\EvenementController:edit' => '?',
            'App\\Controller\\EvenementController:index' => '?',
            'App\\Controller\\EvenementController:search' => '?',
            'App\\Controller\\EvenementController:statistiques' => '?',
            'App\\Controller\\EvenementController:studentelement' => '?',
            'App\\Controller\\EvenementController:translateEvent' => '?',
            'App\\Controller\\ReserverEventController:addReservation' => '?',
            'App\\Controller\\ReserverEventController:delete' => '?',
            'App\\Controller\\ReserverEventController:edit' => '?',
            'App\\Controller\\ReserverEventController:index' => '?',
            'App\\Controller\\ReserverEventController:new' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
