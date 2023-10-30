<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PermissionSeeder::class);

        // Order::factory(30)->create();

        $super = User::factory()->create([
            'name' => 'Superadmin',
            'username' => 'super',
            'password' => Hash::make('adminoke'),
        ]);

        $super->assignRole('superadmin');

        //==================================================

        $admin = User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('telkom'),
        ]);

        $admin->assignRole('admin');

        //==================================================

        $user = User::factory()->create([
            'name' => 'Inputer order air',
            'username' => 'komplek',
            'password' => Hash::make('telkom'),
        ]);

        $user->assignRole('user');
    }
}
