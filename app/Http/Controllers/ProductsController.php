<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Product;

class ProductsController extends Controller
{
    protected $productModel;

    public function __construct(Product $product) {
        $this->productModel = $product;
    }

    public function index()
    {
        $allProdutos = $this->productModel->all();
        return view('produtos.index', compact('allProdutos'));
    }

    public function create() {
        return view('produtos.create');
    }

    public function store(Requests\ProductRequest $request) {
        $input = $request->all();
        $product = $this->productModel->fill($input);
        $product->save();
        return redirect()->route('products');
    }

    public function edit($id) {
        $product = $this->productModel->find($id);
        return view('produtos.editar', compact('product'));
    }

    public function update(Requests\ProductRequest $request, $id) {
        $this->productModel->find($id)->update($request->all());
        return redirect()->route('products');
    }

    public function destroy($id) {
        $this->productModel->find($id)->delete();
        return redirect()->route('products');
    }
}
