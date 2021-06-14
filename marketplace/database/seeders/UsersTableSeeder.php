<?php

namespace Database\Seeders;

use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::factory(\App\User::class,40)->create()->each(function($user){
            $user->store()->save(Store::factory(\App\Store::class)->make());

        });
    }
}
