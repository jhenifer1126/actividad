<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Bienvenidos(){
        $nombri= 'siguiente pagina';
        return view('welcome',compact('nombri'));
    }

    public function Holi(){
        $jenny= 'siguiente pagina';
        return view('vistas.index',compact('jenny'));
    }

    public function Tercera(){
        $tres='volver al inicio';
        return view('vistas.create', compact('tres'));
    }

    public function  Categorias(){
        return view('cate.catego');
    }
}
