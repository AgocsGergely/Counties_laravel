<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255',],
            ['zip_code' => 'required|string|max:10',],
            ['id_county' => 'required|exists:counties,id',],
            ['population' => 'required|integer|min:0',
            ]);

            $City = new City();
            $City->name = $request->input('name');
            $City->zip_code = $request->input('zip_code');
            $City->id_county = $request->input('id_county');
            $City->population = $request->input('population');
            $City->save();

            return redirect()->route('cities.index')->with('success', 'Város sikeresen hozzáadva!');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $city = City::find($id);
        return view('cities.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $city = City::find($id);
        return view('cities.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255',],
            ['zip_code' => 'required|string|max:10',],
            ['id_county' => 'required|exists:counties,id',],
            ['population' => 'required|integer|min:0',
            ]);

            $City = City::find($id);
            $City->name = $request->input('name');
            $City->zip_code = $request->input('zip_code');
            $City->id_county = $request->input('id_county');
            $City->population = $request->input('population');
            $City->save();

            return redirect()->route('cities.index')->with('success', 'Város sikeresen frissítve!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $City = City::find($id);
        $City->delete();

        return redirect()->route('cities.index')->with('success', 'Város sikeresen törölve!');
    }
}
