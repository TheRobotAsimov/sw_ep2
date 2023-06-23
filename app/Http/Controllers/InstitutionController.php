<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Inertia\Inertia;
use App\Http\Requests\StoreInstitutionRequest;
use App\Http\Requests\UpdateInstitutionRequest;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Institutions/Index', [  // Es el archivo .vue
            'titulo' => 'Listado de Instituciones',
            'Institution' => Institution::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Institutions/Create', [
            'title' => 'Formulario de instituciones'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInstitutionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Institution $institution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Institution $institution) // id de la Institucion
    {
        return Inertia::render('Institutions/Edit', [
            'title' => 'Editar Registros',
            'registros' => $institution,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstitutionRequest $request, Institution $institution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Institution $institution)
    {
        //
    }
}
