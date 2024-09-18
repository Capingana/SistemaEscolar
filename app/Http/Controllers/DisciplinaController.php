<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateDisciplinaRequest;
use App\Models\Classe;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $page = "Disciplinas";
        $other_page = "Lista de disciplinas";
        $disciplinas = Disciplina::orderBy("name", "asc")->simplePaginate(10);
        return view('admin.disciplina.index', compact('page', 'other_page', 'disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $page = "Disciplinas";
        $other_page = "Nova disciplina";
        $classes=Classe::all();
        return view('admin.disciplina.create', compact('page', 'other_page','classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateDisciplinaRequest $request)
    {
        //
        $disciplina = new Disciplina;
        $disciplina->name = $request->name;
        $disciplina->codigo = $request->codigo;
        $disciplina->carga_horaria_semanal = $request->carga_horaria_semanal;
        $disciplina->carga_horaria_mensal = $request->carga_horaria_semanal * 4;
        return redirect()->route("disciplina.index")->with("sucesso", "Disciplina criada com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        if ($disciplina = Disciplina::find($id)) {
            $page = "Disciplinas";
            $other_page = "Dados da disciplina";
            return view('admin.disciplina.show', compact('page', 'other_page', 'disciplina'));
        } else {
            return redirect()->back()->with("erro", "Disciplina não encontrada.");
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        if ($disciplina = Disciplina::find($id)) {
            $page = "Disciplinas";
            $other_page = "Editar dados da disciplina";
            return view('admin.disciplina.edit', compact('page', 'other_page', 'disciplina'));
        } else {
            return redirect()->back()->with("erro", "Disciplina não encontrada.");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateDisciplinaRequest $request, string $id)
    {
        //
        if ($disciplina = Disciplina::find($id)) {
            $disciplina->name = $request->name;
            $disciplina->codigo = $request->codigo;
            $disciplina->carga_horaria_semanal = $request->carga_horaria_semanal;
            $disciplina->carga_horaria_mensal = $request->carga_horaria_semanal * 4;
            $disciplina->save();
            return redirect()->route("disciplina.index")->with("sucesso", "Disciplina actualizada com sucesso");
        } else {
            return redirect()->back()->with("erro", "Disciplina não encontrada.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if ($disciplina = Disciplina::find($id)) {
            $disciplina->delete();
            return redirect()->route("disciplina.index")->with("sucesso", "Disciplina eliminada com sucesso");
        } else {
            return redirect()->back()->with("erro", "Disciplina não encontrada.");
        }
    }
}
