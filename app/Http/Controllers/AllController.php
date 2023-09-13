<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
use App\Models\Menu;
use App\Models\MenuItem;

class AllController extends Controller
{
    public function dashboard()
    {
        $count1=Restaurant::count();
        $count2=Menu::count();
        $count3 = MenuItem::count();
        return view('admin.dashboard',compact('count1','count2','count3'));
    }
    public function index(){
        $restaurant=Restaurant::all();
      
         return view('all.allrestaurant',['data'=>$restaurant]);
    }
    public function show($id){

        $restaurant=Restaurant::find($id);
        return view('all.showRestaurant',['restaurantData'=>$restaurant]);
    }
    public function details(){
      //  $restaurant=Restaurant::find($id);
        $menu=Menu::all();
        return view('all.viewData');
    }
    public function showItem($id){
        $item=Menu::with('menuItem')->get();
        $item=Menu::find($id);
        $result=$item->menuItem;
        //dd($result);
        return view('all.showItems',['items'=>$result]);
    }


    //  For Learning 
    public function demoTest()
    {
        return view('demo.test');
    }
}
