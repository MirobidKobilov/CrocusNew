<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.packages');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add-package');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'price_per_person' => 'required|numeric',
            'location' => 'required|string|max:255',
            'rating' => 'required|numeric|min:1|max:5',
            'description' => 'required|string',
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096', // Adjust as needed
        ]);

        // $validatedData['slug'] = Str::slug($validatedData['title'], '-');

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = 'storage/' . $imagePath;
        }


        // dd($validatedData);
        // Save data to the database
        Package::create($validatedData);

        return response()->json(['message' => 'Data saved successfully'], 201);
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
    public function destroy(string $id)
    {
        //
    }
}
