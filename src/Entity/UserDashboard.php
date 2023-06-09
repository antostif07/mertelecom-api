<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\State\UserDashboardProvider;

#[ApiResource(
    operations: [
        new Get(
            provider: UserDashboardProvider::class,
        ),
    ],
    shortName: 'Dashboard'
)]
class UserDashboard {
    public int $totalProjects;

    public int $totalCompletedProjects;

    public int $totalTasks;
}