<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use App\Address;

class crudController extends Controller
{
    //contiene acciones 

    public function index(){
        $titulo = 'Registro basico';

        return view('crud.index',[
            'titulo' => $titulo
            ]);
    }

    public function obtenerUsuarios(){
        // $usuarios= DB::table('users')->get();

        // $usuarios = User::all();

        $usuarios = User::join("address","users.id","=","address.users_id")->get();
                // ->where('users.estado','=',1)
                

        return view('crud.obtenerUsuarios',[
            'usuario' => $usuarios
        ]);
    }

    // public function detallesUsuarios($id){
        
    //     $usuarios= $User::table('usuario')->where('id','=',$id)->firts();
        
    //     return view('crud.detallesUsuarios',[
    //         'usuarios' => $usuarios
    //     ]);
    // }

    public function insertUser(){
        // Genera el insert a la base de datos
        // return request();

        User::create([
            'username' => request('name'),
            'lastname' => request('lastnameP'),
            'lastname2' => request('lastnameM'),
            'age' => request('age')
        ]);
        
        $lastId = User::latest('id')->pluck('id')->first();

        Address::create([
            'street' => request('street'),
            'colony' => request('colony'),
            'delegation' => request('delegation'),
            'postalcode' => request('postalcode'),
            'users_id' => $lastId
        ]);

        return redirect()->route('index');
    }

    public function destroyUser(){
        $id = request('id');
        $deleteAddress=Address::where('users_id', '=', $id)->first();
        $deleteAddress->delete();

        $deleteUsers=User::where('id', '=', $id)->first();
        $deleteUsers->delete();

        return redirect()->route('obtenerUsuarios');
    }
}
