<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Comic::all();

        return view("data.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("data.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $data=$request->validate([
            "title"=>"required|min:5|max:255",
            "description"=>"required|min:5",
            "price"=>"required"
        ]);
        dump($data);

        $newCartoon = new Comic();

        dump($newCartoon);

        $newCartoon->title = $data['title'];
        dump($data['title']);
        $newCartoon->description =$data['description'];
        dump($data['description']);
        $newCartoon->thumb = $data['thumb'];
        dump($data['thumb']);
        $newCartoon->price=$data['price'];
        $newCartoon->series=$data['series'];
        $newCartoon->sale_date=$data['sale_date'] = date('Y-m-d H:i:s', strtotime($data['sale_date']));
        $newCartoon->type=$data['type'];

        $newCartoon->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // reading data of id
        $data = Comic::findOrFail($id);

        return view("data.show",[
            "data"=> $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Comic::findOrfail($id);

        return view('data.edit', compact('data'));
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
        $data = Comic::findOrfail($id);
        $dates = $request->validate([
            "title"=>"required|min:5|max:255",
            "description"=>"required|min:5",
            "price"=>"required"
        ]);
        // dd($dates);

        $data->update($dates);

        return redirect()->route('data.show', $data->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
