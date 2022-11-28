<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Exceptions\Handler;
use Symfony\Component\ErrorHandler\Error\FatalError;

class ProductController extends BackofficeController
{
    public function index()
    {
        return view('backoffice.product.index', [
            'css' => 'backoffice',
            'products' => Product::query()
                ->get()
        ]);
    }

    public function create(Request $request)
    {
        if (!Product::create($request->post())){
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

    public function delete($id)
    {
        Product::query()
            ->find($id)
            ->delete();
        return redirect(route('bo_product'));
    }
}
