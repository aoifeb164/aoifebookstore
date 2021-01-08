<?php
# @Date:   2020-11-06T13:00:54+00:00
# @Last modified time: 2021-01-08T18:45:17+00:00


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;
use App\Models\User;
use App\Models\Customer;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name','admin')->first();
        $role_user = Role::where('name','user')->first();

        $admin = new User();
        $admin->name = 'Aoife Brennan';
        $admin->email = 'aoife@email.com';
        $admin->password = Hash::make('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Ronan Woods';
        $user->email = 'ronan@email.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Sean Smith';
        $user->email = 'sean@email.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $customer = new Customer();
        $customer->address = '123 fake st';
        $customer->phone = '0879636785';
        $customer->user_id = $user->id;
        $customer->save();

        $user = new User();
        $user->name = 'Ruth O Hare';
        $user->email = 'ruth@email.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Paul Murphy';
        $user->email = 'paul@email.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Phil Jones';
        $user->email = 'phil@email.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Sarah Byrne';
        $user->email = 'sarah@email.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_user);


        for ($i = 1; $i <=3; $i++) {
          $User = User::factory()->create();
          $admin->roles()->attach($role_admin);
        }

        for ($i = 1; $i <=15; $i++) {
          $User = User::factory()->create();
          $user->roles()->attach($role_user);
        }

        // for ($i = 1; $i <=30; $i++) {
        //   $User = User::factory()->create();
        //   $user->roles()->attach($role_user);
        //   $customer = Customer::factory()->create([]
        //   'user_id' => $user->id,
        // ]);
        // }
    }
}
