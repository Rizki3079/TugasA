<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\UserAdmin;
use Illuminate\Support\Str;
use App\Models\UserCustomer;
use App\Models\UserSuperAdmin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();

        $roles = [
            ['name' => 'Customer', 'guard_name' => 'customer'],
            ['name' => 'Admin', 'guard_name' => 'admin'],
            ['name' => 'superAdmin', 'guard_name' => 'superAdmin']
        ];

        foreach ($roles as $data) {
            Role::updateOrCreate(
                ['name' => $data['name'], 'guard_name' => $data['guard_name']],
                $data
            );
        }

        $Admin = [
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'), // hashed password
            ],
        ];

        $superAdmin = [
            [
                'username' => 'superAdmin',
                'email' => 'superAdmin@gmail.com',
                'password' => bcrypt('password'), // hashed password
            ],
        ];

        $customer = [
            [
                'username' => 'customer1',
                'email' => 'customer1@gmail.com',
                'password' => bcrypt('password'), // hashed password
            ],
            [
                'username' => 'customer2',
                'email' => 'customer2@gmail.com',
                'password' => bcrypt('password'), // hashed password
            ],
        ];

        foreach ($Admin as $data) {
            $adminUser = UserAdmin::updateOrCreate(
                $data
            );
            $adminUser->assignRole('Admin');
        }

        foreach ($superAdmin as $data) {
            $superAdminUser = UserSuperAdmin::updateOrCreate(
                $data
            );
            $superAdminUser->assignRole('superAdmin');
        }

        foreach ($customer as $data) {
            $customerUser = UserCustomer::updateOrCreate(
                $data
            );
            $customerUser->assignRole('Customer');
        }

        DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();

            echo $th->getMessage();
        }
    }
}
