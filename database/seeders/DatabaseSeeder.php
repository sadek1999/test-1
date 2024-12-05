<?php

namespace Database\Seeders;

use App\Enum\PermissionEnum;
use App\Enum\RolesEnum;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

    $adminRole=Role::create(['name'=>RolesEnum::Admin->value]);
    $userRole=Role::create(['name'=>RolesEnum::Admin->value]);
    $commenterRole=Role::create(['name'=>RolesEnum::Commenter->value]);

    $manageUserPermissions=Permission::create([
        'name'=>PermissionEnum::ManageUser->value
    ]);
    $manageFeaturePermissions=Permission::create([
        'name'=>PermissionEnum::ManageFeatures->value
    ]);

    $manageCommentPermissions=Permission::create([
        'name'=>PermissionEnum::ManageComments->value
    ]);

    $upvoteDownvotePermission=Permission::create([
        'name'=>PermissionEnum::UpvoteDownvote->value
    ]);

    $userRole->syncPermissions([$upvoteDownvotePermission]);
    $commenterRole->syncPermissions([$manageCommentPermissions,$upvoteDownvotePermission]);
    $adminRole->syncPermissions([
        $manageUserPermissions,
        $manageFeaturePermissions,
        $manageCommentPermissions,
        $upvoteDownvotePermission,]);


        User::factory()->create([
            'name' => 'User User',
            'email' => 'user@example.com',
        ])->assignRole('user');
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ])->assignRole('admin');
        User::factory()->create([
            'name' => 'Commenter User',
            'email' => 'commenter@example.com',
        ])->assignRole('commenter');
    }
}
