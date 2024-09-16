<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $page = "Usuários";
        $other_page = "Lista de usuário";
        $users = User::orderBy('name', 'asc')->SimplePaginate();
        return view('admin.user.index', compact('page', 'other_page', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $page = "Usuários";
        $other_page = "Criar novo usuário";
        return view('admin.user.create', compact('page', 'other_page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //

        User::create($request->validated());
        return redirect()->route('usuario.index')->with('sucesso', 'Usuário criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        if ($user = User::find($id)) {
            $page = "Usuários";
            $other_page = "Detalhes de usuário";
            return view('admin.user.show', compact('page', 'other_page', 'user'));
        } else {
            return redirect()->back()->with('erro', 'Usuário não encontrado.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        //
        if ($user) {
            $page = "Usuários";
            $other_page = "Editar dados de usuário";
            return view('admin.user.edit', compact('page', 'other_page', 'user'));
        } else {
            return redirect()->back()->with('erro', 'Usuário não encontrado.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        //
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('erro', 'Usuário não encontrado.');
        } else {
            //verificando se informou a senha
            $dados = $request->only(['name','email']);
            if ($request->password) {
                $dados['password'] = bcrypt($request->password);
            }
            $user->update($dados);
            return redirect()->route('usuario.index')->with('sucesso', 'Dados de usuário actualizados com sucesso');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        if (!$user = User::find($id)) {
            return redirect()->route('usuario.index')->with('erro', 'Usuário não encontrado.');
        }
        if (Auth::user()->id === $user->id) {
            return redirect()->back()->with('erro', 'Não é permitido eliminar seu próprio perfil.');
        }
        $user->delete();
        return redirect()->route('usuario.index')
            ->with('sucesso', 'Usuário eliminado com sucesso');
    }
}
