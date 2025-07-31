<?php

namespace App\Containers\AppSection\Authorization\Data\Seeders;

use App\Containers\AppSection\User\Actions\CreateAdminAction;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

final class SuperAdminSeeder_2 extends ParentSeeder
{
    public function run(CreateAdminAction $action): void
    {
        $userData = [
            'lastname' => 'Super',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'birth' => '2004-12-13',
        ];

        $action->run($userData);
    }
}
