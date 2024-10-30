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
        $packages = Package::all();
        return view('admin.packages.packages', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.packages.add-package');
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
            'description' => 'required|string|max:16777215',
            'short_description' => 'required|string',
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096', // Adjust as needed
        ]);



        $validatedData['slug'] = Str::slug($validatedData['title'], '-');

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = 'storage/' . $imagePath;
        }


        // dd($validatedData);
        // Save data to the database
        Package::create($validatedData);

        // return response()->json(['message' => 'Data saved successfully'], 201);
        return redirect('/ru/admin/packages')->with('success', 'New package created');
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
    public function edit(string $lang, string $id)
    {
        $package = Package::find($id);
        return view('admin.packages.edit-package', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $lang, string $id)
    {

        $package = Package::find($id);
        $validatedData = $request->validate([
            'price_per_person' => 'required|numeric',
            'location' => 'required|string|max:255',
            'rating' => 'required|numeric|min:1|max:5',
            'description' => 'required|string',
            'short_description' => 'required|string',
            'title' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:4096', // Adjust as needed
        ]);

        $package->update($validatedData);
        return redirect('/ru/admin/packages')->with('success', 'Package has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
