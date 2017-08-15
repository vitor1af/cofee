@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Fornecedor</div>
                <div class="panel-body">

                    <script>
                        function formatar(mascara, documento){
                            var i = documento.value.length;
                            var saida = mascara.substring(0,1);
                            var texto = mascara.substring(i)
  
                            if (texto.substring(0,1) != saida){
                                documento.value += texto.substring(0,1);
                            }
  
                        }
                    </script>

                    <form class="form-horizontal" method="POST" action="/cadastro/fornecedor/pessoa/cadastrar">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div align="left">
                                @if($pessoa == "Fisica")
                                
                                    <div style="padding:15px">
                                        <legend align="left">Informações Pessoais:</legend>
                                    </div>
                                    
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nome</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                                        <label for="cpf" class="col-md-4 control-label">CPF</label>

                                        <div class="col-md-6">
                                            <input id="cpf" type="text" class="form-control" name="cpf" OnKeyPress="formatar('###.###.###-##', this)" value="{{ old('cpf') }}" required autofocus>

                                            @if ($errors->has('cpf'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cpf') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('rg') ? ' has-error' : '' }}">
                                        <label for="rg" class="col-md-4 control-label">RG</label>

                                        <div class="col-md-6">
                                            <input id="rg" type="text" class="form-control" name="rg" OnKeyPress="formatar('##.###.###-##', this)" value="{{ old('rg') }}" required autofocus>

                                            @if ($errors->has('rg'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('rg') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                                        <label for="sexo" class="col-md-4 control-label">Sexo</label>

                                        <div class="col-md-6">
                                            <input type="radio" name="sexo" value="masculino"> Masculino<br>
                                            <input type="radio" name="sexo" value="femenino"> Feminino<br>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('data_nascim') ? ' has-error' : '' }}">
                                        <label for="data_nascim" class="col-md-4 control-label">Data de Nascimento</label>

                                        <div class="col-md-6">
                                            <input id="data_nascim" type="text" class="form-control" OnKeyPress="formatar('##/##/####', this)" name="data_nascim" value="{{ old('data_nascim') }}" required autofocus>

                                            @if ($errors->has('data_nascim'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('data_nascim') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                                        <label for="telefone" class="col-md-4 control-label">Telefone</label>

                                        <div class="col-md-6">
                                            <input id="telefone" type="text" class="form-control" OnKeyPress="formatar('##-#####-####', this)" name="telefone" value="{{ old('telefone') }}" required autofocus>

                                            @if ($errors->has('telefone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('telefone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('telefone_sec') ? ' has-error' : '' }}">
                                        <label for="telefone_sec" class="col-md-4 control-label">Telefone Secundário</label>

                                        <div class="col-md-6">
                                            <input id="telefone_sec" type="text" class="form-control" OnKeyPress="formatar('##-#####-####', this)" name="telefone_sec" value="{{ old('telefone_sec') }}" required autofocus>

                                            @if ($errors->has('telefone_sec'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('telefone_sec') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Email</label>

                                        <div class="col-md-6">
                                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div style="padding:15px">
                                        <legend align="left">Dados de Endereço:</legend>
                                    </div>

                                    <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                                        <label for="cep" class="col-md-4 control-label">CEP</label>

                                        <div class="col-md-6">
                                            <input id="cep" type="text" class="form-control" name="cep" OnKeyPress="formatar('#####-###', this)" value="{{ old('cep') }}" required autofocus>

                                            @if ($errors->has('cep'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cep') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('logradouro') ? ' has-error' : '' }}">
                                        <label for="logradouro" class="col-md-4 control-label">logradouro</label>

                                        <div class="col-md-6">
                                            <input id="logradouro" type="text" class="form-control" name="logradouro" value="{{ old('logradouro') }}" required autofocus>

                                            @if ($errors->has('logradouro'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('logradouro') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                                        <label for="numero" class="col-md-4 control-label">Número</label>

                                        <div class="col-md-6">
                                            <input id="numero" type="text" class="form-control" name="numero" value="{{ old('numero') }}" required autofocus>

                                            @if ($errors->has('numero'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('numero') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
                                        <label for="bairro" class="col-md-4 control-label">Bairro</label>

                                        <div class="col-md-6">
                                            <input id="bairro" type="text" class="form-control" name="bairro" value="{{ old('bairro') }}" required autofocus>

                                            @if ($errors->has('bairro'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('bairro') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                                        <label for="cidade" class="col-md-4 control-label">Cidade</label>

                                        <div class="col-md-6">
                                            <input id="cidade" type="text" class="form-control" name="cidade" value="{{ old('cidade') }}" required autofocus>

                                            @if ($errors->has('cidade'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cidade') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('uf') ? ' has-error' : '' }}">
                                        <label for="uf" class="col-md-4 control-label">Estado</label>

                                        <div class="col-md-6">
                                            <input id="uf" type="text" class="form-control" name="uf" value="{{ old('uf') }}" required autofocus>

                                            @if ($errors->has('uf'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('uf') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>   

                            <script type="text/javascript">alert("{{$pessoa}}")</script> <br>

                            @endif







                            @if($pessoa == "Juridica")

                                <div style="padding:15px">
                                        <legend align="left">Informações Pessoais:</legend>
                                    </div>
                                    
                                    <div class="form-group{{ $errors->has('nome_fantasia') ? ' has-error' : '' }}">
                                        <label for="nome_fantasia" class="col-md-4 control-label">Nome Fantasia</label>

                                        <div class="col-md-6">
                                            <input id="nome_fantasia" type="text" class="form-control" name="nome_fantasia" value="{{ old('nome_fantasia') }}" required autofocus>

                                            @if ($errors->has('nome_fantasia'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nome_fantasia') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('razao_social') ? ' has-error' : '' }}">
                                        <label for="razao_social" class="col-md-4 control-label">Razão Social</label>

                                        <div class="col-md-6">
                                            <input id="razao_social" type="text" class="form-control" name="razao_social" OnKeyPress="formatar('###.###.###-##', this)" value="{{ old('razao_social') }}" required autofocus>

                                            @if ($errors->has('razao_social'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('razao_social') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('inscricao_estadual') ? ' has-error' : '' }}">
                                        <label for="inscricao_estadual" class="col-md-4 control-label">Inscrição Estadual</label>

                                        <div class="col-md-6">
                                            <input id="inscricao_estadual" type="text" class="form-control" name="inscricao_estadual" OnKeyPress="formatar('##.###.###-##', this)" value="{{ old('inscricao_estadual') }}" required autofocus>

                                            @if ($errors->has('inscricao_estadual'))
                                                <span class="help-block">inscricao_estadual
                                                    <strong>{{ $errors->first('inscricao_estadual') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                                        <label for="telefone" class="col-md-4 control-label">Telefone</label>

                                        <div class="col-md-6">
                                            <input id="telefone" type="text" class="form-control" OnKeyPress="formatar('##-#####-####', this)" name="telefone" value="{{ old('telefone') }}" required autofocus>

                                            @if ($errors->has('telefone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('telefone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('telefone_sec') ? ' has-error' : '' }}">
                                        <label for="telefone_sec" class="col-md-4 control-label">Telefone Secundário</label>

                                        <div class="col-md-6">
                                            <input id="telefone_sec" type="text" class="form-control" OnKeyPress="formatar('##-#####-####', this)" name="telefone_sec" value="{{ old('telefone_sec') }}" required autofocus>

                                            @if ($errors->has('telefone_sec'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('telefone_sec') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Email</label>

                                        <div class="col-md-6">
                                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                <div style="padding:15px">
                                        <legend align="left">Dados de Endereço:</legend>
                                    </div>

                                    <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                                        <label for="cep" class="col-md-4 control-label">CEP</label>

                                        <div class="col-md-6">
                                            <input id="cep" type="text" class="form-control" name="cep" OnKeyPress="formatar('#####-###', this)" value="{{ old('cep') }}" required autofocus>

                                            @if ($errors->has('cep'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cep') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('logradouro') ? ' has-error' : '' }}">
                                        <label for="logradouro" class="col-md-4 control-label">logradouro</label>

                                        <div class="col-md-6">
                                            <input id="logradouro" type="text" class="form-control" name="logradouro" value="{{ old('logradouro') }}" required autofocus>

                                            @if ($errors->has('logradouro'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('logradouro') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                                        <label for="numero" class="col-md-4 control-label">Número</label>

                                        <div class="col-md-6">
                                            <input id="numero" type="text" class="form-control" name="numero" value="{{ old('numero') }}" required autofocus>

                                            @if ($errors->has('numero'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('numero') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
                                        <label for="bairro" class="col-md-4 control-label">Bairro</label>

                                        <div class="col-md-6">
                                            <input id="bairro" type="text" class="form-control" name="bairro" value="{{ old('bairro') }}" required autofocus>

                                            @if ($errors->has('bairro'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('bairro') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                                        <label for="cidade" class="col-md-4 control-label">Cidade</label>

                                        <div class="col-md-6">
                                            <input id="cidade" type="text" class="form-control" name="cidade" value="{{ old('cidade') }}" required autofocus>

                                            @if ($errors->has('cidade'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cidade') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('uf') ? ' has-error' : '' }}">
                                        <label for="uf" class="col-md-4 control-label">Estado</label>

                                        <div class="col-md-6">
                                            <input id="uf" type="text" class="form-control" name="uf" value="{{ old('uf') }}" required autofocus>

                                            @if ($errors->has('uf'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('uf') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                            @endif
                            <div class="form-group">
                                <div align="center">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                    <button type="reset" name="cancel" class="btn btn-default" onclick="history.go(-1)">    Cancelar
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection