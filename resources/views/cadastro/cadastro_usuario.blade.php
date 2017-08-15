@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">

            <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastros</div>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="./produto">Produtos<span class="sr-only">(current)</span></a></li>
                            <li><a href="./cliente">Clientes<span class="sr-only">(current)</span></a></li>
                            <li><a href="./fornecedor">Fornecedores<span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="#">Usuários<span class="sr-only">(current)</span></a></li>
                        </ul>
                </div>
            </div>
                  
            <div class="col-md-9 col-md-offset-0">
                <div class="well well-lg">
                    <div class="panel panel-default">
                        <div class="panel-heading">Cadastro de usuários</div>
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <td>
                                        <form class="btn-convidar" method="get" action="usuario/convidar">
                                            <button type="submit" class="btn btn-primary">Convidar</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form class="btn-new" method="get" action="usuario/cadastrar">
                                            <button type="submit" class="btn btn-primary">Novo</button>
                                        </form>
                                    </td>
                                </tr>
                            <TABLE  class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th colspan="3">Opções</th>
                                    </tr>
                                </thead>
                                @if($usuarios)
                                    @foreach($usuarios as $usuario)
                                    <tbody>
                                        <tr>
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td><a href="mailto:{{$usuario->email}}"><span class="glyphicon glyphicon-envelope"></span></a></td>
                                            <td><a href="usuario/{{$usuario->id}}/update"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                            <td><a href="usuario/{{$usuario->id}}/delete"><span class="glyphicon glyphicon-remove"></span></a></td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                @endif
                            </TABLE>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
