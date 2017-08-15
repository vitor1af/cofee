@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="well well-lg">
                <div>
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="/cadastro/produto">Cadastros<span class="sr-only">(current)</span></a></li>
                        <li><a href="">Estoque<span class="sr-only">(current)</span></a></li>
                        <li><a href="">Contas<span class="sr-only">(current)</span></a></li>
                    </ul>
                </div>
            </div>
<!--
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Seja bem vindo!
                </div>
            </div>
-->
        </div>
    </div>
</div>
@endsection
