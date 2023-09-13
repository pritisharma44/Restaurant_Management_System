<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\Menu;
use App\Models\Restaurant;
use App\Http\Requests\MenuItemRequest;
class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item=MenuItem::with('menu')->get();
        return view('items.itemDetails',['showData'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus=Menu::all();
        return view('items.item',['Menu'=>$menus,'item'=>null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuItemRequest $request)
    {
        $validated = $request->validated();
        $values=array();
        if ($request->hasFile('image')) {
            $image = UplaodImages($request->image, 'menuItem_image');

            $values['image'] = $image;
        }
        $values['name'] = $request->name;
        $values['menu_id'] = $request->menu_id;
        $values['price'] = $request->price;
        $values['image'] = $picture;
        $values['discount'] = $request->discount;
       
      MenuItem::create($values);
        return redirect("/items");
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
        
        $menus=Menu::all();
        $items=MenuItem::find($id);
        return view('items.item',['Menu'=>$menus,'item'=>$items]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuItemRequest $request, $id)
    {
        $validated = $request->validated();
        $values=array();

        $oldValue = MenuItem::where('id', $id)->first();
        $image = $oldValue->image;
        if ($request->hasFile('image')) {

            if ($oldValue->image) {
                $path = public_path('upload/menuItem_image/') . $oldValue->image;
                unlink($path);
            }
            $image = UplaodImages($request->image, 'menuItem_image');
        }
        $values['image'] = $image;
        $values['name'] = $request->name;
        $values['menu_id'] = $request->menu_id;
        $values['price'] = $request->price;
        $values['discount'] = $request->discount;
       
      $item=MenuItem::find($id)->update($values);
        return redirect("/items");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items=MenuItem::find($id);
        $items->delete($id);
        return redirect("/items");
    }
}
