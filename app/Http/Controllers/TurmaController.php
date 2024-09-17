<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateTurmaRequest;
use App\Models\Classe;
use App\Models\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $page = "Turmas";
        $other_page = "Lista de turmas";
        $turmas = Turma::orderBy('nome', 'asc')->SimplePaginate();
        return view('admin.turma.index', compact('page', 'other_page', 'turmas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $page = "Turmas";
        $other_page = "Nova turma";
        $classes = Classe::all();
        return view('admin.turma.create', compact('page', 'other_page', 'classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateTurmaRequest $request)
    {
        //

        Turma::create($request->all());
        return redirect()->route("turma.index")->with("sucesso", "Turma criada com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        if ($turma = Turma::find($id)) {
            $page = "Turmas";
            $other_page = "Detalhes da turma";
            return view('admin.turma.show', compact('page', 'other_page', 'turma'));
        } else {
            return redirect()->back()->with("erro", "Turma não encontrada.");
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        if ($turma = Turma::find($id)) {
            $page = "Turmas";
            $other_page = "Editar dados da turma";
            $classes = Classe::all();
            return view('admin.turma.edit', compact('page', 'other_page', 'classes', 'turma'));
        }else{
            return redirect()->back()->with("erro", "Turma não encontrada.");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateTurmaRequest $request, string $id)
    {
        //
        if ($turma = Turma::find($id)) {
            $turma->update($request->all());
            return redirect()->route("turma.index")->with("sucesso", "Dados da turma actualizada com sucesso");
        } else {
            return redirect()->back()->with("erro", "Turma não encontrada.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if ($turma = Turma::find($id)) {
            $turma->delete();
            return redirect()->route("turma.index")->with("sucesso", "Turma eliminada com sucesso");
        } else {
            return redirect()->back()->with("erro", "Turma não encontrada.");
        }
    }
}
