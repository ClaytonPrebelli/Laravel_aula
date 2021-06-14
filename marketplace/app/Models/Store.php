<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','phone','mobile_phone','slug'];

    public function user(){
          return  $this->belongsTo(User::class);
        }

        public function products(){
            return $this->hasMany(Product::class);
        }
}
