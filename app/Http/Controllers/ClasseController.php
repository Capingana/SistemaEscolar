<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateClasseRequest;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $page = "Classes";
        $other_page = "Lista de classes";
        $classes = Classe::orderBy('name', 'asc')->SimplePaginate();
        return view('admin.classe.index', compact('page', 'other_page', 'classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $page = "Classes";
        $other_page = "Nova classe";
        return view('admin.classe.create', compact('page', 'other_page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateClasseRequest $request)
    {
        //
        Classe::create($request->all());
        return redirect()->route("classe.index")->with("sucesso", "Nova classe criada com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        if ($classe = Classe::find($id)) {
            $page = "Classes";
            $other_page = "Dados da classe-" . $id;
            return view('admin.classe.show', compact('page', 'other_page', 'classe'));
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
        if ($classe = Classe::find($id)) {
            $page = "Classes";
            $other_page = "Editar dados classe-" . $id;
            return view('admin.classe.edit', compact('page', 'other_page', 'classe'));
        } else {
            return redirect()->back()->with("erro", "Disciplina não encontrada.");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateClasseRequest $request, string $id)
    {
        //
        if ($classe = Classe::find($id)) {
            $classe->update($request->all());
            return redirect()->route("classe.index")->with("sucesso", "Dados da disciplina actualizada com sucesso.");
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
        if ($classe = Classe::find($id)) {
            $classe->delete();
            return redirect()->route("classe.index")->with("sucesso", "Disciplina eliminada com sucesso.");
        } else {
            return redirect()->back()->with("erro", "Disciplina não encontrada.");
        }
    }
}
