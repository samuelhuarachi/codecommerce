<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;

class CategoriesController extends Controller
{
    protected $categoryModel;

    public function __construct(Category $category) {
        $this->categoryModel = $category;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCategories = $this->categoryModel->all();

        return view('categorias.index', compact('allCategories'));
    }

    public function create() {
        return view('categorias.create');
    }

    public function edit($id) 
    {
        $findCategory = $this->categoryModel->find($id);

        return view('categorias.edit', compact('findCategory'));
    }

    public function store(Requests\CategoryRequest $request) {
        $input = $request->all();
        $category = $this->categoryModel->fill($input);
        $category->save();
        return redirect()->route('categories');
    }

    public function update(Requests\CategoryRequest $request, $id) {
        $this->categoryModel->find($id)->update($request->all());
        return redirect()->route('categories');
    }

    public function destroy($id) {
        $this->categoryModel->find($id)->delete();
        return redirect()->route('categories');
    }

}
