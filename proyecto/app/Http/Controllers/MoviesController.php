<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $allMovies = Movie::all();

        return view('movies.index',[
            'movies' => $allMovies
        ]);
    }

    public function view(int $id)
    {
        return view('movies.view', [
            'movie' => Movie::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|min:2',
            'price'         => 'required|numeric',
            'release_date'  => 'required',
            'synopsis'      => 'required|min:2'
        ]);

        $input = $request->all();

        Movie::create($input);

        // $movie = new Movie();

        // $movie->title = $input['title'];
        // $movie->price = $input['price'];
        // $movie->release_date = $input['release_date'];
        // $movie->synopsis = $input['synopsis'];

        // $movie->save();

        return redirect()
            ->route('movies.index')
            ->with('feedback.message', 'La Película <b>'. e($input['title']) . '</b> se publico exitosamente');

    }

    public function destroy(int $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect()
            ->route('movies.index')
            ->with('feedback.message', 'La Película <b>'. e($movie->title) . '</b> se eliminó exitosamente');

    }

    public function delete(int $id)
    {
        return view('movies.delete', [
            'movie' => Movie::findOrFail($id)
        ]);
    }

    public function edit(int $id)
    {
        return view('movies.edit', [
            'movie' => Movie::findOrFail($id)
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'title'         => 'required|min:2',
            'price'         => 'required|numeric',
            'release_date'  => 'required',
            'synopsis'      => 'required|min:2'
        ]);

        $movie = Movie::findOrFail($id);

        $movie->update($request->all());

        return redirect()
            ->route('movies.index')
            ->with('feedback.message', 'La Película <b>'. e($movie->title) . '</b> se publico exitosamente');

    }
}
