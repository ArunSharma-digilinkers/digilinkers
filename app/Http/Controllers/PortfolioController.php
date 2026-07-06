<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Portfolios = Portfolio::all();

        return view('admin.portfolios.index', compact('Portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        'title' => 'required|string',
        'link'  => 'nullable|url', 
        'type'  => 'required|in:website,design',
    ]);

    $filename = null;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . rand(0, 9999) . '.' . $extension;
        $file->storeAs('portfolio', $filename, 'public');
    }

    Portfolio::create([
        'image' => $filename,
        'title' => $request->title,
        'link'  => $request->link, 
        'type'  => $request->type,
    ]);

    return redirect('/admin/portfolios/')->with('message', 'Portfolio added successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        
        $portfolio->delete();

        return redirect('/admin/portfolios/');
    }
}
