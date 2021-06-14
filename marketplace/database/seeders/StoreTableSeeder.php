<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $fillable = ['name','description','phone','mobile_phone','slug'];
    public function run()
    {
        //
    }
}
