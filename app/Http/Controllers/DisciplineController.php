<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Discipline;

class DisciplineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Buscando todos os professores do banco de dados
        $teachers = Teacher::all();

        // Passando a variável $teachers para a view
        return view('disciplines.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Discipline::create([
            'nome' => $request->nome,
            'teacher_id' => $request->teacher_id
        ]);

        return "Disciplina cadastrada com sucesso!";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $discipline = Discipline::findOrFail($id);
        return view('disciplines.show', ['discipline' => $discipline]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $discipline = Discipline::findOrFail($id);
        return view('disciplines.edit', ['discipline' => $discipline]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $discipline = Discipline::findOrFail($id);
        $discipline->update([
            'nome' => $request->nome,
            'teacher_id' => $request->teacher_id
        ]);

        return "Disciplina atualizada com sucesso!";
    }

    public function delete(string $id)
    {
        $discipline = Discipline::findOrFail($id);
        return view('disciplines.delete', ['discipline' => $discipline]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $discipline = Discipline::findOrFail($id);
        $discipline->delete();

        return "Disciplina excluída com sucesso!";
    }
}
