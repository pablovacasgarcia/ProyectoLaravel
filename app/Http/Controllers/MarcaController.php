<?php

namespace App\Http\Controllers;

use App\Repository\MarcaRepository;
use Illuminate\Http\Request;

class MarcaController extends Controller
{

    protected $marcas;

    public function __construct(MarcaRepository $marcas){
        $this->marcas = $marcas;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = $this->marcas->getAll();
        return view('marca.lista', ['marcas' => $marcas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->rol != 'admin'){
            return view('dashboard');
        } else {
            return view('marca.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(auth()->user()->rol != 'admin'){
            return view('dashboard');
        } else {
            $validated = $request->validate([
                'nombre' => 'required',
            ]);

            $this->marcas->insertarMarca($validated);

            return redirect()->action([MarcaController::class, 'index']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('marca.coches', ['coches'=>$this->marcas->show($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(auth()->user()->rol != 'admin'){
            return view('dashboard');
        } else {
            return view('marca.edit', ['marca' => $this->marcas->getMarca($id)]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(auth()->user()->rol != 'admin'){
            return view('dashboard');
        } else {
            $validated = $request->validate([
                'nombre' => 'required',
            ]);

            $this->marcas->editarMarca($validated, $id);

            return redirect()->action([MarcaController::class, 'index']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(auth()->user()->rol != 'admin'){
            return view('dashboard');
        } else {
            $this->marcas->borrarMarca($id);
            return redirect()->action([MarcaController::class, 'index']);
        }
    }
}
