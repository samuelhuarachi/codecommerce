<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Mae;

class MaesController extends Controller
{
	private $maeModel;

	public function __construct(Mae $maeModel) {
		$this->maeModel = $maeModel;

	}

    public function index() {
    	$maes = $this->maeModel->all();

    	return view('maes.index', compact('maes'));
    }

    public function create() {
    	return view('maes.create');
    }

    public function store(Requests\MaeRequest $request) {
        $input = $request->all();

        $mae = $this->maeModel->fill($input);
        $mae->save();

        return redirect()->route('maes');
    }

    public function destroy($id) {
        $this->maeModel->find($id)->delete();

        return redirect()->route('maes');
    }

    public function edit($id)
    {
        $mae = $this->maeModel->find($id);
        return view('maes.edit', compact('mae'));
    }

    public function update(Requests\MaeRequest $request, $id) {
        $this->maeModel->find($id)->update($request->all());
        return redirect()->route('maes');
    }
}
