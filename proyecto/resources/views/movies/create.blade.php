<x-layout>
    <x-slot:title>Publicar una Película</x-slot:title>

    <h1 class="mb-3" >Publicar una Película</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            La informacion ingresada contiene errores. <br>
            Por favor, revisá los campos y probá de nuevo.
        </div>
    @endif


    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="title">Título</label>
            <input
                type="text"
                id="title"
                name="title"
                class="form-control @error('title') is-invalid @enderror"
                @error('title') aria-invalid="true" aria-errormessage="error-title" @enderror
                value="{{ old('title') }}"
            >
            @error('title')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Precio</label>
            <input type="text" id="price" name="price" class="form-control">
            @if ($errors->has('price'))
                <div class="text-danger">{{ $errors->first('price') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label" for="release_date">Fecha de Estreno</label>
            <input type="date" id="release_date" name="release_date" class="form-control">
            @if ($errors->has('release_date'))
                <div class="text-danger">{{ $errors->first('release_date') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label" for="synopsis">Sinopsis</label>
            <textarea id="synopsis" name="synopsis" class="form-control"></textarea>
            @if ($errors->has('synopsis'))
                <div class="text-danger">{{ $errors->first('synopsis') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label" for="cover">
                Portada <span class="small">(Opcional)</span>
            </label>
            <input type="file" id="cover" name="cover" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label" for="cover_description">Título</label>
            <input type="text" id="cover_description" name="cover_description" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>

</x-layout>
