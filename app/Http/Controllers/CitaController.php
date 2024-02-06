<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Repository\CitaRepository;
use App\Repository\CocheRepository;
use App\Repository\MarcaRepository;
use App\Repository\UserRepository;
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
        $idUsuario = CitaRepository::getNombreCita($id)->user_id;
        $email = UserRepository::getDatos($idUsuario)->email;
        $nombre = UserRepository::getDatos($idUsuario)->name;
        $this->citas->deleteCita($id);
        $this->enviarCancelacion($email,$nombre);
        return redirect()->action([CitaController::class, 'show'], ['cita' => auth()->user()->id]);

    }

    public function enviarConfirmacion($datos)
    {
        $fecha = $datos['fecha'];
        $coche = $datos['coche_id'];

        $datosCoche = CocheRepository::getDatos($coche);
        $marca = MarcaRepository::getDatos($datosCoche->marca_id)->nombre;

        $nombre = auth()->user()->name;

        $subject = "Confirmacion de cita.";
        $for = auth()->user()->email;

        Mail::send([], [], function ($msj) use ($subject, $for, $fecha, $coche, $nombre, $datosCoche, $marca) {
            $msj->from(env('MAIL_USERNAME'), "Concesionario PMJ");
            $msj->subject($subject);
            $msj->to($for);
            $msj->text("Hola $nombre. Has reservado una cita para la fecha: $fecha, para ver el $marca, $datosCoche->modelo.");
        });

        return redirect()->back();
    }
    public function enviarCancelacion($email,$nombre)
    {
        $subject = "Confirmacion de cancelación de cita.";
        $for = $email;
        Mail::send([], [], function ($msj) use ($subject, $for,$nombre) {
            $msj->from(env('MAIL_USERNAME'), "Concesionario PMJ");
            $msj->subject($subject);
            $msj->to($for);
            $msj->text("Hola $nombre su cita ha sido cancelada con éxito. Recuerda que puedes reservar una nueva cita en nuetra página.");
        });
        return redirect()->back();
    }
}
