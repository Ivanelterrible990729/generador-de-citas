<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::all();
        return view('citas/citasIndex', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('citas/citasForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //se reciben los datos

        //se validan los datos
        $request->validate(
            ['fecha' => ['required', 'date'],
            'estilista' => 'required|string|min:5|max:255',
            'cliente' => 'required|string|min:5|max:255',
            'tratamiento' => 'required|string|min:5|max:255'
            ]);

        //se guarda en bd
        Cita::create($request->all());

        //redirección
        return redirect('/citas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cita = Cita::find($id);
        return view('citas/citasShow', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //redireccionar al formulario para editar
        $cita = Cita::find($id);
        return view('citas/citasForm', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validar entradas
        $request->validate(
            ['fecha' => ['required', 'date'],
            'estilista' => 'required|string|min:5|max:255',
            'cliente' => 'required|string|min:5|max:255',
            'tratamiento' => 'required|string|min:5|max:255'
        ]);
        
        $cita = Cita::find($id);
        Cita::where('id', $cita->id)->update($request->except('_method', '_token'));
        return redirect()->route('citas.show', [$cita]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function reportePDF()
    {
        return 'pdf';
    }
}
