<x-layout title="Servicios">
    <h1>Nuestros Servicios</h1>

    @auth
    <div class="mb-3">
        <a href="{{ route('services.create') }}" class="btn btn-success">Crear Nuevo Servicio</a>
    </div>
    @endauth

    <div class="row">
        @foreach($services as $service)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h3>{{ $service->title }}</h3>
                    <p>{{ $service->description }}</p>
                    <p><strong>${{ $service->price }}</strong></p>

                    @auth
                    <div class="mt-3">
                        <a href="{{ route('services.edit', ['id' => $service->service_id]) }}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{ route('services.delete', ['id' => $service->service_id]) }}" class="btn btn-danger btn-sm">Eliminar</a>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>