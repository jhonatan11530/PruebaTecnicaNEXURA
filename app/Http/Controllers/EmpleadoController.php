<?php

namespace App\Http\Controllers;

use App\areas;
use App\empleado;
use App\roles;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = DB::table('empleado')->join('areas', 'empleado.area_id', '=', 'areas.id')->select('empleado.id', 'empleado.nombre', 'empleado.email', 'empleado.sexo', 'areas.nombre as area', 'empleado.boletin')->get();
        return view('inicio.index', compact('response'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = roles::all();
        $areas = areas::all();
        return view('inicio.create', compact('roles', 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Nombre' => 'required',
            'Correo' => 'required',
            'Sexo' => 'required',
            'Area' => 'required',
            'Descripcion' => 'required',
            'Roles' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            if (isset($request->boletin)) {
                empleado::create([
                    'nombre' => $request->Nombre,
                    'email' => $request->Correo,
                    'sexo' => $request->Sexo,
                    'area_id' => $request->Area,
                    'boletin' => $request->boletin,
                    'descripcion' => $request->Descripcion,
                ]);
                return redirect('inicio');
            } else {
                empleado::create([
                    'nombre' => $request->Nombre,
                    'email' => $request->Correo,
                    'sexo' => $request->Sexo,
                    'area_id' => $request->Area,
                    'boletin' => 0,
                    'descripcion' => $request->Descripcion,
                ]);
                return redirect('inicio');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operador = empleado::find($id);
        $operador->delete();
        return redirect('inicio');
    }
}
