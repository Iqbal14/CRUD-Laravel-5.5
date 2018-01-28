<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item; // jangan lupa ditambahkan ini
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        $items=Item::all(); //mengambil data di db
        return view('items.index',['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'title' => 'required|max:255',
          'description' => 'required|max:5000'
        ]);

          $item = new Item();
          $item->title = $request->title;
          $item->description = $request->description;
          $item->save();
          return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('items.show',['item'=> $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.update', ['item'=> $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $this->validate($request,[
          'title' => 'required|max:255',
          'description' => 'required|max:5000'
        ]);
            $item->title = $request->title;
            $item->description = $request->description;

            $item->update();

            return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $item = Item::find($id)->delete();
          return redirect()->route('items.index');
    }
}
