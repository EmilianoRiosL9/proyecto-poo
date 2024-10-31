<?php

namespace App\Http\Controllers;

use App\Models\Teamwork;
use App\Models\Employee; // Asegúrate de importar el modelo de Employee
use App\Models\Vehicle; // Asegúrate de importar el modelo de Vehicle
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TeamworkRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TeamworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $teamworks = Teamwork::with(['employee1', 'employee2', 'vehicle'])->paginate(5);

        return view('teamwork.index', compact('teamworks'))
            ->with('i', ($request->input('page', 1) - 1) * $teamworks->perPage());
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $employees = Employee::all(); // Obtiene todos los empleados
        $vehicles = Vehicle::all(); // Obtiene todos los vehículos
        $teamwork = new Teamwork(); // Crea una nueva instancia del modelo Teamwork

        return view('teamwork.create', compact('teamwork', 'employees', 'vehicles')); // Pasa los datos a la vista
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamworkRequest $request): RedirectResponse
    {
        Teamwork::create($request->validated());

        return Redirect::route('teamworks.index')
            ->with('success', 'Teamwork created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $teamwork = Teamwork::find($id);

        return view('teamwork.show', compact('teamwork'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $teamwork = Teamwork::find($id);

        return view('teamwork.edit', compact('teamwork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamworkRequest $request, Teamwork $teamwork): RedirectResponse
    {
        $teamwork->update($request->validated());

        return Redirect::route('teamworks.index')
            ->with('success', 'Teamwork updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Teamwork::find($id)->delete();

        return Redirect::route('teamworks.index')
            ->with('success', 'Teamwork deleted successfully');
    }
}
