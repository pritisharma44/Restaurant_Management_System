<?php

namespace App\Models;
use App\Http\Controllers\RestaurantController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable=['name','description','image','phone','address'];
    public function menu(){
        return $this->hasMany(Menu::class);
    }
}
