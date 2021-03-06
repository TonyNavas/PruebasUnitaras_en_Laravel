<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditarUsuarioRequest;
use App\Http\Requests\GuardarUsuarioRequest;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuarios::query()->paginate();
        return response($usuario, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarUsuarioRequest $request)
    {
        Usuarios::create($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Usuario guardado exitosamente'
        ]);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuario)
    {
        return response()->json([
            'res'=>true,
            'data'=>$usuario
        ]); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarUsuarioRequest $request, Usuarios $usuario)
    {
        $usuario->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Usuario actualizado exitosamente'
        ],200); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuario)
    {
        $usuario->delete();
        return response()->json([
            'res'=>true,
            'mensaje' => 'Usuario eliminado exitosamente',
        ]);
    }
}
