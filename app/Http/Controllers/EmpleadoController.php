<?php

namespace App\Http\Controllers;

use App\areas;
use App\empleado;
use App\empleado_rol;
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

                $empleado = new empleado();
                $empleado->nombre = $request->Nombre;
                $empleado->email = $request->Correo;
                $empleado->sexo = $request->Sexo;
                $empleado->area_id = $request->Area;
                $empleado->boletin = $request->boletin;
                $empleado->descripcion = $request->Descripcion;
                $empleado->save();

                empleado_rol::create([
                    'empleado_id' => $empleado->id,
                    'rol_id' => $request->Area,
                ]);

                return redirect('inicio');
            } else {

                $empleado = new empleado();
                $empleado->nombre = $request->Nombre;
                $empleado->email = $request->Correo;
                $empleado->sexo = $request->Sexo;
                $empleado->area_id = $request->Area;
                $empleado->boletin = 0;
                $empleado->descripcion = $request->Descripcion;
                $empleado->save();

                empleado_rol::create([
                    'empleado_id' => $empleado->id,
                    'rol_id' => $request->Area,
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
    public function edit($id)
    {
        $empleado = empleado::find($id);
        $rolemp = DB::table('empleado_rol')->where('empleado_id', $id)->get();
        $roles = roles::all();
        $areas = areas::all();
        return view('inicio.edit', compact('empleado', 'rolemp', 'roles', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

                $empleado = empleado::find($id);
                $empleado->nombre = $request->Nombre;
                $empleado->email = $request->Correo;
                $empleado->sexo = $request->Sexo;
                $empleado->area_id = $request->Area;
                $empleado->boletin = $request->boletin;
                $empleado->descripcion = $request->Descripcion;
                $empleado->update();

                empleado_rol::where('empleado_id', $id)->update(['empleado_id' => $empleado->id, 'rol_id' => $empleado->area_id]);

                return redirect('inicio');
            } else {

                $empleado = empleado::find($id);
                $empleado->nombre = $request->Nombre;
                $empleado->email = $request->Correo;
                $empleado->sexo = $request->Sexo;
                $empleado->area_id = $request->Area;
                $empleado->boletin = 0;
                $empleado->descripcion = $request->Descripcion;
                $empleado->update();

                empleado_rol::where('empleado_id', $id)->update(['empleado_id' => $empleado->id, 'rol_id' => $empleado->area_id]);

                return redirect('inicio');
            }
        }
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

        $id = empleado_rol::where('empleado_id', $id);
        $id->delete();
        return redirect('inicio');
    }
}
