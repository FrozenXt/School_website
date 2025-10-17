<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'username' => '26AA1001',
            'password' => bcrypt('AA1001'),
            'role' => 'superadmin',
        ]);

        Admin::create([
            'username' => '26AA1002',
            'password' => bcrypt('AA1002'),
            'role' => 'subadmin',
        ]);
    }
}
