<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        // Trae todos los servicios de la base de datos
        $services = Service::all();
        return view('services.index', ['services' => $services]);
    }

    public function create() {
        // Muestra el formulario
        return view('services.create');
    }

    public function store(Request $request) {
        // Valida los datos y los guarda
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Service::create($request->all());

        return redirect()
            ->route('services.index')
            ->with('feedback.message', 'El servicio se creó correctamente.');
    }
}