<?php

namespace App\Http\Controllers;

use App\Http\Requests\AAARequest;
use App\AAA;

class AAAController extends Controller
{
    public function index()
    {
        $aaas = AAA::latest()->get();

        return view('aaas.index', compact('aaas'));
    }

    public function create(){
        return view('aaas.create');
    }

    public function store(AAARequest $request)
    {
        $aaa = AAA::create($request->all());

        return redirect()->route('aaas.index');
    }

    public function show($id)
    {
        $aaa = AAA::findOrFail($id);
        
        return view('aaas.edit', compact('aaa'));
    }

    public function edit($id)
    {
        $aaa = AAA::findOrFail($id);
        return view('aaas.edit', compact('aaa'));
    }

    public function update(AAARequest $request, $id)
    {
        $aaa = AAA::findOrFail($id);
        $aaa->update($request->all());

        return redirect()->route('aaas.index');
    }

    public function destroy($id)
    {
        AAA::destroy($id);

        return redirect()->route('aaas.index');
    }
}