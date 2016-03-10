<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Product;
use CodeCommerce\Category;

class ProductsController extends Controller
{
    protected $productModel;

    public function __construct(Product $product) {
        $this->productModel = $product;
    }

    public function index()
    {
        $allProdutos = $this->productModel->paginate(10);
        return view('produtos.index', compact('allProdutos'));
    }

    public function create(Category $category) {
        $categories = $category->lists('name', 'id');

        return view('produtos.create', compact('categories'));
    }

    public function store(Requests\ProductRequest $request) {
        $input = $request->all();

        $product = $this->productModel->fill($input);
        $product->save();
        return redirect()->route('products');
    }

    public function edit($id, Category $category) {
        $categories = $category->lists('name', 'id');
        $product = $this->productModel->find($id);
        return view('produtos.editar', compact('product', 'categories'));
    }

    public function update(Requests\ProductRequest $request, $id) {
        $input = $request->all();
        $input['featured'] = $request->get('featured') ? true : false;
        $input['recommended'] = $request->get('recommended') ? true : false;

        $this->productModel->find($id)->update($input);

        return redirect()->route('products');
    }

    public function destroy($id) {
        $this->productModel->find($id)->delete();
        return redirect()->route('products');
    }
}
