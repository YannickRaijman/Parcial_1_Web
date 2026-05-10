<x-layout title="Editar Servicio">
    <h1>Editar: {{ $service->title }}</h1>

    <form action="{{ route('services.update', ['id' => $service->service_id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $service->title) }}">
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $service->description) }}</textarea>
            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $service->price) }}">
            @error('price') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Servicio</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</x-layout>