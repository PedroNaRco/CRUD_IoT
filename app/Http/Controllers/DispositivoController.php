<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    public function index()
    {
        $dispositivos = Dispositivo::all();
        return view('dispositivos.index', compact('dispositivos'));
    }

    public function create()
    {
        return view('dispositivos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'tipo' => 'required',
            'modelo' => 'required',
        ]);

        Dispositivo::create([
            'nome' => $request->nome,
            'tipo' => $request->tipo,
            'modelo' => $request->modelo,
            'ativo' => $request->has('ativo'),
        ]);

        return redirect()->route('dispositivos.index')->with('success', 'Dispositivo criado com sucesso!');
    }

    public function edit(Dispositivo $dispositivo)
    {
        return view('dispositivos.edit', compact('dispositivo'));
    }

    public function update(Request $request, Dispositivo $dispositivo)
    {
        $request->validate([
            'nome' => 'required',
            'tipo' => 'required',
            'modelo' => 'required',
        ]);

        $dispositivo->update([
            'nome' => $request->nome,
            'tipo' => $request->tipo,
            'modelo' => $request->modelo,
            'ativo' => $request->has('ativo'),
        ]);

        return redirect()->route('dispositivos.index')->with('success', 'Dispositivo atualizado com sucesso!');
    }

    public function destroy(Dispositivo $dispositivo)
    {
        $dispositivo->delete();

        return redirect()->route('dispositivos.index')->with('success', 'Dispositivo excluído com sucesso!');
    }
}
