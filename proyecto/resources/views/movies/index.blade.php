<?php
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Movie[] $movies  */
?>
<x-layout>

    <x-slot:title>Listado de Películas</x-slot:title>

    <h1 class="mb-3">Listado de Películas</h1>

    @auth
        <p class="mb-3"><a href="{{ route('movies.create') }}">Publicar una Película</a></p>
    @endauth

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Precio</th>
                <th>Fecha de Estreno</th>
                <th>Acciones</th>
            </tr>
        </thead>
            @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->movie_id }}</td>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->price }}</td>
                <td>{{ $movie->release_date }}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a
                            href="{{ route('movies.view', ['id' => $movie->movie_id]) }}"
                            class="btn btn-primary"
                        >Ver</a>
                        @auth
                            <a
                                href="{{ route('movies.edit', ['id' => $movie->movie_id]) }}"
                                class="btn btn-secondary"
                            >Editar</a>

                            <a
                                href="{{ route('movies.delete', ['id' => $movie->movie_id]) }}"
                                class="btn btn-danger"
                            >Eliminar</a>
                        @endauth


                    </div>
                </td>
            </tr>
            @endforeach
    </table>

</x-layout>
