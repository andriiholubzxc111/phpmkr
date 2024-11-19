<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Закриваємо доступ для неавторизованих
    }

    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        // Логіка збереження нового транспортного засобу
    }

    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        // Логіка оновлення транспортного засобу
    }

    public function destroy(Vehicle $vehicle)
    {
        // Логіка видалення транспортного засобу
    }
    public function addCredits(Request $request)
    {
        $user = auth()->user(); // Отримуємо авторизованого користувача
        $user->credits += $request->input('credits'); // Додаємо кредити
        $user->save();

        return redirect()->back()->with('success', 'Credits added successfully.');
    }
}
