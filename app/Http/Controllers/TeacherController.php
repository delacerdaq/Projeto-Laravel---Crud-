<?php

namespace App\Http\Controllers;
use App\Models\Teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
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
        return view('Teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Teacher::create([
            'nome' => $request->nome,
            'email' => $request->email
        ]);

        return 'Professor cadastrado com sucesso!';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.show', ['teacher' => $teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', ['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update([
            'nome' => $request->nome,
            'email' => $request->email
        ]);

        return 'Professor atualizado com sucesso!';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.delete', ['teacher' => $teacher]);
    }

    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return 'Professor excluído com sucesso!';
    }
}
