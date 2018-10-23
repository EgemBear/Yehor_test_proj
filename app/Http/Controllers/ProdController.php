<?php

namespace App\Http\Controllers;

use App\Prod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProdController extends Controller
{
    public function index()
    {
        $production= DB::table('production')->get();
        return view('table_all', ['production'=> $production]);
    }

    public function create()
    {
        return view('create');

    }

    public function store(Request $request, Prod $newProd)
    {
        $newProd->name = $request->name;
        $newProd->text = $request->text;
        $newProd->price = $request->price;
        $path = $request->file('image')->store('', 'public');
        $newProd->path_photo = $path;

        $newProd->save();
        return redirect()->route('production.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $prod = Prod::findOrFail($id);
        return view('edit', compact('prod'));
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

        $prod = Prod::findOrFail($id);

        $prod->update($request->all());


        return redirect()->route('production.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Prod $deleteProd)
    {
        $prod = Prod::findOrFail($id);
        $path_photo =$prod->path_photo;

        File::delete($path_photo);

        $deleteProd ->destroy($id);
        return redirect()->route('production.index');

    }
}



