@extends('layouts.layout')

@section('conteudo')

<form class="formcontato">
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Telefone</label>
        <input type="text" class="form-control" id="telefone" placeholder="Digite aqui o seu telefone">
      </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Digite aqui algum texto para que possamos entrar em contato</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </form>

@endsection