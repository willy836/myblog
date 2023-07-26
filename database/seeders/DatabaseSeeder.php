<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();

        // User::factory(5)->create();

        User::factory()->createMany([
            [
                'name' => 'Ms. Rebekah Roberts',
                'username' => 'rebekah',
                'email' => 'rebekah@gmail.com'
            ],
            [
                'name' => 'Mr. Chelsey Murphy Jr.',
                'username' => 'chelsey',
                'email' => 'chelsey@gmail.com'
            ],
            [
                'name' => 'Mrs. Grace Carter',
                'username' => 'grace',
                'email' => 'grace@gmail.com'
            ],
            [
                'name' => 'Reynold Mante',
                'username' => 'reynold',
                'email' => 'reynold@gmail.com'
            ],
            [
                'name' => 'Graham Ernest',
                'username' => 'graham',
                'email' => 'graham@gmail.com'
            ],
        ]);
    }
}
