<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

/**
 * Class VideojuegoController
 * @package App\Http\Controllers
 */
class VideojuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videojuegos = Videojuego::paginate();

        return view('videojuego.index', compact('videojuegos'))
            ->with('i', (request()->input('page', 1) - 1) * $videojuegos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $videojuego = new Videojuego();
        return view('videojuego.create', compact('videojuego'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Videojuego::$rules);

        $videojuego = Videojuego::create($request->all());

        return redirect()->route('videojuegos.index')
            ->with('success', 'Videojuego created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videojuego = Videojuego::find($id);

        return view('videojuego.show', compact('videojuego'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videojuego = Videojuego::find($id);

        return view('videojuego.edit', compact('videojuego'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Videojuego $videojuego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videojuego $videojuego)
    {
        request()->validate(Videojuego::$rules);

        $videojuego->update($request->all());

        return redirect()->route('videojuegos.index')
            ->with('success', 'Videojuego updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $videojuego = Videojuego::find($id)->delete();

        return redirect()->route('videojuegos.index')
            ->with('success', 'Videojuego deleted successfully');
    }
}
