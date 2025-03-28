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
            'name' => 'Boeing 737',
            'seats' => 366,
            'imgplane' => 'https://a21.com.mx/sites/default/files/field/image/imageickhckjc.jpg',
        ]);

        Plane::create([
            'name' => 'Airbus A380',
            'seats' => 555,
            'imgplane' => 'https://static1.simpleflyingimages.com/wordpress/wp-content/uploads/2025/02/global-airlines-2025-airbus-a380.jpeg',
        ]);

        Plane::create([
            'name' => 'Boeing 777',
            'seats' => 396,
            'imgplane' => 'https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2016/02/512661-michelin-proveedor-unico-neumaticos-boeing-777.jpg?tf=3840x',
        ]);

        Plane::create([
            'name' => 'Airbus A350',
            'seats' => 440,
            'imgplane' => 'https://forbes.es/wp-content/uploads/2024/05/fotonoticia_20240506165720_1920.jpg',
        ]);


        // Flight seeder
        
        Flight::create([
            'plane_id' => 1,
            'date' => '2025-02-05 12:00',
            'departure' => 'New York',
            'arrival' => 'London',
            'plane_id' => 1,
            'available'=> true,
            'image' => 'https://www.universal-assistance.com/uablog/wp-content/uploads/2022/12/big-ben.png',
        ]);

        Flight::create([
            'plane_id' => 2,
            'date' => '2025-02-06 12:30',
            'departure' => 'London',
            'arrival' => 'New York',
            'plane_id' => 2,
            'available'=> false,
            'image' => 'https://i0.wp.com/elcalderoviajero.com/wp-content/uploads/2019/06/nueva-york-07.jpg?fit=750%2C500&ssl=1',

        ]);

        Flight::create([
            'plane_id' => 1,
            'date' => '2025-02-07 13:00',
            'departure' => 'Spain',
            'arrival' => 'Italy',
            'plane_id' => 1,
            'available'=> true,
            'image' => 'https://tourismmedia.italia.it/is/image/mitur/1600X1000_6_posti_piu_belli_d_italia_da_non_perdere_hero?wid=2160&hei=1320&fit=constrain,1&fmt=webp',
        ]);
    }
}
