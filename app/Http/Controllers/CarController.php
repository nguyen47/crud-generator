<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();

        return view('cars.index', compact('cars'));
    }

    public function create(){
        return view('cars.create');
    }

    public function store(CarRequest $request)
    {
        $car = Car::create($request->all());

        return redirect()->route('cars.index');
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        
        return view('cars.edit', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    public function update(CarRequest $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());

        return redirect()->route('cars.index');
    }

    public function destroy($id)
    {
        Car::destroy($id);

        return redirect()->route('cars.index');
    }
}