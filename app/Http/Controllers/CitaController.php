<?php

namespace App\Http\Controllers;

use App\Repository\CitaRepository;
use Config;
use Illuminate\Http\Request;
use Mail;
use Symfony\Component\Mime\Part\TextPart;
class CitaController extends Controller
{

    public function __construct(CitaRepository $citas){
        $this->citas = $citas;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->rol != 'admin'){
            return view('dashboard');
        } else {
            $citas = $this->citas->getAll();
            return view('citas.lista', ['citas' => $citas]);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($coche_id)
    {
        $citas = $this->citas->getAll();
        return view('citas.create', ['coche_id' => $coche_id, 'citas'=>$citas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha' => 'required',
        ]);

        $validated['coche_id']=$request['coche_id'];
        $validated['user_id']=auth()->user()->id;

        $this->citas->insertarCita($validated);
        $this->enviarConfirmacion($validated);
        return redirect()->action([CitaController::class, 'show'], ['cita' => auth()->user()->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $citas = $this->citas->getCitasByUser($id);

        return view('citas.citasByUser', ['citas' => $citas]);
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
        $this->citas->deleteCita($id);
        return redirect()->action([CitaController::class, 'index']);
    }

    public function enviarConfirmacion($datos)
    {
        $fecha = $datos['fecha'];
        $coche = $datos['coche_id'];

        $datosCoche = ;

        $nombre = auth()->user()->name;
    
        $subject = "Confirmacion de cita.";
        $for = auth()->user()->email;
    
        Mail::send([], [], function ($msj) use ($subject, $for, $fecha, $coche, $nombre) {
            $msj->from(env('MAIL_USERNAME'), "Concesionario PMJ");
            $msj->subject($subject);
            $msj->to($for);
            $msj->text("Hola $nombre. Has reservado una cita para la fecha: $fecha, para ver el coche: $coche.");
        });
    
        return redirect()->back();
    }
}
