<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends BackofficeController
{
    public function index()
    {
        return view('backoffice.product.index', [
            'css' => 'backoffice',
            'products' => Product::query()->with('category')->get()
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'id' => 'required|integer',
            'description' => 'required',
            'price' => 'required|max_digits:5',
            'available' => 'required|max_digits:1',
            'category_id' => 'required|integer',
            'updated_at' => 'required|date',
            ]);

        if (!Product::create($request->post())) {
            abort(404);
        }
        return redirect(route('bo_product'));
    }

    public function edit($id)
    {
        return view('backoffice.product.pEdit', [
            'css' => 'backoffice',
            'product' => Product::query()
                ->where('id', $id)
                ->firstOrFail()
        ]);
    }

    public function update($id, Request $request)
    {
        $product = Product::query()->find($id);
        $product->fill($request->post());
        if (!$product->save()) {
            abort(404);
        }
        return redirect(route('bo_product'));
    }

    public function destroy($id)
    {
        Product::query()
            ->find($id)
            ->delete();
        return redirect(route('bo_product'));
    }
}
