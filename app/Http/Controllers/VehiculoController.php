<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();

        return response()->json($vehiculos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'matricula' => [
                'required',
                'string',
                'max:8',
                'regex:/^[0-9]{4}\s?[BCDFGHJKLMNPRSTVWXYZ]{3}$/i',
                'unique:vehiculos,matricula',
            ],
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio_fabricacion' => 'required|date',
            'disponibilidad' => 'required|in:si,no',
            'combustible' => 'required|in:hibrido,diesel,gasolina,electrico',
        ]);

        // Normalizamos la matrícula a mayúsculas y sin espacios extra
        $validated['matricula'] = strtoupper(preg_replace('/\s+/', ' ', $validated['matricula']));

        $vehiculo = Vehiculo::create($validated);

        return response()->json($vehiculo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
        return response()->json($vehiculo);
    }

    /**
     * Update the specified resource in storage.
     * No permitimos cambiar la matrícula (primary key).
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $validated = $request->validate([
            'marca' => 'sometimes|required|string|max:255',
            'modelo' => 'sometimes|required|string|max:255',
            'anio_fabricacion' => 'sometimes|required|date',
            'disponibilidad' => 'sometimes|required|in:si,no',
            'combustible' => 'sometimes|required|in:hibrido,diesel,gasolina,electrico',
        ]);

        $vehiculo->update($validated);

        return response()->json($vehiculo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();

        return response()->json(['message' => 'Vehículo eliminado correctamente']);
    }
}
