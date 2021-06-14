<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\Store;
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
        $stores = Store::all();
        foreach($stores as $store){
            $store->products()->save(Product::factory()->make());
        }
    }
}
