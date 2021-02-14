<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 10;

        // optimizing the seeding time
        for($count=1; $count<=10; $count++) {
            User::factory()
                ->count(10000)
                ->create();
        }
    }
}
