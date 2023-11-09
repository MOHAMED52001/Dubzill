<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Http\Resources\BrandProductsResource;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;

class BrandController extends Controller
{
    use HttpResponses;

    public function index(Request $request)
    {
        $searchTerm = $request->query('searchTerm');

        if ($searchTerm) return $this->search($request);

        $brands = Brand::paginate(50);
        return view('admin.brands.index', compact('brands'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->query('searchTerm');
        $brands = Brand::where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', "%$searchTerm%")
                    ->orWhere('origin', 'like', "%$searchTerm%");
            })
            ->paginate(50)
            ->appends(['searchTerm' => $searchTerm]);

        return view('/admin/brands.index', compact('searchTerm', 'brands'));
    }

    public function getBrand($id)
    {
        $categories = Category::all();
        $brand = Brand::find($id);
        $products = $brand->products()->paginate(10);
        return view('user.brand-data', compact('categories', 'brand', 'products'));
    }

    public function showApi($id)
    {
        $brand  = Brand::find($id);
        return $this->success(new BrandProductsResource($brand), 'Request sent successfully.', 200);
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'origin' => 'required',
        ]);

        Brand::create($validatedData);

        return redirect()->route('brands.index')->with('success', 'Brand created successfully');
    }

    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'origin' => 'required',
        ]);

        $brand->update($validatedData);

        return redirect()->route('brands.index')->with('success', 'Brand updated successfully');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully');
    }
}
