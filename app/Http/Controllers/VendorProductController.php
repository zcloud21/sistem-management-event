<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\VendorProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if (!$user->hasRole('Vendor')) {
            abort(403);
        }

        $vendor = Vendor::where('user_id', $user->id)->firstOrFail();
        $products = $vendor->products()->orderBy('created_at', 'desc')->paginate(10);

        return view('vendor.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendor.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $vendor = Vendor::where('user_id', $user->id)->firstOrFail();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'nullable|string|max:100',
        ]);

        $vendor->products()->create($validated);

        return redirect()->route('vendor.products.index')
            ->with('success', 'Layanan berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = Auth::user();
        $vendor = Vendor::where('user_id', $user->id)->firstOrFail();
        $product = $vendor->products()->findOrFail($id);

        return view('vendor.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $vendor = Vendor::where('user_id', $user->id)->firstOrFail();
        $product = $vendor->products()->findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'nullable|string|max:100',
        ]);

        $product->update($validated);

        return redirect()->route('vendor.products.index')
            ->with('success', 'Layanan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Auth::user();
        $vendor = Vendor::where('user_id', $user->id)->firstOrFail();
        $product = $vendor->products()->findOrFail($id);

        $product->delete();

        return redirect()->route('vendor.products.index')
            ->with('success', 'Layanan berhasil dihapus!');
    }
}
