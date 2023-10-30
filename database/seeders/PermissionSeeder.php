<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'superadmin',
            'admin',
            'user',
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
            ]);
        }

        $datas = [
            'order.create',
            'order.delete',
            'order.edit',
            'order.index',
            'order.queue',
            'order.progress',
            'order.done',
            'order.setDone',
            'order.setProgress',
            'order.showTransferImage',
            'order.changestatus',

            'user.index',
            'user.create',
            'user.edit',
            'user.delete',
        ];

        foreach ($datas as $data) {
            $permit = Permission::create([
                'name' => $data,
            ]);
            $permit->assignRole("admin");

            $except = [
                'order.setDone',
                'user.index',
                'user.create',
                'user.edit',
                'user.delete',
            ];

            if (!in_array($data, $except)) {
                $permit->assignRole("user");
            }
        }
    }
}
