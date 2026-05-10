<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $services = Service::all();
        return view('services.index', ['services' => $services]);
    }

    public function create() {
        return view('services.create');
    }

    public function store(Request $request) {
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

    public function edit(int $id) {
        $service = Service::findOrFail($id);
        return view('services.edit', ['service' => $service]);
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $service = Service::findOrFail($id);
        $service->update($request->all());

        return redirect()
            ->route('services.index')
            ->with('feedback.message', 'El servicio se actualizó correctamente.');
    }

    public function delete(int $id) {
        $service = Service::findOrFail($id);
        return view('services.delete', ['service' => $service]);
    }

    public function destroy(int $id) {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()
            ->route('services.index')
            ->with('feedback.message', 'El servicio se eliminó correctamente.');
    }
}