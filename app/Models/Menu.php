<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class Menu extends Model
{
    use HasFactory;
    protected $fillable=['type','start_date','end_date','restaurant_id'];
    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'restaurant_id','id');
    }
    public function menuItem(){
        return $this->hasMany(MenuItem::class);
    }

}
