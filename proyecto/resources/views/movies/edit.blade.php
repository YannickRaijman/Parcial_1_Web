<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Models\Movie $movie */
?>
<x-layout>
    <x-slot:title>Editar La Película {{ $movie->title }}</x-slot:title>

    <h1 class="mb-3" >Editar {{ $movie->title }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            La informacion ingresada contiene errores. <br>
            Por favor, revisá los campos y probá de nuevo.
        </div>
    @endif


    <form
        action="{{ route('movies.update', ['id' => $movie->movie_id]) }}"
        method="POST"
    >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label" for="title">Título</label>
            <input
                type="text"
                id="title"
                name="title"
                class="form-control @error('title') is-invalid @enderror"
                @error('title') aria-invalid="true" aria-errormessage="error-title" @enderror
                value="{{ old('title', $movie->title) }}"
            >
            @error('title')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Precio</label>
             <input
                type="text"
                id="price"
                name="price"
                class="form-control @error('price') is-invalid @enderror"
                @error('price') aria-invalid="true" aria-errormessage="error-price" @enderror
                value="{{ old('price', $movie->price) }}"
            >
            @error('title')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="release_date">Fecha de Estreno</label>
            <input
                type="text"
                id="release_date"
                name="release_date"
                class="form-control @error('release_date') is-invalid @enderror"
                @error('release_date') aria-invalid="true" aria-errormessage="error-release_date" @enderror
                value="{{ old('release_date', $movie->release_date) }}"
            >
            @error('release_date')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="synopsis">Sinopsis</label>
            <textarea
                id="synopsis"
                name="synopsis"
                class="form-control @error('synopsis') is-invalid @enderror"
                @error('synopsis') aria-invalid="true" aria-errormessage="error-synopsis" @enderror

            >{{ old('synopsis', $movie->synopsis) }}</textarea>
            @error('synopsis')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
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
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</x-layout>
