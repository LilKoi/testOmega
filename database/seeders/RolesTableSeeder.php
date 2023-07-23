<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(
            [
                'name' => 'Админ',
            ]
        );
        Role::create(
            [
                'name' => 'Менеджер',
            ]
        );
        Role::create(
            [
                'name' => 'Юзер',
            ]
        );
        // [
        //     'name' => 'Менеджер',
        // ],
        // [
        //     'name' => 'Юзер',
        // ]
        // );
    }
}
