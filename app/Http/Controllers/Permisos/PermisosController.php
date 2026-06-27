<?php

namespace App\Http\Controllers\Permisos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Permisos\PermisoRequest;
use App\Http\Services\Permiso\PermisoService;
use Illuminate\Http\Request;

class PermisosController extends Controller
{

    public function __construct(
        private readonly PermisoService $permisosService
    ){}

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermisoRequest $request){
        return $this->permisosService->registroPermiso($request);
    }

    /**
     * Display the specified resource.
     */
    public function show( $permiso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $permiso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $permiso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $permiso)
    {
        //
    }
}
