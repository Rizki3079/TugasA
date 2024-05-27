<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\UserData;
use App\Models\UserAdmin;
use Illuminate\Support\Str;
use App\Models\UserCustomer;
use App\Models\UserSuperAdmin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserDataController;

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
            UserAdmin::updateOrCreate(
                $data
            )->assignRole('Admin');
        }

        foreach ($superAdmin as $data) {
            UserSuperAdmin::updateOrCreate(
                $data
            )->assignRole('superAdmin');
        }

        foreach ($customer as $data) {
            UserCustomer::updateOrCreate(
                $data
            )->assignRole('Customer');
        }

        $admins = UserAdmin::all();
        $dataAdmin = [];
        
        foreach ($admins as $admin) {
            $dataAdmin[] = [
                'name' => 'Supriyanto', // Ganti dengan nama yang sesuai
                'user_admin_id' => $admin->id,
                'user_customer_id' => null,
                'phone_number' => '122333',
                'address' => 'Desa Losarang',
                'image' => 'profile.jpg'
            ];
        }
        
        foreach ($dataAdmin as $admin) {
            UserData::create($admin);
        }
        
        $customers = UserCustomer::all();
        $dataCustomers = [];
        
        foreach ($customers as $customer) {
            $dataCustomers[] = [
                'name' => 'Saiful Anwar', // Ganti dengan nama yang sesuai
                'user_admin_id' => null,
                'user_customer_id' => $customer->id,
                'phone_number' => '122333',
                'address' => 'Desa Losarang',
                'image' => 'profile.jpg'
            ];
        }
        
        foreach ($dataCustomers as $customer) {
            UserData::create($customer);
        }        


        DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();

            echo $th->getMessage();
        }
    }
}
