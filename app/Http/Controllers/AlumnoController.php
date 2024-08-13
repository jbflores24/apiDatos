<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Http\Responses\ApiResponse;
use App\Http\Resources\AlumnoCollection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $alumnos = new AlumnoCollection(Alumno::all());
            return ApiResponse::success('Listado de estudiantes', 200, $alumnos);
        } catch (Exception $e) {
            return ApiResponse::error($e->getMessage(),500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
    }

    public function getEstudiante($nc){
        try {
            $alumno = new AlumnoCollection(Alumno::query()->where ('numero_de_control',$nc)->get());
            if ($alumno->isEmpty()) throw new ModelNotFoundException("Estudiante No encontrado");
            return ApiResponse::success('Estudiante encontrado', 200, $alumno);
        } catch ( ModelNotFoundException $e) {
            return ApiResponse::error ($e->getMessage(),404);
        }
    }
}
