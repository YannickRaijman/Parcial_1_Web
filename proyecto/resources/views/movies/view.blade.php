<?php
/** @var \App\Models\Movie $movie  */
?>

<x-layout>

    <x-slot:title>Detalle de la película {{ $movie->title }}</x-slot:title>

    <h1 class="mb-3">{{ $movie->title }}</h1>

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
