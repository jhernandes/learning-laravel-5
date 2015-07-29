<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $name = 'Joao Felipe Magro Hernandes';
        $email = 'joaofelipeomega@gmail.com';
        $idade = '26';
        $telefone = '(18)98112-4037';

        return view('pages.about', compact(
            'name',
            'email',
            'idade',
            'telefone'
        ));
    }
}
