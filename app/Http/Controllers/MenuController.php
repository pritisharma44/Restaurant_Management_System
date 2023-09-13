<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Restaurant;
use App\Http\Requests\MenuRequest;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu=Menu::with('restaurant')->get();
        return view('menus.menuDetails',['showData'=>$menu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurant=Restaurant::all();
        return view('menus.menu',['Data'=>$restaurant,'menu'=>null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $validated = $request->validated();
        $values=array();
        $values['type'] = $request->type;
        $values['start_date'] = $request->start_date;
        $values['end_date'] = $request->end_date;
        $values['restaurant_id'] = $request->restaurant_name;
       Menu::create($values);
        return redirect("/menus");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus=Menu::find($id);
        $restaurant=Restaurant::all();
        return view('menus.menu',['menu'=>$menus,'Data'=>$restaurant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id)
    {
        $validated = $request->validated();
        $values=array();
        $values['type'] = $request->type;
        $values['start_date'] = $request->start_date;
        $values['end_date'] = $request->end_date;
        $values['restaurant_id'] = $request->restaurant_name;
       $menu=Menu::find($id)->update($values);
        return redirect("/menus");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu=Menu::find($id);
        $menu->delete($id);
        return redirect("/menus");
    }
}
