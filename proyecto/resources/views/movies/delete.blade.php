<?php
/** @var \App\Models\Movie $movie  */
?>

<x-layout>

    <x-slot:title>Detalle de la película {{ $movie->title }}</x-slot:title>

    <h1 class="mb-3">Confirmación para eliminar {{ $movie->title }}</h1>

    <p class="mb-1">Estás a punto de <b>eliminar</b> la película <b>{{ $movie->title }}</b>.</p>
    <p>¿Quiere proceder con la eliminación?</p>

    <form
        action="{{ route('movies.destroy', ['id' => $movie->movie_id]) }}"
        method="POST"
        class="mb-3"
    >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Si, eliminar {{ $movie->title }}</button>
    </form>

    {{-- TODO: Agregar la imagen para la portada --}}
    <dl class="mb-3">
        <dt>Precio</dt>
        <dd>${{ $movie->price }}</dd>
        <dt>Fecha de Estreno</dt>
        <dd>{{ $movie->release_date }}</dd>
    </dl>

    <hr class="mb-3">
    <h2 class="mb-3"> Sinopsis </h2>
    <p>{{ $movie->synopsis }}</p>


</x-layout>
