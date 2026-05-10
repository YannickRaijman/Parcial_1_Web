<x-layout title="Confirmar Eliminación">
    <div class="alert alert-danger">
        <h1>¿Estás seguro que querés eliminar el servicio "{{ $service->title }}"?</h1>
        <p>Esta acción no se puede deshacer.</p>

        <form action="{{ route('services.destroy', ['id' => $service->service_id]) }}" method="POST" class="mt-4">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Sí, Eliminar</button>
            <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-layout>