<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.creat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Movie::create($request->all());


        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $movie = Movie::findOrFail($id);

        return view('movies.details', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        $movie->update($request->all());

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Movie::destroy($id);

        return redirect()->route('movies.index');
    }
}
