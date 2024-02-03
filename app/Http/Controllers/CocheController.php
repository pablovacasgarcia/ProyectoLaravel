<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\CocheRepository;
use App\Repository\MarcaRepository;

class CocheController extends Controller
{
    protected CocheRepository $coches;

    public function __construct(CocheRepository $coches)
    {
        $this->coches=$coches;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coches = $this->coches->getAll();
        return view('coches.lista', ['coches' => $coches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marcas = app(MarcaRepository::class)->getAll();
        return view('coches.create', ['marcas' => $marcas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'modelo' => 'required',
            'precio' => 'required',
            'imagen' => 'required',
            'marca_id' => 'required'
        ]);

        $this->coches->insertarCoches($validated);

        return redirect()->action([CocheController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->coches->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
