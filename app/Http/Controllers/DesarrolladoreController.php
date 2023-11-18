<?php

namespace App\Http\Controllers;

use App\Models\Desarrolladore;
use Illuminate\Http\Request;

/**
 * Class DesarrolladoreController
 * @package App\Http\Controllers
 */
class DesarrolladoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desarrolladores = Desarrolladore::paginate();

        return view('desarrolladore.index', compact('desarrolladores'))
            ->with('i', (request()->input('page', 1) - 1) * $desarrolladores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desarrolladore = new Desarrolladore();
        return view('desarrolladore.create', compact('desarrolladore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Desarrolladore::$rules);

        $desarrolladore = Desarrolladore::create($request->all());

        return redirect()->route('desarrolladores.index')
            ->with('success', 'Desarrolladore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $desarrolladore = Desarrolladore::find($id);

        return view('desarrolladore.show', compact('desarrolladore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desarrolladore = Desarrolladore::find($id);

        return view('desarrolladore.edit', compact('desarrolladore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Desarrolladore $desarrolladore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desarrolladore $desarrolladore)
    {
        request()->validate(Desarrolladore::$rules);

        $desarrolladore->update($request->all());

        return redirect()->route('desarrolladores.index')
            ->with('success', 'Desarrolladore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $desarrolladore = Desarrolladore::find($id)->delete();

        return redirect()->route('desarrolladores.index')
            ->with('success', 'Desarrolladore deleted successfully');
    }
}
