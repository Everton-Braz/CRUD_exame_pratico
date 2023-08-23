<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class veiculoController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('show');
  }

  /**
   * Show the form for creating a new resource.
   */
  public function cadastro()
  {
    return view('cadastro');
  }
  public function store(Request $request)
  {
    Veiculo::create([
      'modelo' => $request->modelo,
      'data' => $request->data,
      'placa' => $request->placa,
      'Tipo_de_acessibilidade' => $request->Tipo_de_acessibilidade,
    ]);
    return "Veiculo cadastrado com sucesso";
  }

  /**
   * Store a newly created resource in storage.
   */
  /**
   * Display the specified resource.
   */
  public function show($id)
  {
    $veiculo = Veiculo::findorFail($id);
    return view('show', ['veiculo' => $veiculo]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
