<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class CarController extends Controller
{
    public function index(): Factory | View | Application
    {
        return view('car.index');
    }

    public function create(): Factory | View| Application
    {
        return view('car.create');
    }

    public function show(Car $car): Factory | View | Application
    {
        return view('car.show', compact('car'));
    }

    public function edit(Car $car): Factory | View | Application
    {
        return view('car.edit', compact('car'));
    }

    public function destroy(Car $car): RedirectResponse
    {
        $car->delete();

        return redirect()->route('cars.index');
    }
}
