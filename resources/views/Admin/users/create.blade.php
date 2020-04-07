@extends('adminlte::page')

@section('title', 'Novo usuário')
    
@section('content_header')
    <h1>Novo Usuário</h1>
@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <h4>Ocorreu um erro</h4>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    
    <form action="{{route('users.store')}}" class="form-horizontal" method="POST">
        @csrf
        <div class="form-group">
            <div class="row">
                <label class="col-sm-2 control-label">Nome Completo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                </div>
            </div>    
        </div>

        <div class="form-group">
            <div class="row">
                <label class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="{{old('email')}}">
                </div>
            </div>    
        </div>

        <div class="form-group">
            <div class="row">
                <label class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>    
        </div>

        <div class="form-group">
            <div class="row">
                <label class="col-sm-2 control-label">Confirmação da Senha</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
            </div>    
        </div>

        <div class="form-group">
            <div class="row">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" value="Cadastrar" class="btn btn-success">
                </div>
            </div>    
        </div>
    </form>

@endsection