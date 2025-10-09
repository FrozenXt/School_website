<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    public function run(): void
    {
        $staffs = [
            ['name' => 'Anita Sharma', 'username' => 'anita', 'class_assigned' => 'Nursery', 'class_time' => '8:00 AM - 12:00 PM'],
            ['name' => 'Ravi Mehta', 'username' => 'ravi', 'class_assigned' => 'LKG', 'class_time' => '8:30 AM - 12:30 PM'],
            ['name' => 'Pooja Singh', 'username' => 'pooja', 'class_assigned' => 'UKG', 'class_time' => '8:30 AM - 12:30 PM'],
            ['name' => 'Amit Patel', 'username' => 'amit', 'class_assigned' => 'Grade 1', 'class_time' => '9:00 AM - 2:00 PM'],
            ['name' => 'Sunita Joshi', 'username' => 'sunita', 'class_assigned' => 'Grade 2', 'class_time' => '9:00 AM - 2:00 PM'],
            ['name' => 'Deepak Rai', 'username' => 'deepak', 'class_assigned' => 'Grade 3', 'class_time' => '9:00 AM - 2:30 PM'],
            ['name' => 'Kiran Thapa', 'username' => 'kiran', 'class_assigned' => 'Grade 4', 'class_time' => '9:00 AM - 2:30 PM'],
            ['name' => 'Rajesh Kumar', 'username' => 'rajesh', 'class_assigned' => 'Grade 5', 'class_time' => '9:00 AM - 3:00 PM'],
            ['name' => 'Nisha Bhandari', 'username' => 'nisha', 'class_assigned' => 'Grade 6', 'class_time' => '9:00 AM - 3:00 PM'],
            ['name' => 'Arjun Rana', 'username' => 'arjun', 'class_assigned' => 'Grade 7', 'class_time' => '9:00 AM - 3:30 PM'],
            ['name' => 'Sita Pandey', 'username' => 'sita', 'class_assigned' => 'Grade 8', 'class_time' => '9:00 AM - 3:30 PM'],
            ['name' => 'Ramesh Gupta', 'username' => 'ramesh', 'class_assigned' => 'Grade 9', 'class_time' => '9:00 AM - 4:00 PM'],
            ['name' => 'Neha Verma', 'username' => 'neha', 'class_assigned' => 'Grade 10', 'class_time' => '9:00 AM - 4:00 PM'],
        ];

        foreach ($staffs as $s) {
            Staff::create([
                'name' => $s['name'],
                'username' => $s['username'],
                'password' => bcrypt('password123'), // default password for now
                'class_assigned' => $s['class_assigned'],
                'class_time' => $s['class_time'],
            ]);
        }
    }
}
