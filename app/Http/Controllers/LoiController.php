<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoiRequest;
use App\Loi;

class LoiController extends Controller
{
    public function index()
    {
        $lois = Loi::latest()->get();

        return view('lois.index', compact('lois'));
    }

    public function create(){
        return view('lois.create');
    }

    public function store(LoiRequest $request)
    {
        $loi = Loi::create($request->all());

        return redirect()->route('lois.index');
    }

    public function show($id)
    {
        $loi = Loi::findOrFail($id);
        
        return view('lois.edit', compact('loi'));
    }

    public function edit($id)
    {
        $loi = Loi::findOrFail($id);
        return view('lois.edit', compact('loi'));
    }

    public function update(LoiRequest $request, $id)
    {
        $loi = Loi::findOrFail($id);
        $loi->update($request->all());

        return redirect()->route('lois.index');
    }

    public function destroy($id)
    {
        Loi::destroy($id);

        return redirect()->route('lois.index');
    }
}