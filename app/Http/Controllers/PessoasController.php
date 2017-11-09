<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
use App\Telefone;
use App\Http\Controllers\TelefonesController;

class PessoasController extends Controller
{
  private $telefones_controller;

  private $pessoa;

  public function __construct(TelefonesController $tel_controller)
  {
    $this->telefones_controller = $tel_controller;
    $this->pessoa = new Pessoa();
  }

  public function index()
  {
    $list_pessoas = Pessoa::all();
    return view('pessoas.index', [
      'pessoas' => $list_pessoas
    ]);
  }

  public function novoView()
  {
    return view('pessoas.create');
  }

  public function store(Request $request)
  {
    $pessoa = Pessoa::create($request->all());
    if ($request->ddd && $request->telefone) {
      $telefone = new Telefone();
      $telefone->ddd = $request->ddd;
      $telefone->telefone = $request->telefone;
      $telefone->pessoa_id = $pessoa->id;
      $this->telefones_controller->store($telefone);
    }
    return redirect()->route('home')->with('message', 'Pessoa Cadastrada!');
  }

  public function excluirView($id)
  {
    return view('pessoas.delete', [
      'pessoa' => $this->getPessoa($id)
    ]);
  }

  public function destroy($id)
  {
    $this->getPessoa($id)->delete();
    return redirect()->route('home')->with('success', 'Excluido');
  }

  public function editarView($id)
  {
    return view('pessoas.edit', [
      'pessoa' => $this->getPessoa($id),
    ]);
  }

  public function update(Request $request)
  {
    $pessoa = $this->getPessoa($request->id);
    $pessoa->update($request->all());
    return redirect()->route('home');
  }

  protected function getPessoa($id)
  {
    return $this->pessoa->find($id);
  }

}
