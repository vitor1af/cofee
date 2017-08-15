<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Cadastro_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($atributo){

        if($atributo == "produto"){
            return view('cadastro.cadastro_produto');
        }else if($atributo == "cliente"){
            return view('cadastro.cadastro_cliente');
        }else if($atributo == "fornecedor"){
            return view('cadastro.cadastro_fornecedor');
        }else if($atributo == "usuario"){

            $usuarios = \App\User::All();
            $usuarios = $usuarios->sortBy('name');

            return view('cadastro.cadastro_usuario',compact('usuarios'));
        }else{
            return;
        }    
    }

    public function novo_usuario($atributo){
        if($atributo == "convidar"){
            return view('cadastro.cadastro_usuario_convite');
        }elseif ($atributo == "cadastrar") {
            return view('cadastro.cadastro_usuario_novo');
        }else{
            return;
        }
    }

    public function enviar_convite(Request $request){//testar no servidor em localhost não funciona
        
        $nome = $request->nome;
        $convidado = $request->convidado;
        $email = $request->email_usuario;
        $subject = "Cadastre-se no Cofee";
        $obs = $request->obs_convite;
        $link = "127.0.0.1:8000/register";

        $message = "Olá ".$convidado.",\nVocê recebeu um convite de ".$nome." para cadastrar-se no sistema Cofee.\nClique no link para que seja redirecionado até a página de cadastro.\n".$link."\n".$obs."\nAtenciosamente Equipe Cofee";

        mail( $email, $subject, $message);

        return view('cadastro.cadastro_usuario');
    }
    
    public function create_usuario(Request $data){

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return redirect('cadastro/usuario');
    }

    public function update_usuario(Request $request, $id){

        $usuario = \App\User::find($id);

        return view('cadastro/cadastro_usuario_update',compact('usuario')); 
    }  

    public function save_usuario(Request $request, $id){

        $usuario = \App\User::find($id);

        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');

        $usuario->save();

        return redirect('cadastro/usuario');
    }


    public function delete_usuario(Request $request, $id){

        $usuario = \App\User::find($id);

        $usuario = $usuario->delete();

        return redirect('cadastro/usuario');      

    }

    //FORNECEDOR
    public function fornecedor_pessoa(){
        return view('cadastro.cadastro_fornecedor_pessoa');
    }

    public function fornecedor_pessoa_novo(Request $request){
        $pessoa = $request->pessoa;
        return view('cadastro.cadastro_fornecedor_pessoa_novo',compact('pessoa'));
    }

    public function fornecedor_pessoa_novo_save(Request $data){

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
