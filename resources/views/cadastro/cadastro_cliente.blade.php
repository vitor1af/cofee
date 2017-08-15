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
                            <li class="active"><a href="#">Clientes<span class="sr-only">(current)</span></a></li>
                            <li><a href="./fornecedor">Fornecedores<span class="sr-only">(current)</span></a></li>
                            <li><a href="./usuario">Usuários<span class="sr-only">(current)</span></a></li>
                        </ul>
                </div>
            </div>
                  
            <div class="col-md-9 col-md-offset-0">
                <div class="well well-lg">
                    <div class="panel panel-default">
                        <div class="panel-heading">Cadastro de clientes</div>
                        <div class="panel-body">
                            Seja bem vindo!
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
