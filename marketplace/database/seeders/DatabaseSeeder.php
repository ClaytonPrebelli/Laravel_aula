<?php

namespace Database\Seeders;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    use hasFactory;

    public function run()
    {
        $this->call(UsersTableSeeder::class);
        // \App\Models\User::factory()->create();

    }

}
