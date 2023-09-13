<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Requests\RestaurantRequest;
class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = Restaurant::all();
        return view('restaurants.restaurantDetails', ['showData' => $restaurant]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.restaurant', ['restaurant' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestaurantRequest $request)
    {
        // $picture=$request->file('image')->store('public/images/restaurant_image');
        // $picture=str_replace("public/","",$picture);
        $validated = $request->validated();
        $values = array();

        if ($request->hasFile('image')) {
            $image = UplaodImages($request->image, 'restaurant_image');

            $values['image'] = $image;
        }
        $values['name'] = $request->name;
        $values['description'] = $request->description;
        $values['phone'] = $request->phone;
        $values['address'] = $request->address;

        Restaurant::create($values);
        return redirect("/restaurants");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurants.restaurantView',['viewData'=>$restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurants = Restaurant::find($id);
        return view('restaurants.restaurant', ['restaurant' => $restaurants]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RestaurantRequest $request, $id)
    {
        // $picture=$request->file('image')->store('public/images/restaurant_image');
        // $picture=str_replace("public/","",$picture);

        $validated = $request->validated();
        $values = array();

        $oldValue = Restaurant::where('id', $id)->first();
        $image = $oldValue->image;
        if ($request->hasFile('image')) {

            if ($oldValue->image) {
                $path = public_path('upload/restaurant_image/') . $oldValue->image;
                unlink($path);
            }
            $image = UplaodImages($request->image, 'restaurant_image');
        }
        $values['image'] = $image;
        $values['name'] = $request->name;
        $values['description'] = $request->description;
        $values['phone'] = $request->phone;
        $values['address'] = $request->address;

        $restaurant = Restaurant::find($id)->update($values);
        return redirect("/restaurants");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->delete($id);
        return redirect('/restaurants');
    }
}
