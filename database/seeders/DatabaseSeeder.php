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

        User::factory(5)->create();

        // User::factory()->create([
        //     [
        //         'name' => 'Ms. Rebekak Roberts',
        //         'email' => 'rebekah@gmail.com'
        //     ],
        //     [
        //         'name' => 'Mr. Chelsey Murphy Jr.',
        //         'email' => 'chelsey@gmail.com'
        //     ],
        //     [
        //         'name' => 'Mrs. Grace Carter',
        //         'email' => 'grace@gmail.com'
        //     ],
        //     [
        //         'name' => 'Reynold Mante',
        //         'email' => 'reynold@gmail.com'
        //     ],
        //     [
        //         'name' => 'Graham Ernest',
        //         'email' => 'graham@gmail.com'
        //     ],
        // ]);
    }
}
