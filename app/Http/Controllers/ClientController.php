<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Clients = Client::all();

        return view('admin.clients.index', compact('Clients'));
    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()    
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = NULL;
        $path = NULL;

        if($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . rand(0, 9999) . '.' . $extension;
            $path = $file->storeAs('client', $filename, 'public');
        }

        $request->validate([
            'image'         => 'image|file|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $Clients = new Client;
        $Clients->image = $filename;

        $Clients = Client::create([
            'image'    => $filename,
        ]);

        return redirect('/admin/clients/')->with('message', 'Client added successfully');
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
    public function destroy(Client $client)
    {

        $client->delete();

        return redirect('/admin/clients/');
    }
}
