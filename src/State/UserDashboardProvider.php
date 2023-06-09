<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\Entity\UserDashboard;

class UserDashboardProvider implements ProviderInterface
{
    public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
        $dashboard = new UserDashboard();

        $dashboard->totalCompletedProjects = 0;
        $dashboard->totalProjects = 0;
        $dashboard->totalTasks = 0;

        return $dashboard;
    }
}
