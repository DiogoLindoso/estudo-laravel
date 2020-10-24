@extends('template.base')
@section('titulo','Formulário de Pessoa')
@section('conteudo')
    
    <h1>Formulário de Pessoa</h1>
    {{-- @if ($errors->any())
    
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    @if (isset($pessoa))
        <form action="/pessoas/{{ $pessoa->id }}" method="post">
            @method('PUT')
    @else
        <form action="/pessoas" method="post">
    @endif
        @csrf
        <div class="form-group">
          <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" aria-describedby="nome" name="nome" value="{{$pessoa->nome ?? ''}}">
          @error('nome')
            <small class="text-danger">{{$message}}</small> 
          @enderror
        </div>
        <div class="form-group">
          <label for="telefone">Telefone</label>
          <input type="text" class="form-control" id="telefone" name="telefone" value="{{$pessoa->telefone ?? ''}}">
          @error('telefone')
          <small class="text-danger">{{$message}}</small> 
        @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$pessoa->email ?? ''}}">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <div class="form-group">
          <label for="cpf">CPF</label>
          <input type="text" class="form-control" id="cpf" name="cpf" value="{{$pessoa->cpf ?? ''}}">
          @error('cpf')
          <small class="text-danger">{{$message}}</small> 
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>

    <a href="/pessoas">Voltar</a>
@endsection