<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateContas;
use App\Models\Contas;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function index()
    {
        $contas = Contas::orderByDesc('created_at')->get();
        return view('contas.index', compact('contas'));
    }
    public function create()
    {
        return view('contas.create');
    }
    public function store(StoreUpdateContas $request)
    {
        if(!Contas::create($request->all())){
            return redirect()->route('contas.create');
        }
        return redirect()->route('contas.index')->with('message', 'cadastrado com sucesso');
    }
    public function show()
    {
        return view('contas.show');
    }
    public function edit()
    {
        return view('contas.create');
    }
    public function update()
    {

    }
    public function destroy()
    {

    }
}
