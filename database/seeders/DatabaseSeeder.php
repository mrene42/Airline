<?php

namespace Database\Seeders;

use App\Models\Flight;
use App\Models\Plane;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User seeder

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'IsAdmin' => true,
        ]);

        User::factory()->create([
            'name' => 'User1',
            'email' => 'user1@user1.com',
            'password' => bcrypt('user1'),
            'IsAdmin' => false,
        ]);

        // Plane seeder

        Plane::create([
            'name' => 'Boeing 747',
            'seats' => 366,
            'imgplane' => 'https://a21.com.mx/sites/default/files/field/image/imageickhckjc.jpg',
        ]);

        Plane::create([
            'name' => 'Airbus A380',
            'seats' => 555,
            'imgplane' => 'https://static1.simpleflyingimages.com/wordpress/wp-content/uploads/2025/02/global-airlines-2025-airbus-a380.jpeg',
        ]);

        // Flight seeder
        
        Flight::create([
            'plane_id' => 1,
            'date' => '2025-02-05',
            'departure' => 'New York',
            'arrival' => 'London',
            'plane_id' => 1,
            'available'=> true,
        ]);

        Flight::create([
            'plane_id' => 2,
            'date' => '2025-02-06',
            'departure' => 'London',
            'arrival' => 'New York',
            'plane_id' => 2,
            'available'=> false,
        ]);

        Flight::create([
            'plane_id' => 1,
            'date' => '2025-02-07',
            'departure' => 'New York',
            'arrival' => 'London',
            'plane_id' => 1,
            'available'=> true,
        ]);
    }
}
