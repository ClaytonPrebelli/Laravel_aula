<?php

namespace Database\Seeders;


use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

            User::factory(40)->create()->each(function ($user) {
                $user->store()->save(Store::factory()->make());

            });

    }
}
